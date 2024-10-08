<?php

namespace App\Livewire\Tags;

use Livewire\Component;
use App\Models\Tag;

class EditTag extends Component
{
    public $tag;
    public $name;
    public $slug;
    public $description;
    
    public function mount($tagId)
    {
        $this->tag = Tag::findOrFail($tagId);
        $this->name = $this->tag->name;
        $this->slug = $this->tag->slug;
        $this->description = $this->tag->description;
    }
    
    public function submit()
    {
        $this->validate();
        $this->tag->update([
            'name' => $this->name,
            'slug' => $this->slug,
            'description' => $this->description,
        ]);
        return redirect()->route('tags.index')->with('success_updated', 'Tag updated successfully.');
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:75|unique:tags,slug,' . $this->tag->id,
            'description' => 'nullable|string|max:255',
        ];
    }

    public function render()
    {  
        return view('livewire.tags.edit-tag');
    }
}