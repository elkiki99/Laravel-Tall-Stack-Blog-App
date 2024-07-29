<?php

namespace App\Livewire\Categories;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;

class ShowCategories extends Component
{
    use WithPagination;

    public string $searchCategory = '';

    public function render()
    {
        $categories = Category::query()
            ->when($this->searchCategory !== '', function (Builder $query) {
                $query->where('name', 'like', '%' . $this->searchCategory . '%');
            })
            ->paginate(20);

        return view('livewire.categories.show-categories', [
            'categories' => $categories,
        ]);
    }
}