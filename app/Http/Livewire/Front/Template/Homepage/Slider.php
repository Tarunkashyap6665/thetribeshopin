<?php

namespace App\Http\Livewire\Front\Template\Homepage;

use App\Category;
use Livewire\Component;

class Slider extends Component
{
    public $categories;

    public function mount(){
        $this->categories=Category::all()->whereNull('parent_id'); 
    }
    public function render()
    {
        return view('livewire.front.template.homepage.slider');
    }

   
}
