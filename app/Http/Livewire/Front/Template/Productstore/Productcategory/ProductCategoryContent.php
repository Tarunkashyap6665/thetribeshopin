<?php

namespace App\Http\Livewire\Front\Template\Productstore\Productcategory;

use Livewire\Component;
use App\Product;
use App\Category;
use App\ProductAttribute;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Cast\Array_;

class ProductCategoryContent extends Component
{
    protected $products=[];
    protected $listeners=["filter"];
    public $name;
    public $price;
    public $date;
    
    public function mount($category){
        // $category=Category::all()->where('parent_id',$category->id);
        // dd($category->id); 
        if ($category->id){
            // dd("fdfdfd");
            $this->products=Product::where('category_id',$category->id)->paginate(6);
        } else {
            // dd("else");
            $this->products=Product::paginate(6);
        }

        if(isset($_GET['key'])){

            if($_GET['key']=='price'){
        
                $min=$_GET['value']['min']+0;
                $max=$_GET['value']['max']+0;
                $this->products=Product::all()->whereBetween('price',[$min,$max]);
            }
        }

        
    } 

    public function order($order)
    {
        switch ($order) {
            case 'name':
                $this->products=Product::all()->orderBy('name');
                break;
                case 'price':
                $this->products=Product::all()->orderBy('price');
            break;
            case 'date':
                $this->products=Product::all()->orderBy('created_at');
            break;
            
            default:
            # code...
        break;
    }
}

    public function filter($key,$value)
    {
        switch ($key) {
            case 'category':
                $this->products=Product::all()->where('category_id',$value);
                $this->products=$this->products->toArray();
                break;

            case 'color':
                ProductAttribute::all()->where('color',$value)->each(function($attribute){
        
                   $product=$attribute->product;
                   array_push($this->products,$product);

                });
              
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
