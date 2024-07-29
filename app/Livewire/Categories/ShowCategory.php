<?php

namespace App\Livewire\Categories;

use Livewire\Component;
use App\Models\Category;

class ShowCategory extends Component
{
    public $category;
    public $blogs;

    public function mount(Category $category) 
    {
        $this->category = $category;
        $this->blogs = $category->blogs;
    }

    public function render()
    {
        return view('livewire.categories.show-category');
    }
}
