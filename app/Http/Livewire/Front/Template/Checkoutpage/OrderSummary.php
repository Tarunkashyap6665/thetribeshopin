<?php

namespace App\Http\Livewire\Front\Template\Checkoutpage;

use Livewire\Component;

class OrderSummary extends Component
{
    public $key;
    public $coupon;
    public $product;

    protected $listeners=['couponApplied','removedCoupon'];

    public function mount($product)
    {
        $this->product=$product;
    }
    public function couponApplied($key,$coupon)
    {
        $this->key=$key;
        $this->coupon=$coupon;
    }

    public function removedCoupon($key)
    {
        $this->key=$key;
    }

    public function render()
    {
        return view('livewire.front.template.checkoutpage.order-summary');
    }
}
