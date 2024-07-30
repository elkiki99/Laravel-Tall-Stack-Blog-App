<?php

namespace App\Livewire\Tags;

use Livewire\Component;
use App\Models\Tag;

class ShowTag extends Component
{
    public $tag;
    public $posts;

    public function mount(Tag $tag) 
    {
        $this->tag = $tag;
        $this->posts = $tag->posts;
    }

    public function render()
    {
        return view('livewire.tags.show-tag');
    }
}