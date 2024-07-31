<?php

namespace App\Livewire\Tags;

use Livewire\Component;
use App\Models\Tag;

class CreateTag extends Component
{
    public $name;
    public $slug;
    public $description;

    protected $rules = [
        'name' => 'required|string|max:255',
        'slug' => 'required|string|unique:tags,slug|max:75',
        'description' => 'nullable|string|max:255',
    ];

    public function submit()
    {
        $this->validate();

        $tag = new Tag([
            'name' => $this->name,
            'slug' => $this->slug,
            'description' => $this->description,
        ]);

        $tag->save();
        return redirect()->route('tags.index')->with('success_created', 'Tag created successfully.');
    }

    public function render()
    {
        return view('livewire.tags.create-tag');
    }
}
