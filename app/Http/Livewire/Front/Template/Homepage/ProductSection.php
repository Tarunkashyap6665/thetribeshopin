<?php

namespace App\Http\Livewire\Front\Template\Homepage;

use App\Category;
use App\Product;
use Livewire\Component;

class ProductSection extends Component
{
    public $categories;
    public $active;
    protected $listeners=['add'];
    public function mount(){

        $this->categories=Category::all();
        foreach($this->categories as $category){
            if(!empty($category->haveProducts->first())){
                $this->active=$category->id;
            break;
            }
        }

    }

    public function selectedCategory($categoryId){
        $this->active=$categoryId;
    }
    public function render()
    {
        return view('livewire.front.template.homepage.product-section');
    }
}
