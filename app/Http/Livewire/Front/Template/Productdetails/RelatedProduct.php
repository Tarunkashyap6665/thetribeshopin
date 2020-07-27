<?php

namespace App\Http\Livewire\Front\Template\Productdetails;

use App\Product;
use Livewire\Component;

class RelatedProduct extends Component
{
    public $products;
    public function mount($product){
        if(Product::all()->where('category_id',$product->category_id)->count()>=8){
            $this->products=Product::all()->where('category_id',$product->category_id)->random(8)->where('id','!=',$product->id);
        }
        else{
            $this->products=Product::all()->where('category_id',$product->category_id)->where('id','!=',$product->id);
        }
    } 
    public function render()
    {
        return view('livewire.front.template.productdetails.related-product');
    }
}
