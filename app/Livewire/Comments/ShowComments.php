<?php

namespace App\Livewire\Comments;

use App\Models\Comment;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;

class ShowComments extends Component
{
    use WithPagination;
    
    public $searchComments = '';
    
    public function deleteComment($commentId)
    {
        $comment = Comment::findOrFail($commentId);
        $comment->delete();
    }

    public function render()
    {
        $comments = Comment::query()
            ->when($this->searchComments !== '', function (Builder $query) {
                $query->where('body', 'like', '%' . $this->searchComments . '%');
            })
            ->paginate(20);
        
        return view('livewire.comments.show-comments', [
            'comments' => $comments
        ]);
    }
}
