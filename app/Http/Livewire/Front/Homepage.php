<?php

namespace App\Http\Livewire\Front;

use Darryldecode\Cart\CartCondition;
use Livewire\Component;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;

class Homepage extends Component
{
    public $userId;
    public function mount()
    {
        session()->put('userId',random_int(10,100));
        if(Auth::check()){
            $this->userId=Auth::user()->id;
        }
        else{
            $this->userId=session()->get('userId');
            
        }
        $taxCondition=new CartCondition([
            'name'=>'GST 18% tax',
            'type'=>'tax',
            'target'=>'total',
            'value'=>'18%',
            'attributes'=>[
                'description'=>'This tax is apply on all product by indian govt. as GST.'
            ]
        ]);

        Cart::session($this->userId)->condition($taxCondition);
    }
    public function render()
    {
        return view('livewire.front.homepage');
    }
}
