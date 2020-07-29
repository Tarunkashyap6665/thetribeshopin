<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Product;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
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
        app('wishlist')->session($this->userId)->add([
            'id'=>$product->id,
            'name'=>$product->name,
            'price'=>$product->price,
            'quantity'=>$request->quantity,
            'attributes'=>[
                'image'=>$imageArray[0]
            ],
            'associatedModel'=>'Product'
        ]);
        
        if (Cart::session($this->userId)->has($request->itemId)){
            Cart::session($this->userId)->remove($request->itemId);
        }

        $count=Cart::session($this->userId)->getContent()->count();
            // return response()->json(['itemCount'=>$this->userId]);
        return response()->json(['message'=>'Item Added to whislist...','itemCount'=>$count],Response::HTTP_CREATED);
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
        //
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
