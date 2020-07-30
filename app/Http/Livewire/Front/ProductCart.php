<?php

namespace App\Http\Livewire\Front;

use App\CouponDiscount;
use Livewire\Component;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use App\Product;
use Darryldecode\Cart\CartCondition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ProductCart extends Component
{
    public $coupon;
    public $msg;
    public $key;
    public $type;
    public $userId;
    
    public function mount(){
        if(Auth::check()){
            $this->userId=Auth::user()->id;
        }
        else{
            $this->userId=session()->get('_token');
        }
        if (Session::has('coupon')) {
            Cart::session($this->userId)->removecartCondition(Session::get('coupon'));
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
            Cart::session($this->userId)->condition($condition);
            Session::put('coupon',$this->coupon);
            $this->model="";
            $this->msg="Coupon Applied..";
            $this->type="success";
            $this->key="success";
        }
        else{
            $this->msg="Invalid coupon code..";
            $this->key="error";
            $this->type="danger";
        }
    }

    public function removeCoupon($couponName)
    {
        Cart::session($this->userId)->removecartCondition($couponName);
        $this->model="";
        $this->key="";
    }

    /**
     * Remove cart item
     *
     * @param [integer] $itemId
     * @return void
     */
    public function removeCartItem($itemId) 
    {
        if(Auth::check()){
            $this->userId=Auth::user()->id;
        }
        else{
            $this->userId=session()->get('_token');
        }
        Cart::session($this->userId)->remove($itemId);
    }

   public function addToWishlist($itemId)
   {
    if(Auth::check()){
        $this->userId=Auth::user()->id;
    }
    else{
        $this->userId=session()->get('_token');
    }
    $product=Product::find($itemId);
    $imageArray=json_decode($product->haveAttribute->images);
    app('wishlist')->session($this->userId)->add([
        'id'=>$product->id,
        'name'=>$product->name,
        'price'=>$product->price,
        'quantity'=>$product->stock,
        'attributes'=>[
            'image'=>$imageArray[0],
        ],
        'associatedModel'=>$product
    ]);
    
    if (Cart::session($this->userId)->has($itemId)){
        Cart::session($this->userId)->remove($itemId);
    }
   }
    public function render()
    {
        return view('livewire.front.product-cart');
    }
}
