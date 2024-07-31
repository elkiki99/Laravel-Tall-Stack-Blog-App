<?php

namespace App\Livewire\Tags;

use App\Models\Tag;
use Livewire\Component;

class DeleteTag extends Component
{
    public $tagId;

    public function deleteTag()
    {
        $tag = Tag::findOrFail($this->tagId);
        $tag->delete();
        return redirect()->route('tags.index')->with('success_deleted', 'Tag deleted successfully.');
    }

    public function render()
    {
        return view('livewire.tags.delete-tag');
    }
}
