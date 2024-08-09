<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;

class ShowUser extends Component
{
    public $user;

    public function mount($userId)
    {
        $this->user = User::find($userId);
    }
    
    public function render()
    {
        $posts = $this->user->posts()->where('status', 'published')->latest()->paginate(10);

        return view('livewire.users.show-user', [
            'posts' => $posts
        ]);
    }
}
