<?php

namespace App\Http\Livewire\Front\Template\Checkoutpage;

use Livewire\Component;

class ShippingDetails extends Component
{
    public $product;
    public $grandTotal;
    public $quantity;
    // public $form=[
    //     'name'=>'',
    //     'email'=>'',
    //     'mobile'=>'',
    //     'address'=>'',
    //     'country'=>'',
    //     'pincode'=>'',
    //     'state'=>'',
    //     'city'=>''
    // ];

    public function mount($product,$quantity,$grandTotal)
    {
        $this->product=$product;
        $this->quantity=$quantity;
        $this->grandTotal=$grandTotal;
    }

    // public function updated($feild)
    // {
    //     $this->validateOnly($feild,[
    //         'name'=>'required',
    //         'email'=>'email:rfc,dns|required',
    //         'mobile'=>'required|digits:10',
    //         'address'=>'required|alpha',
    //         'country'=>'required',
    //         'state'=>'required',
    //         'city'=>'required'
    //       ]
    //       );
    // }
    public function render()
    {
        return view('livewire.front.template.checkoutpage.shipping-details');
    }
}
