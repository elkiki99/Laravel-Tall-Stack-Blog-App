<?php

namespace App\Http\Controllers;

use App\Models\Subscription;

class SubscriptionController extends Controller
{
    public function index()
    {
        return view('subscriptions.index');
    }

    public function show(Subscription $subscription)
    {
        return view('subscriptions.show', [
            'subscription' => $subscription,
        ]);
    }
}
