<?php

namespace App\Http\Livewire\Front\Template\Userprofile;

use App\Order;
use App\OrderProduct;
use App\UserDetails;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProfileContent extends Component
{
    public $user;
    public $orderProducts;
    public $orders;
    public $form=[
        'firstName'=>'',
       'lastName'=>'',
       'mobile'=>'',
       'email'=>'',

    ];
    public $edit=false;

    public function mount($user)
    {
        $this->user=$user;
        $nameArray=explode(" ",$this->user->name);
        $len=count($nameArray);
        if($len>=2){
            $this->form['firstName']=$nameArray[0];
            $this->form['lastName']=$nameArray[$len-1]; 
            $this->form['mobile']=$user->userDetails->mobile??''; 
            $this->form['email']=$user->email??''; 
        }
        else{
            $this->form['firstName']=$nameArray[0];
            $this->form['mobile']=$user->userDetails->mobile??''; 
            $this->form['email']=$user->email??''; 
        }

        if(Order::all()->where('user_id',Auth::user()->id)->count()!=0){
            $this->orders=Order::all()->where('user_id',Auth::user()->id);
        }
    }

    public function edit()
    {
        $this->edit=true;
    }

    public function save()
    {
        $this->edit=false;
        $this->user->name=$this->form['firstName'].' '.$this->form['lastName'];
        $this->user->email=$this->form['email'];
        $this->user->save();
        if ($this->user->userDetails) {
            # code...
            $this->user->userDetails->mobile=$this->form['mobile'];
            $this->user->userDetails->save();
        } else {
            UserDetails::create([
                'user_id'=>$this->user->id,
                'mobile'=>$this->form['mobile'],
            ]);
        }
        
    }
    public function render()
    {
        return view('livewire.front.template.userprofile.profile-content',[
            'edit'=>$this->edit,
        ]);
    }
}
