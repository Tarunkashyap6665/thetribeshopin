<?php

namespace App\Http\Livewire\Front;

use App\Category;
use App\Product;
use Livewire\Component;

class ProductStore extends Component
{
    public $category;

    public function mount($category=0)
    {
        $this->category=$category;
    }
    public function render()
    {
        return view('livewire.front.product-store');
    }
}
