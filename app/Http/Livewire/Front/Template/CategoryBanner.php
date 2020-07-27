<?php

namespace App\Http\Livewire\Front\Template;

use App\Banner;
use Livewire\Component;

class CategoryBanner extends Component
{
    public $page;
    public $type;
    public $banner;
    public function mount($page='',$type=''){
        $this->page=$page;
        $this->type=$type;
    }
    public function render()
    {
        if (Banner::count()!=0) {
            $this->banner=Banner::all()->random(1)->first();
        }
        return view('livewire.front.template.category-banner');
    }
}
