<?php

namespace App\Http\Livewire\Front;

use App\Product;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class ProductDetails extends Component
{
    public $product;
    public $status=false;

    public function mount(Product $product){
        $this->product=$product;
    }

    public function render()
    {
        return view('livewire.front.product-details');
    }
}
