<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function foundationPlan(Request $request, $plan)
    {
        return $request->user()
        ->newSubscription(config('pricing.plans.foundation_plan.product_id'), $plan)
        ->checkout([
            'success_url' => route('subscriptions.show'),
            'cancel_url' => route('newsletter'),
        ]);
    }

    public function structuralPlan(Request $request, $plan)
    {
        return $request->user()
        ->newSubscription(config('pricing.plans.structural_plan.product_id'), $plan)
        ->checkout([
            'success_url' => route('subscriptions.show'),
            'cancel_url' => route('newsletter'),
        ]);
    }

    public function masterPlan(Request $request, $plan)
    {
        return $request->user()
        ->newSubscription(config('pricing.plans.master_plan.product_id'), $plan)
        ->checkout([
            'success_url' => route('subscriptions.show'),
            'cancel_url' => route('newsletter'),
        ]);
    }
}
