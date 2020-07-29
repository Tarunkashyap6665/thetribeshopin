<?php

namespace App\Http\Livewire\Front;

use App\Product;
use Livewire\Component;

class Checkout extends Component
{
    public $product;
    public function mount(Product $product)
    {
        $this->product=$product; 
    }
    public function render()
    {
        return view('livewire.front.checkout');
    }
}
