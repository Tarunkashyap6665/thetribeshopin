<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic;
use Symfony\Component\HttpFoundation\Response;

class CartController extends Controller
{
    public $userId;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
        if(Auth::check()){
            $this->userId=Auth::user()->id;
        }
        else{
            $this->userId=$request->token;
        }
        $product=Product::find($request->itemId);
        $imageArray=json_decode($product->haveAttribute->images);
        Cart::session($this->userId)->add([
            'id'=>$product->id,
            'name'=>$product->name,
            'price'=>$product->price,
            'quantity'=>$request->quantity,
            'attributes'=>[
                'image'=>$imageArray[0]
            ],
            'associatedModel'=>'Product'
        ]);
        if (app('wishlist')->session($this->userId)->has($request->itemId)){
            app('wishlist')->session($this->userId)->remove($request->itemId);
        }

        $data=Cart::session($this->userId)->get($request->itemId);
        $extraData=[
            'price'=>Cart::session($this->userId)->get($request->itemId)->getPriceSum(),
            'subtotal'=>Cart::session($this->userId)->getSubTotal(),
            'total'=>Cart::session($this->userId)->getTotal(),
            'itemCount'=>Cart::session($this->userId)->getContent()->count()
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
        $id=$id+0;
        if(Auth::check()){
            $this->userId=Auth::user()->id;
        }
        else{
            $this->userId=$request->token;
        }
        Cart::session($this->userId)->update($id,[
            'quantity'=>[
                'relative'=>false,
                'value'=>$request->quantity
            ]
        ]);
        $data=Cart::session($this->userId)->get($id);
        $extraData=[
            'price'=>Cart::session($this->userId)->get($id)->getPriceSum(),
            'subtotal'=>Cart::session($this->userId)->getSubTotal(),
            'total'=>Cart::session($this->userId)->getTotal(),
        ];
        return response()->json(['data'=>$data,'extraData'=>$extraData,'status'=>Response::HTTP_NO_CONTENT]);
        // return response()->json(['data'=>$request->all(),'data1'=>$id]);
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
