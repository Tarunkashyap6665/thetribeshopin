<?php

namespace App\Http\Livewire\Front\Template\Userprofile;

use Livewire\Component;
use Livewire\WithFileUploads;

class ProfileImage extends Component
{
    use WithFileUploads;

    public $photos;
    public $user;

    public function mount($user)
    {
        $this->user=$user;
    } 

    public function save()
    {
        $this->photos->storeAs('public/users',$this->photos->getClientOriginalName());
        $this->user->avatar='users/'.$this->photos->getClientOriginalName();
        $this->user->save();
    }

    public function render()
    {
        return view('livewire.front.template.userprofile.profile-image');
    }
}
