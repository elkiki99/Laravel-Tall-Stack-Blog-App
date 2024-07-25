<?php

namespace App\Livewire\Blog;

use App\Models\Blog;
use Livewire\Component;

class ShowBlogs extends Component
{
    public function render()
    {   
        $blogs = Blog::with('author')->get();

        return view('livewire.blog.show-blogs', [
            'blogs' => $blogs
        ]);
    }
}
