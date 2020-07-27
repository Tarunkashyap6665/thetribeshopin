<?php

namespace App\Http\Livewire\Front\Template\Homepage;

use App\Banner as AppBanner;
use App\Category;
use Livewire\Component;

class Banner extends Component
{
    public $banner;
    public function mount(){
        if (Category::count()) {
            $this->banner=AppBanner::all()->random(1)->first();
        }
    }
    public function render()
    {
        return view('livewire.front.template.homepage.banner');
    }
}
