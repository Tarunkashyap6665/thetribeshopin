<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use App\Product;
use Illuminate\Support\Facades\Auth;

class Wishlist extends Component
{
    public $userId;
    public function addToCart($productId)
    {
        if(Auth::check()){
            $this->userId=Auth::user()->id;
        }
        else{
            $this->userId=session()->get('_token');
        }
        $product=Product::find($productId);
        $imageArray=json_decode($product->haveAttribute->images);
        Cart::session($this->userId)->add([
            'id'=>$product->id,
            'name'=>$product->name,
            'price'=>$product->price,
            'quantity'=>$product->stock,
            'attributes'=>[
                'image'=>$imageArray[0],
            ],
            'associatedModel'=>'Product'
        ]);
        if (app('wishlist')->session($this->userId)->has($productId)){
            app('wishlist')->session($this->userId)->remove($productId);
        }
    }

    public function removeWishlistItem($itemId) 
    {
        if(Auth::check()){
            $this->userId=Auth::user()->id;
        }
        else{
            $this->userId=session()->get('_token');
        }
        // dd(Cart::session($this->userId)->get($itemId));
        app('wishlist')->session($this->userId)->remove($itemId);
    }
    
    public function render()
    {
        return view('livewire.front.wishlist');
    }
}
