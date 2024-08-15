<?php

namespace App\Livewire\Likes;

use App\Models\User;
use Livewire\Component;

class ShowLikedPosts extends Component
{
    public $user;

    public function mount($userId)
    {
        $this->user = User::find($userId);
    }

    public function render()
    {
        $posts = $this->user->likes()->where('status', 'published')->latest()->paginate(10);

        return view('livewire.likes.show-liked-posts', [
            'posts' => $posts,
        ]);
    }
}
