<?php

namespace App\Http\Livewire\Front\Template\Checkoutpage;

use Livewire\Component;
use App\CouponDiscount;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Support\Facades\Session;
use Darryldecode\Cart\CartCondition;
use Illuminate\Support\Facades\Auth;

class CouponSection extends Component
{

    public $coupon;
    public $msg;
    public $key;
    public $type;
    public $userId;

    public function mount()
    {
        if(Auth::check()){
            $this->userId=Auth::user()->id;
        }
        else{
            $this->userId=session()->get('_token');
        }
    }

    /**
     * Apply Coupon
     *
     * @return void
     */
    public function applyCoupon()
    {
        $conditionData = CouponDiscount::select('name', 'type', 'target', 'value')->where('name', $this->coupon)->get()->first();

        if ($conditionData != null) {
            $condition = new CartCondition($conditionData->toArray());
            Cart::session($this->userId)->condition($condition);
            Session::put('coupon', $this->coupon);
            $this->model = "";
            $this->msg = "Coupon Applied..";
            $this->type = "success";
            $this->key = "success";
        } else {
            $this->msg = "Invalid coupon code..";
            $this->key = "error";
            $this->type = "danger";
        }
        $this->emit('couponApplied',$this->key,$this->coupon);
    }
    
    
    public function removeCoupon($couponName)
    {
        Cart::session($this->userId)->removecartCondition($couponName);
        $this->model = "";
        $this->key = "";
        $this->emit('removedCoupon',$this->key);
    }
    public function render()
    {
        return view('livewire.front.template.checkoutpage.coupon-section');
    }
}
