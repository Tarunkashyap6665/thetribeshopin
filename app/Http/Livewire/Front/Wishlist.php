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
            $this->userId=session()->get('userId');
        }
        $product=Product::find($productId);
        Cart::session($this->userId)->add([
            'id'=>$product->id,
            'name'=>$product->name,
            'price'=>$product->price,
            'quantity'=>$product->stock,
            'attributes'=>[
                'image'=>$product->haveImages()->select('image')->first()->image
            ],
            'associatedModel'=>'Product'
        ]);
        if (app('wishlist')->session($this->userId)->has($productId)){
            app('wishlist')->session($this->userId)->remove($productId);
        }
    }

    public function removeWishlistItem($itemId) 
    {
        // dd(Cart::session($this->userId)->get($itemId));
        app('wishlist')->session($this->userId)->remove($itemId);
    }
    
    public function render()
    {
        return view('livewire.front.wishlist');
    }
}
