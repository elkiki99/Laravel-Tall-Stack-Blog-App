<?php

namespace App\Livewire\Comments;

use App\Models\Post;
use App\Models\Comment;
use Livewire\Component;

class PostComments extends Component
{   
    public $post;
    public $comment;
    public $reply;
    public $parentCommentId;

    protected $rules = [
        'comment' => 'required|string|max:255',
        'reply' => 'required|string|max:255',
    ];

    public function mount(Post $post)
    {
        $this->post = $post;
    }

    public function addComment()
    {
        $this->validate(['comment' => 'required|string|max:255']);

        $this->post->comments()->create([
            'user_id' => auth()->id(),
            'post_id' => $this->post->id,
            'body' => $this->comment,
        ]);
        $this->comment = '';
    }

    public function setParentComment($commentId)
    {
        $this->parentCommentId = $commentId;
    }

    public function addReply()
    {
        $this->validate(['reply' => 'required|string|max:255']);

        $this->post->comments()->create([
            'user_id' => auth()->id(),
            'post_id' => $this->post->id,
            'body' => $this->reply,
            'parent_id' => $this->parentCommentId,
        ]);

        $this->reply = '';
        $this->parentCommentId = null;
    }

    public function deleteComment($commentId)
    {
        $comment = Comment::findOrFail($commentId);
        $comment->delete();
        $this->post = $this->post->fresh();
    }

    public function render()
    {
        $comments = $this->post->comments()->with('user', 'children.user')->whereNull('parent_id')->get();
        return view('livewire.comments.post-comments', [
            'comments' => $comments
        ]);
    }
}