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
        $this->validate([
            'photo.*' => 'image|max:1024', // 1MB Max
        ]);
        dd($this->photo);   
    }

    public function render()
    {
        return view('livewire.front.template.userprofile.profile-image');
    }
}
