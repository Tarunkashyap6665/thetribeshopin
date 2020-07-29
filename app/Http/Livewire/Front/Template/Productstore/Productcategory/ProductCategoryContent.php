<?php

namespace App\Http\Livewire\Front\Template\Productstore\Productcategory;

use Livewire\Component;
use App\Product;
use App\Category;
use App\ProductAttribute;
use Illuminate\Support\Facades\DB;

class ProductCategoryContent extends Component
{
    protected $products;
    protected $listeners=["filter"];
    
    public function mount($categoryId){
        // $category=Category::all()->where('parent_id',$category->id);
        // dd($category); 
        if ($categoryId){
            $this->products=Product::where('category_id',$categoryId)->paginate(6);
        } else {
            $this->products=Product::paginate(6);
        }
        
    } 

    public function filter($key,$value)
    {
        switch ($key) {
            case 'category':
                $this->products=Product::all()->where('category_id',$value);
                break;

            case 'color':
                $this->products=DB::select('select * from products where id in (select product_id from product_attributes where color=?)',[$value]);
            
            default:
                # code...
                break;
        }
    }

    public function render()
    {
        return view('livewire.front.template.productstore.productcategory.product-category-content',[
            'products'=>$this->products
        ]);
    }
}
