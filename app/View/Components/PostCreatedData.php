<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PostCreatedData extends Component
{
    public $post;
    public $author;

    public function __construct($post)
    {
        $this->post = $post;
        $this->author = $post->author;
    }
    
    public function render(): View|Closure|string
    {
        return view('components.post-created-data');
    }
}
