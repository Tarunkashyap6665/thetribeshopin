<?php

namespace App\Http\Livewire\Front\Template\Homepage;

use App\Category;
use Livewire\Component;
use App\Banner;

class Slider extends Component
{
    public $banners;

    public function mount(){
        if(Banner::count()!=0){
            $this->banners=Banner::all(); 
        }
    }
    public function render()
    {
        return view('livewire.front.template.homepage.slider');
    }

   
}
