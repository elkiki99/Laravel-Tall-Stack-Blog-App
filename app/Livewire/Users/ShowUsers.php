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
    public string $searchPlan = '';

    public function render()
    {
        $users = User::query()
            ->where('role', '!=', 'admin')
            ->when($this->searchRole && $this->searchRole !== 'allRoles', function (Builder $query) {
                $query->where('role', 'like', '%' . $this->searchRole . '%');
            })
            ->when($this->searchUsers !== '', function (Builder $query) {
                $query->where('name', 'like', '%' . $this->searchUsers . '%');
            })
            ->when($this->searchPlan && $this->searchPlan !== 'allPlans', function (Builder $query) {
                if ($this->searchPlan === 'subscribed') {
                    $query->whereHas('subscriptions');
                } elseif ($this->searchPlan === 'not_subscribed') {
                    $query->whereDoesntHave('subscriptions');
                }
            })
            ->paginate(20);

        return view('livewire.users.show-users', [
            'users' => $users,
        ]);
    }
}