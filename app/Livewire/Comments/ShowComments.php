<?php

namespace App\Livewire\Comments;

use App\Models\Comment;
use Livewire\Component;

class ShowComments extends Component
{
    public function render()
    {
        $comments = Comment::where('is_approved', 1)->paginate(3);
        
        return view('livewire.comments.show-comments', [
            'comments' => $comments
        ]);
    }
}
