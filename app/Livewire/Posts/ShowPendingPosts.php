<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;

class ShowPendingPosts extends Component
{
    use WithPagination;

    public string $searchPost = '';
    
    public function render()
    {
        $posts = Post::query()
            ->when($this->searchPost !== '', function (Builder $query) {
                $query->where('name', 'like', '%' . $this->searchPost . '%');
            })
            ->where('status', 'draft')
            ->paginate(20);

        return view('livewire.posts.show-pending-posts', [
            'posts' => $posts,
        ]);
    }
}