<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;

class DeletePost extends Component
{
    public $postId;

    public function deletePost()
    {
        $post = Post::findOrFail($this->postId);
        $post->delete();
        return redirect()->route('posts.index')->with('success_deleted', 'Post deleted successfully.');
    }

    public function render()
    {
        return view('livewire.posts.delete-post');
    }
}
