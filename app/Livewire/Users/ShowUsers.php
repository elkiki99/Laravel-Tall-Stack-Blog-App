<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;

class ShowUsers extends Component
{
    use WithPagination;

    public string $searchUsers = '';
    public string $searchRole = '';

    public function render()
    {
        $users = User::query()
            ->where('role', '!=', 'admin')
            ->when($this->searchRole !== '', fn(Builder $query) => $query->where('role', 'like', '%' . $this->searchRole . '%')) 
            ->when($this->searchUsers !== '', function (Builder $query) {
                $query->where('name', 'like', '%' . $this->searchUsers . '%');
            })
            ->paginate(20);

        return view('livewire.users.show-users', [
            'users' => $users,
        ]);
    }
}
