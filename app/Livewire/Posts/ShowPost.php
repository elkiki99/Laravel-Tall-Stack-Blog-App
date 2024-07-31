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
        return redirect()->route('posts.index')->with('success_published', 'Post published successfully.');
    }

    public function moveToDrafts()
    {
        $this->post->update([
            'status' => 'draft'
        ]);
        return redirect()->route('posts.pending')->with('success_drafted', 'Post moved to drafts successfully.');
    }

    public function deletePost()
    {
        $this->post->delete();
        return redirect()->route('posts.index')->with('success_deleted', 'Post deleted successfully.');
    }

    public function render()
    {
        return view('livewire.posts.show-post', [
            'post' => $this->post
        ]);
    }
}
