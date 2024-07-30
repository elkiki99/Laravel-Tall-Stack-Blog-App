<?php

namespace App\Livewire\Categories;

use Livewire\Component;
use App\Models\Category;

class ShowCategory extends Component
{
    public $category;
    public $posts;

    public function mount(Category $category) 
    {
        $this->category = $category;
        $this->posts = $category->posts->where('status', 'published');
    }

    public function render()
    {
        return view('livewire.categories.show-category');
    }
}
