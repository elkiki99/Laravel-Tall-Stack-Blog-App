<?php

namespace App\Providers;

use App\Models\Subscription;
use Laravel\Cashier\Cashier;
use Illuminate\Support\Facades\Gate;
use Laravel\Cashier\SubscriptionItem;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {   
        Gate::define('view-admin-panel', function($user) {
            return $user !== null;
        });

        Cashier::useSubscriptionModel(Subscription::class);
        Cashier::useSubscriptionItemModel(SubscriptionItem::class);
        
        // Cashier::calculateTaxes();
    }
}
