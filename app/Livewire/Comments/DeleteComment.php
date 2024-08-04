<?php

namespace App\Livewire\Comments;

use App\Models\Comment;
use Livewire\Component;

class DeleteComment extends Component
{
    public $commentId;

    public function deleteComment()
    {
        $comment = Comment::findOrFail($this->commentId);
        $comment->delete();
        return redirect()->route('comments.index')->with('success_deleted', 'Comment deleted successfully.');
    }

    public function render()
    {
        return view('livewire.comments.delete-comment');
    }
}
