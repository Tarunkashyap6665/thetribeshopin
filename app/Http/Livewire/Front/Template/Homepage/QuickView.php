<?php

namespace App\Http\Livewire\Front\Template\Homepage;

use App\Category;
use App\Product;
use Livewire\Component;
use Intervention\Image\ImageManagerStatic;
use Darryldecode\Cart\Facades\CartFacade as Cart;
class QuickView extends Component
{
    public $product;
    public $category;
    public $quantity=1;
    public $active=false;
    protected $listeners=['quickView'];

    public function mount(){
        $this->product=Product::first();
        $this->category=Category::find($this->product->category_id);
    }

    public function quickView($id){
        $this->product=Product::find($id);
        $this->category=Category::find($this->product->category_id);
    }

    public function hydrate(){
        $this->active=true;
    }

    public function hideModel()
    {
        $this->active=false;
    }

    public function render()
    {
        return view('livewire.front.template.homepage.quick-view');
    }
}
