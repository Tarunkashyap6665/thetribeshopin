<?php

namespace App\Http\Livewire\Front;

use App\Product;
use Livewire\Component;

class Checkout extends Component
{
    public $product;
    public $quantity;

    public function mount(Product $product)
    {
        $this->product=$product;
        if (isset($_GET['quantity'])) {
            $this->quantity=$_GET['quantity']+0;
        } 
    }
    public function render()
    {
        return view('livewire.front.checkout');
    }
}
