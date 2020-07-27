<?php

namespace App\Http\Livewire\Front\Template\Productstore;

use Livewire\Component;

class ProductCategory extends Component
{
    public $category;
    public function mount($category)
    {
        $this->category=$category;
    }
    public function render()
    {
        return view('livewire.front.template.productstore.product-category');
    }
}
