<?php

namespace App\Http\Livewire\Front\Template;

use Livewire\Component;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Support\Facades\Auth;

class HeaderShoppingCart extends Component
{
    public $active=false;
    public $userId;

    public function mount()
    {
        if(Auth::check()){
            $this->userId=Auth::user()->id;
        }
        else{
            $this->userId=session()->get('userId');
        }
    }
    public function enableCartBox()
    {
        $this->active=true;
    }

    public function disableCartBox()
    {
        $this->active=false;
    }

    /**
     * Remove cart item
     *
     * @param [integer] $itemId
     * @return void
     */
    public function removeCartItem($itemId) 
    {
        Cart::session($this->userId)->remove($itemId);
    }

    public function render()
    {
        return view('livewire.front.template.header-shopping-cart');
    }
}
