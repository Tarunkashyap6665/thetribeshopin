<?php

namespace App\Http\Livewire\Front\Template;

use Livewire\Component;

class ProductCard extends Component
{
    public $product;
    public function mount($product)
    {
        $this->product=$product;
    }
    public function render()
    {
        return view('livewire.front.template.product-card');
    }
}
