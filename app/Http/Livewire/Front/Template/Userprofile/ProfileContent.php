<?php

namespace App\Http\Livewire\Front\Template\Userprofile;

use Livewire\Component;

class ProfileContent extends Component
{
    public $user;
    public $firstName="";
    public $lastName="";

    public function mount($user)
    {
        $this->user=$user;
        $nameArray=explode(" ",$this->user->name);
        $len=count($nameArray);
        if($len>=2){
            $this->firstName=$nameArray[0];
            $this->lastName=$nameArray[$len-1];
        }
        else{
            $this->firstName=$nameArray[0];
        }
    }

    public function render()
    {
        return view('livewire.front.template.userprofile.profile-content');
    }
}
