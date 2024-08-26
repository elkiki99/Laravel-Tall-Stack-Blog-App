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
        $posts = $this->tag->posts()->where('status', 'published')->where('is_featured', 0)->latest()->paginate(10);
        $featuredPosts = $this->tag->posts()->where('status', 'published')->where('is_featured', 1)->latest()->take(3)->get();

        return view('livewire.tags.show-tag', [
            'posts' => $posts,
            'featuredPosts' => $featuredPosts
        ]);
    }
}