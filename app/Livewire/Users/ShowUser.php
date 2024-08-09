<?php

namespace App\Livewire\Users;

use Livewire\Component;

class ShowUser extends Component
{
    public $user;

    public function mount($user)
    {
        $this->user = $user;
    }
    
    public function render()
    {
        return view('livewire.users.show-user');
    }
}
