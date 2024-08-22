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

    protected $plans = [
        'foundation' => 'prod_QhJo9wxyLqHvKI',
        'structural' => 'prod_QhJqrVJiUo5TUJ',
        'master' => 'prod_QhKEnbLlRlLxzi',
    ];

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
                $planProductId = $this->plans[$this->searchPlan] ?? null;

                if ($planProductId) {
                    $query->whereHas('subscriptions', function (Builder $query) use ($planProductId) {
                        $query->where('stripe_product', $planProductId)
                              ->where('stripe_status', 'active'); // Filtra solo suscripciones activas
                    });
                }
            })
            ->paginate(20);

        return view('livewire.users.show-users', [
            'users' => $users,
        ]);
    }
}