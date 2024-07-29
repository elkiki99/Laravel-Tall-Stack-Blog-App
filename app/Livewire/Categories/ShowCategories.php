<?php

namespace App\Livewire\Categories;

use Livewire\Component;
use App\Models\Category;

class ShowCategories extends Component
{   
    public function render()
    {
        $categories = Category::all();

        return view('livewire.categories.show-categories', [
            'categories' => $categories
        ]);
    }
}
