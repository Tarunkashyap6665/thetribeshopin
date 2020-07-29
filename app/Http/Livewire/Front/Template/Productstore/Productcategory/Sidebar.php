<?php

namespace App\Http\Livewire\Front\Template\Productstore\Productcategory;

use App\Category;
use App\ProductAttribute;
use Illuminate\Support\Arr;
use Livewire\Component;

class Sidebar extends Component
{
    public $categories=[];
    public $colors=[];
    public $minPrice;
    public $maxPrice;
    public function mount()
    {
        Category::all()->each(function($category){
            if (!empty($category->haveProducts->first())) {
                array_push($this->categories,$category);
            }
        });
        ProductAttribute::all()->each(function($attribute){
            array_push($this->colors,$attribute->color);
        });

        $this->colors=array_unique($this->colors);
        // if(isset($_GET['minPrice']) && isset($_GET['maxPrice'])){
        //     if($_GET['minPrice']!="" && $_GET['maxPrice']!=""){
        //         $this->minPrice=$_GET['minPrice']+0;
        //         $this->maxPrice=$_GET['maxPrice']+0;

        //         $this->emit('filter','price','tddhgdgdg');
        //     }
        // }
    }
    public function render()
    {
        return view('livewire.front.template.productstore.productcategory.sidebar');
    }
}
