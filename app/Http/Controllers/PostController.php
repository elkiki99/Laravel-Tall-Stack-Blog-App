<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    public function index()
    {
        Gate::authorize('viewAny', Post::class);
        return view('posts.index');
    }
    public function pending()
    {
        Gate::authorize('viewAny', Post::class);
        return view('posts.pending');
    }
    
    public function create()    
    {   
        Gate::authorize('create', Post::class);
        return view('posts.create');
    }

    public function show(Post $post)
    {
        Gate::authorize('view', $post);
        return view('posts.show', [
            'post' => $post
        ]);
    }
    
    public function edit(Post $post)
    {
        Gate::authorize('edit', $post);
        return view('posts.edit', [
            'post' => $post
        ]);
    }
}
