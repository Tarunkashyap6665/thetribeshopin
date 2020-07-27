<?php

namespace App\Http\Livewire\Front;

use App\CouponDiscount;
use Livewire\Component;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use App\Product;
use Darryldecode\Cart\CartCondition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductCart extends Component
{
    public $coupon;
    public $active=0;
    
    public function mount(){
        if (Session::has('coupon')) {
            Cart::session(1)->removecartCondition(Session::get('coupon'));
        }
    }

    /**
     * Apply Coupon
     *
     * @return void
     */
    public function applyCoupon()
    {
        
        $conditionData=CouponDiscount::select('name','type','target','value')->where('name',$this->coupon)->get()->first();
        if($conditionData!=null){
            $condition=new CartCondition($conditionData->toArray());
            Cart::session(1)->condition($condition);
            Session::put('coupon',$this->coupon);
            $this->active=1;
            $this->model="";
        }
        else{
            session()->flash('error','invalid coupon applied..');
        }
    }

    public function removeCoupon($couponName)
    {
        Cart::session(1)->removecartCondition($couponName);
        $this->model="";
        $this->active=0;
    }

    /**
     * Remove cart item
     *
     * @param [integer] $itemId
     * @return void
     */
    public function removeCartItem($itemId) 
    {
        Cart::session(1)->remove($itemId);
    }

   public function addToWishlist($itemId)
   {
    $product=Product::find($itemId);
    app('wishlist')->session(1)->add([
        'id'=>$product->id,
        'name'=>$product->name,
        'price'=>$product->price,
        'quantity'=>$product->stock,
        'attributes'=>[
            'image'=>$product->haveImages()->select('image')->first()->image
        ],
        'associatedModel'=>$product
    ]);
    
    if (Cart::session(1)->has($itemId)){
        Cart::session(1)->remove($itemId);
    }
   }
    public function render()
    {
        return view('livewire.front.product-cart');
    }
}
