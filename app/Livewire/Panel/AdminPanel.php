<?php

namespace App\Livewire\Panel;

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
    public $comments;
    public $clients;
    public $mails;
    public $balance;
    public $currency;
    public $uncategorizedPosts;

    public function mount()
    {
        $this->posts = Post::get();
        $this->users = User::get();
        $this->clients = User::clients()->get();
        $this->comments = Comment::get();
        $this->retrieveBalance();
        $this->uncategorizedPosts();
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

    public function render()
    {
        return view('livewire.panel.admin-panel');
    }
}
