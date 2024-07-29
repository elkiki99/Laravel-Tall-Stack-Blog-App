<?php

namespace App\Livewire\Tags;

use Livewire\Component;
use App\Models\Tag;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;

class ShowTags extends Component
{
    use WithPagination;

    public string $searchTags = '';

    public function render()
    {
        $tags = Tag::query()
            ->when($this->searchTags !== '', function (Builder $query) {
                $query->where('name', 'like', '%' . $this->searchTags . '%');
            })
            ->paginate(20);

        return view('livewire.tags.show-tags', [
            'tags' => $tags,
        ]);
    }
}