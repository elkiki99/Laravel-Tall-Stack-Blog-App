<?php

namespace App\Livewire\Categories;

use Livewire\Component;
use App\Models\Category;

class CreateCategory extends Component
{
    public $name;
    public $slug;
    public $description;

    protected $rules = [
        'name' => 'required|string|max:255',
        'slug' => 'required|string|unique:categories,slug|max:75',
        'description' => 'nullable|string|max:255',
    ];

    public function submit()
    {
        $this->validate();

        $category = new Category([
            'name' => $this->name,
            'slug' => $this->slug,
            'description' => $this->description,
        ]);

        $category->save();
        return redirect()->route('categories.index')->with('success_created', 'Category created successfully.');
    }

    public function render()
    {
        return view('livewire.categories.create-category');
    }
}
