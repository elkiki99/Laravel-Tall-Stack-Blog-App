<?php

namespace App\Livewire\Comments;

use App\Models\Comment;
use Livewire\Component;

class ShowComments extends Component
{
    public function render()
    {
        $comments = Comment::latest()->paginate(20);
        
        return view('livewire.comments.show-comments', [
            'comments' => $comments
        ]);
    }
}
