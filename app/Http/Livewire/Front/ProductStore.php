<?php

namespace App\Http\Livewire\Front;

use App\Category;
use App\Product;
use Livewire\Component;

class ProductStore extends Component
{
    public $category;

    public function mount(Category $category)
    {
        // dd($category);
        $this->category=$category;
    }
    public function render()
    {
        return view('livewire.front.product-store');
    }
}
