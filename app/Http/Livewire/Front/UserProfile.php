<?php

namespace App\Http\Livewire\Front;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserProfile extends Component
{
    public $user;

    public function mount()
    {
        $this->user=Auth::user();
    }

    
    public function render()
    {
        return view('livewire.front.user-profile');
    }
}
