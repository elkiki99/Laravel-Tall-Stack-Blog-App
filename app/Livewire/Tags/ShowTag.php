<?php

namespace App\Livewire\Tags;

use Livewire\Component;
use App\Models\Tag;

class ShowTag extends Component
{
    public $tag;
    
    public function mount(Tag $tag) 
    {
        $this->tag = $tag;
    }

    public function render()
    {
        $posts = $this->tag->posts()->where('status', 'published')->latest()->paginate(10);
        return view('livewire.tags.show-tag', [
            'posts' => $posts
        ]);
    }
}