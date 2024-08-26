<?php

namespace App\Livewire\Panel;

use Carbon\Carbon;
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
    public $currentWeekClients;

    protected $stripe;

    public function mount()
    {
        $this->stripe = new StripeClient(env('STRIPE_SECRET'));
        $this->retrieveBalance();
        $this->posts = Post::get();
        $this->users = User::get();
        $this->uncategorizedPosts();
        $this->comments = Comment::get();
        $this->clients = User::clients()->get();
        $this->salesData = $this->weeklySales();
        $this->currentWeekClients = $this->getCurrentWeekClients();
    }

    public function getCurrentWeekClients()
    {
        $now = Carbon::now();
        $currentWeekStart = $now->startOfWeek();

        $allSubscriptions = [];
        $hasMore = true;
        $startingAfter = null;

        while ($hasMore) {
            $params = ['limit' => 100];
            if ($startingAfter) {
                $params['starting_after'] = $startingAfter;
            }

            $response = $this->stripe->subscriptions->all($params);
            $allSubscriptions = array_merge($allSubscriptions, $response->data);

            $hasMore = $response->has_more;
            if ($hasMore) {
                $startingAfter = end($response->data)->id;
            }
        }

        $currentWeekSubscriptions = array_filter($allSubscriptions, function ($subscription) use ($currentWeekStart) {
            $createdTimestamp = $subscription->created;
            return Carbon::createFromTimestamp($createdTimestamp)->greaterThanOrEqualTo($currentWeekStart);
        });

        return count($currentWeekSubscriptions);
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
        $dateRanges = collect();
        for ($i = 0; $i < 6; $i++) {
            $startOfWeek = now()->subWeeks($i)->startOfWeek();
            $endOfWeek = now()->subWeeks($i)->endOfWeek();
            $dateRanges->push(['start' => $startOfWeek, 'end' => $endOfWeek]);
        }

        $dateRanges = $dateRanges->reverse();
        $weeklySales = [];

        $stripe = new StripeClient(env('STRIPE_SECRET'));

        $subscriptions = $stripe->subscriptions->all();
        $allSubscriptionItems = collect();
        foreach ($subscriptions->data as $subscription) {
            $subscriptionItems = $stripe->subscriptionItems->all([
                'subscription' => $subscription->id,
            ]);
            $allSubscriptionItems = $allSubscriptionItems->merge($subscriptionItems->data);
        }
        foreach ($dateRanges as $range) {
            $totalSales = 0;

            $sales = $allSubscriptionItems->filter(function ($item) use ($range) {
                $createdAt = \Carbon\Carbon::createFromTimestamp($item->created);
                return $createdAt->between($range['start'], $range['end']);
            });

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
