<?php

namespace App\Livewire\Panel;

use Carbon\Carbon;
use Stripe\Stripe;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use Livewire\Component;
use App\Models\Category;
use Stripe\StripeClient;


class AdminPanel extends Component
{
    public $posts;
    public $users;
    public $mails;
    public $clients;
    public $balance;
    public $comments;
    public $currency;
    public $uncategorizedPosts;
    public $salesData = [];

    public function mount()
    {
        $this->retrieveBalance();
        $this->posts = Post::get();
        $this->users = User::get();
        $this->uncategorizedPosts();
        $this->comments = Comment::get();
        $this->clients = User::clients()->get();
        $this->salesData = $this->weeklySales();
    }

    public function retrieveBalance()
    {
        $stripe = new StripeClient(env('STRIPE_SECRET'));
        $balance = $stripe->balance->retrieve([]);
        $this->balance = $balance->available[0]->amount;
        $this->currency = strtoupper($balance->available[0]->currency);
    }

    public function uncategorizedPosts()
    {
        $uncategorizedCategory = Category::where('name', 'Uncategorized')->first();

        $this->uncategorizedPosts = $uncategorizedCategory
            ? Post::where('category_id', $uncategorizedCategory->id)->get()
            : collect();
    }

    public function weeklySales()
    {
        // Prepare date ranges for the last 6 weeks
        $dateRanges = collect();
        for ($i = 0; $i < 6; $i++) {
            $startOfWeek = now()->subWeeks($i)->startOfWeek();
            $endOfWeek = now()->subWeeks($i)->endOfWeek();
            $dateRanges->push(['start' => $startOfWeek, 'end' => $endOfWeek]);
        }

        // Reverse the order to start from the most recent week
        $dateRanges = $dateRanges->reverse();

        $weeklySales = [];

        // Initialize Stripe client
        $stripe = new StripeClient(env('STRIPE_SECRET'));

        // Fetch all subscriptions once
        $subscriptions = $stripe->subscriptions->all();

        // Fetch all subscription items in a single API call (if possible)
        $allSubscriptionItems = collect();
        foreach ($subscriptions->data as $subscription) {
            $subscriptionItems = $stripe->subscriptionItems->all([
                'subscription' => $subscription->id,
            ]);
            $allSubscriptionItems = $allSubscriptionItems->merge($subscriptionItems->data);
        }

        // Calculate sales for each week
        foreach ($dateRanges as $range) {
            $totalSales = 0;

            // Filter items for the current week range
            $sales = $allSubscriptionItems->filter(function ($item) use ($range) {
                $createdAt = \Carbon\Carbon::createFromTimestamp($item->created);
                return $createdAt->between($range['start'], $range['end']);
            });

            // Sum prices for the current week
            $totalSales = $sales->sum(function ($item) {
                return match ($item->price->id) {
                    config('pricing.plans.structural_plan.prices.monthly') => 5,
                    config('pricing.plans.structural_plan.prices.annual') => 49,
                    config('pricing.plans.foundation_plan.prices.monthly') => 10,
                    config('pricing.plans.foundation_plan.prices.annual') => 99,
                    config('pricing.plans.master_plan.prices.monthly') => 20,
                    config('pricing.plans.master_plan.prices.annual') => 199,
                    default => 0,
                };
            });

            $weeklySales[] = $totalSales;
        }

        return $weeklySales;
    }

    public function render()
    {
        return view('livewire.panel.admin-panel');
    }
}
