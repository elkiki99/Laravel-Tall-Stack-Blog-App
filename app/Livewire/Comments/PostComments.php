<?php

namespace App\Livewire\Comments;

use App\Models\Post;
use App\Models\Comment;
use Livewire\Component;

class PostComments extends Component
{
    public $post;
    public $newComment;
    public $parentCommentId;

    protected $rules = [
        'newComment' => 'required|max:255',
    ];

    public function mount(Post $post)
    {
        $this->post = $post;
    }

    public function addComment()
    {
        $this->validate();

        Comment::create([
            'user_id' => auth()->id(),
            'post_id' => $this->post->id,
            'body' => $this->newComment,
            'parent_id' => $this->parentCommentId,
        ]);

        $this->newComment = '';
        $this->parentCommentId = null;
    }

    public function setParentComment($commentId)
    {
        $this->parentCommentId = $commentId;
    }

    public function render()
    {
        $comments = $this->post->comments();
        return view('livewire.comments.post-comments', [
            'comments' => $comments
        ]);
    }
}
