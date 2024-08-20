<?php

namespace App\Http\Controllers;

use App\Models\User;

class SubscriptionController extends Controller
{
    public function index()
    {
        return view('subscriptions.index');
    }

    public function show()
    {
        return view('subscriptions.show', [
            // 'user' => $user
        ]);
    }
}
