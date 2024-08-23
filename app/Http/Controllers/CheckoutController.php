<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function foundationPlan(Request $request, $price)
    {
        return $request->user()
        ->newSubscription('default', $price)
        ->checkout([
            'success_url' => route('subscriptions.show'),
            'cancel_url' => route('newsletter'),
        ]);
    }

    public function structuralPlan(Request $request, $price)
    {
        return $request->user()
        ->newSubscription('default', $price)
        ->checkout([
            'success_url' => route('subscriptions.show'),
            'cancel_url' => route('newsletter'),
        ]);
    }

    public function masterPlan(Request $request, $price)
    {
        return $request->user()
        ->newSubscription('default', $price)
        ->checkout([
            'success_url' => route('subscriptions.show'),
            'cancel_url' => route('newsletter'),
        ]);
    }
}
