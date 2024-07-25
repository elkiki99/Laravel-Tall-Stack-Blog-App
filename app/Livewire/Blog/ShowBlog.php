<?php

namespace App\Livewire\Blog;

use App\Models\Blog;
use Livewire\Component;

class ShowBlog extends Component
{
    public $blog;

    public function mount(Blog $blog)
    {
        $this->blog = $blog;
    }

    public function render()
    {
        return view('livewire.blog.show-blog', [
            'blog' => $this->blog
        ]);
    }
}
