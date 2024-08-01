<?php

namespace App\Livewire\Categories;

use App\Models\Category;
use Livewire\Component;

class DeleteCategory extends Component
{
    public $categoryId;

    public function mount($categoryId)
    {
        $this->categoryId = $categoryId;
    }

    public function deleteCategory()
    {
        $uncategorized = Category::firstOrCreate(
            ['slug' => 'uncategorized'],
            ['name' => 'Uncategorized', 'description' => 'Posts without a specific category']
        );

        $category = Category::findOrFail($this->categoryId);

        if ($category->posts()->exists()) {
            $category->posts()->update(['category_id' => $uncategorized->id]);
        }
        $category->delete();
        return redirect()->route('categories.index')->with('success_deleted', 'Category deleted successfully.');
    }

    public function render()
    {
        return view('livewire.categories.delete-category');
    }
}