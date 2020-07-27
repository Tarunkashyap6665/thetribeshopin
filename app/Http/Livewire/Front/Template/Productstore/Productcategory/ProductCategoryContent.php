<?php

namespace App\Http\Livewire\Front\Template\Productstore\Productcategory;

use Livewire\Component;
use App\Product;
use App\Category;

class ProductCategoryContent extends Component
{
    protected $products;
    public function mount($categoryId){
        // $category=Category::all()->where('parent_id',$category->id);
        // dd($category); 
        if ($categoryId){
            $this->products=Product::where('category_id',$categoryId)->paginate(6);
        } else {
            $this->products=Product::paginate(6);
        }
        
    } 
    public function render()
    {
        return view('livewire.front.template.productstore.productcategory.product-category-content',[
            'products'=>$this->products
        ]);
    }
}
