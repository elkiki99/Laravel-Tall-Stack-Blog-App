<?php

namespace App\Livewire\Likes;

use App\Models\Post;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ToggleLike extends Component
{
    public $post;

    public function mount(Post $post)
    {
        $this->post = $post;
    }
    
    public function toggleLike()
    {
        $isLiked = $this->post->likes()->where('user_id', Auth::id())->exists();

        if ($isLiked) {
            $this->post->likes()->detach(Auth::id());
        } else {
            $this->post->likes()->attach(Auth::id());
        }

        $likesCount = $this->post->likes()->count();
        $isLiked = !$isLiked;

        return [
            'likesCount' => $likesCount,
            'isLiked' => $isLiked,
        ];
    }

    public function render()
    {
        return view('livewire.likes.toggle-like');
    }
}