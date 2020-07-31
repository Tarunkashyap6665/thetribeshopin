<?php

namespace App\Http\Livewire\Front\Template\Checkoutpage;

use Livewire\Component;

class ShippingDetails extends Component
{
    public $product;
    public $grandTotal;
    public $quantity;

    public function mount($product,$quantity,$grandTotal)
    {
        $this->product=$product;
        $this->quantity=$quantity;
        $this->grandTotal=$grandTotal;
    }
    public function render()
    {
        return view('livewire.front.template.checkoutpage.shipping-details');
    }
}
