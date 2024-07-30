<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;

class ShowPost extends Component
{
    public $post;

    public function mount(Post $post)
    {
        $this->post = $post;
    }

    public function publishPost()
    {
        $this->post->update([
            'status' => 'published'
        ]);
        
    }

    public function moveToDraft()
    {
        $this->post->update([
            'status' => 'draft'
        ]);
    }

    public function render()
    {
        return view('livewire.posts.show-post', [
            'post' => $this->post
        ]);
    }
}
