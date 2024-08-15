<?php

namespace App\Livewire\Likes;

use App\Models\Post;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ToggleLike extends Component
{
    public $post;
    public $isLiked;

    public function mount(Post $post)
    {
        $this->post = $post;
        $this->isLiked = $post->likes()->where('user_id', Auth::id())->exists();
    }
    
    public function toggleLike()
    {
        if ($this->isLiked) {
            $this->post->likes()->detach(Auth::id());
        } else {
            $this->post->likes()->attach(Auth::id());
        }

        $this->isLiked = !$this->isLiked;
    }

    public function render()
    {
        return view('livewire.likes.toggle-like');
    }
}