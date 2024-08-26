<?php

namespace App\Livewire\Categories;

use Livewire\Component;
use App\Models\Category;

class ShowCategory extends Component
{
    public $category;

    public function mount(Category $category) 
    {
        $this->category = $category;
    }

    public function render()
    {
        $posts = $this->category->posts()->where('status', 'published')->where('is_featured', 0)->latest()->paginate(10);
        $featuredPosts = $this->category->posts()->where('status', 'published')->where('is_featured', 1)->latest()->take(3)->get();

        return view('livewire.categories.show-category', [
            'posts' => $posts,
            'featuredPosts' => $featuredPosts
        ]);
    }
}
