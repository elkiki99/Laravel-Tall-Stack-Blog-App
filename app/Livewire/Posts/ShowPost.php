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
        return redirect()->route('posts.index')->with('success', 'Post published successfully.');
    }

    public function moveToDrafts()
    {
        $this->post->update([
            'status' => 'draft'
        ]);
        return redirect()->route('posts.pending')->with('success', 'Post moved to drafts successfully.');
    }

    public function render()
    {
        return view('livewire.posts.show-post', [
            'post' => $this->post
        ]);
    }
}
