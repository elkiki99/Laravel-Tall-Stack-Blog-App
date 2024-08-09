<?php

namespace App\Http\Controllers;

use App\Models\Post;

class HomePagesController extends Controller
{
    public function blog()
    {
        $posts = Post::with('author')->where('status', 'published')->latest()->paginate(10);

        return view ('homepages.blog', [
            'posts' => $posts
        ]);
    }

    public function welcome()
    {
        return view ('homepages.welcome');
    }
    public function about()
    {
        return view ('homepages.about');
    }
    public function contact()
    {
        return view ('homepages.contact-us');
    }
    public function newsletter()
    {
        return view ('homepages.newsletter');
    }
}
