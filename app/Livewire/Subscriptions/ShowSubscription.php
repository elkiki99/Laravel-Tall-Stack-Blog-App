<?php

namespace App\Livewire\Subscriptions;

use Livewire\Component;

class ShowSubscription extends Component
{
    public $plans;

    public function mount()
    {
        $this->plans = [
            'foundation' => config('pricing.plans.foundation_plan'),
            'structural' => config('pricing.plans.structural_plan'),
            'master' => config('pricing.plans.master_plan'),
        ];
    }

    public function render()
    {
        return view('livewire.subscriptions.show-subscription', [
            'plans' => $this->plans
        ]);
    }
}
