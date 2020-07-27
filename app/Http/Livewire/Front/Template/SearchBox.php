<?php

namespace App\Http\Livewire\Front\Template;

use Livewire\Component;
use App\Product;
use Illuminate\Support\Facades\Session;

class SearchBox extends Component
{
    public $searchbox;
    public $searchProduct;

    public function searchProduct()
    {
        $this->searchProduct=Product::search($this->searchbox)->get();
        Session::put('searchProduct',$this->searchProduct);
        return redirect()->to(route('search-page'));
    }
    public function render()
    {
        return view('livewire.front.template.search-box');
    }
}
