<?php

namespace App\Http\Livewire\Front\Template\Homepage;

use App\Category;
use Livewire\Component;

class PromoSection extends Component
{
    public $categoryLeft;
    public $categories;
    public function mount(){
        if(Category::count()!=0){
            $this->categoryLeft=Category::all()->random(1)->first();
            if(Category::count()>=4){
                $this->categories=Category::all()->random(4);
            }else{
                $this->categories=Category::all();

            }
        }
    }
    public function render()
    {
        return view('livewire.front.template.homepage.promo-section');
    }
}
