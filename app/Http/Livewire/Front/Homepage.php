<?php

namespace App\Http\Livewire\Front;

use Darryldecode\Cart\CartCondition;
use Livewire\Component;
use Darryldecode\Cart\Facades\CartFacade as Cart;
class Homepage extends Component
{
    public function mount()
    {
        $taxCondition=new CartCondition([
            'name'=>'GST 18% tax',
            'type'=>'tax',
            'target'=>'total',
            'value'=>'18%',
            'attributes'=>[
                'description'=>'This tax is apply on all product by indian govt. as GST.'
            ]
        ]);

        Cart::session(1)->condition($taxCondition);
    }
    public function render()
    {
        return view('livewire.front.homepage');
    }
}
