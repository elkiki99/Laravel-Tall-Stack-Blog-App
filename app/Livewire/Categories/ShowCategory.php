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
        $posts = $this->category->posts()->where('status', 'published')->latest()->paginate(10);

        return view('livewire.categories.show-category', [
            'posts' => $posts
        ]);
    }
}
