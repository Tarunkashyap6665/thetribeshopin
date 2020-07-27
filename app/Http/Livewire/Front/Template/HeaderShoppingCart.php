<?php

namespace App\Http\Livewire\Front\Template;

use Livewire\Component;
use Darryldecode\Cart\Facades\CartFacade as Cart;

class HeaderShoppingCart extends Component
{
    public $active=false;
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
        Cart::session(1)->remove($itemId);
    }

    public function render()
    {
        return view('livewire.front.template.header-shopping-cart');
    }
}
