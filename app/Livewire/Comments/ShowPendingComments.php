<?php

namespace App\Livewire\Comments;

use App\Models\Comment;
use Livewire\Component;

class ShowPendingComments extends Component
{
    public function render()
    {
        $comments = Comment::where('is_approved', 0)->paginate(3);
        
        return view('livewire.comments.show-pending-comments', [
            'comments' => $comments
        ]);
    }
}