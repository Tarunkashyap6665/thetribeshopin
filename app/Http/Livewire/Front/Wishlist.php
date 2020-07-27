<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use App\Product;

class Wishlist extends Component
{

    public function addToCart($productId)
    {
        $product=Product::find($productId);
        Cart::session(1)->add([
            'id'=>$product->id,
            'name'=>$product->name,
            'price'=>$product->price,
            'quantity'=>$product->stock,
            'attributes'=>[
                'image'=>$product->haveImages()->select('image')->first()->image
            ],
            'associatedModel'=>'Product'
        ]);
        if (app('wishlist')->session(1)->has($productId)){
            app('wishlist')->session(1)->remove($productId);
        }
    }

    public function removeWishlistItem($itemId) 
    {
        // dd(Cart::session(1)->get($itemId));
        app('wishlist')->session(1)->remove($itemId);
    }
    
    public function render()
    {
        return view('livewire.front.wishlist');
    }
}
