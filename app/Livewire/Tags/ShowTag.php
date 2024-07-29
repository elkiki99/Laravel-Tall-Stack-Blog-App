<?php

namespace App\Livewire\Tags;

use Livewire\Component;
use App\Models\Tag;

class ShowTag extends Component
{
    public $tag;
    public $blogs;

    public function mount(Tag $tag) 
    {
        $this->tag = $tag;
        $this->blogs = $tag->blogs;
    }

    public function render()
    {
        return view('livewire.tags.show-tag');
    }
}