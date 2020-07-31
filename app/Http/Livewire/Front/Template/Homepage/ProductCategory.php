<?php

namespace App\Http\Livewire\Front\Template\Homepage;

use App\Category;
use App\Product;
use Livewire\Component;

class ProductCategory extends Component
{
    public $active;
    public $diffProducts=[
        'popular'=>'',
        'featured'=>'',
        'latest'=>''
    ];
    public function mount(){
        if(Product::count()>=7){
            if(Product::all()->where('popular',true)->count()>=7){
                $this->diffProducts['popular']=Product::all()->where('popular',true)->random(7);
            }
            else{
                $this->diffProducts['popular']=Product::all()->where('popular',true);
            }
            if(Product::all()->where('featured',true)->count()>=7){
                $this->diffProducts['featured']=Product::all()->where('featured',true)->random(7);
            }
            else{
                $this->diffProducts['featured']=Product::all()->where('featured',true);
            }
            $this->diffProducts['latest']=Product::select('*')->orderBy('created_at','desc')->take(7)->get();
        }else{
            
            $this->diffProducts['popular']=Product::all()->where('popular',true);
            $this->diffProducts['featured']=Product::all()->where('featured',true);
            $this->diffProducts['latest']=Product::select('*')->orderBy('created_at','desc')->get();
        }
        $this->active='popular';

    }
    public function render()
    {
        return view('livewire.front.template.homepage.product-category');
    }
}
