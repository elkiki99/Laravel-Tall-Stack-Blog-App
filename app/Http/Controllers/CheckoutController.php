<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, $plan)
    {
        return $request->user()
        ->newSubscription('', $plan)
        ->trialDays(7)
        ->allowPromotionCodes()
        ->checkout([
            'success_url' => route('success'),
            'cancel_url' => route('welcome'),
        ]);
    }
}
