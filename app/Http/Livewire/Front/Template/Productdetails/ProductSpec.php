<?php

namespace App\Http\Livewire\Front\Template\Productdetails;

use App\Product;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class ProductSpec extends Component
{
    public $product;
    public $quantity=1;

    public function mount($product)
    {
        $this->product=$product;
    }


    public function render()
    {
        return view('livewire.front.template.productdetails.product-spec');
    }
}
