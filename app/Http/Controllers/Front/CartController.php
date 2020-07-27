<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Intervention\Image\ImageManagerStatic;
use Symfony\Component\HttpFoundation\Response;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        dd(Cart::session(1)->has(15));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function store(Request $request)
    {
        $product=Product::find($request->itemId);
        $imageArray=json_decode($product->haveAttribute->images);
        Cart::session(1)->add([
            'id'=>$product->id,
            'name'=>$product->name,
            'price'=>$product->price,
            'quantity'=>$request->quantity,
            'attributes'=>[
                'image'=>$imageArray[0]
            ],
            'associatedModel'=>'Product'
        ]);
        if (app('wishlist')->session(1)->has($request->itemId)){
            app('wishlist')->session(1)->remove($request->itemId);
        }

        $data=Cart::session(1)->get($request->itemId);
        $extraData=[
            'price'=>Cart::session(1)->get($request->itemId)->getPriceSum(),
            'subtotal'=>Cart::session(1)->getSubTotal(),
            'total'=>Cart::session(1)->getTotal(),
            'itemCount'=>Cart::session(1)->getContent()->count()
        ];
        // return response()->json(['data'=>$imageArray]);
        return response()->json(['data'=>$data,'extraData'=>$extraData,'status'=>Response::HTTP_NO_CONTENT]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd("show");
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Cart::session(1)->update($id,[
            'quantity'=>[
                'relative'=>false,
                'value'=>$request->quantity
            ]
        ]);
        $data=Cart::session(1)->get($id);
        $extraData=[
            'price'=>Cart::session(1)->get($id)->getPriceSum(),
            'subtotal'=>Cart::session(1)->getSubTotal(),
            'total'=>Cart::session(1)->getTotal(),
        ];
        return response()->json(['data'=>$data,'extraData'=>$extraData,'status'=>Response::HTTP_NO_CONTENT]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
