<?php

namespace App\Livewire\Categories;

use Livewire\Component;
use App\Models\Category;

class EditCategory extends Component
{
    public $category;
    public $name;
    public $slug;
    public $description;
    
    public function mount($id)
    {
        $this->category = Category::findOrFail($id);
        $this->name = $this->category->name;
        $this->slug = $this->category->slug;
        $this->description = $this->category->description;
    }
    
    public function submit()
    {
        $this->validate();
        $this->category->update([
            'name' => $this->name,
            'slug' => $this->slug,
            'description' => $this->description,
        ]);
        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:75|unique:categories,slug,' . $this->category->id,
            'description' => 'nullable|string|max:255',
        ];
    }

    public function deleteCategory()
    {
        $this->category->delete();
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }

    public function render()
    {  
        return view('livewire.categories.edit-category', [
        ]);
    }
}
