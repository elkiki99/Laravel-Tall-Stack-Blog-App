<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Pagination\LengthAwarePaginator;

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

    public function search(Request $request)
    {
        $query = $request->input('query');
    
        // Perform the search using Scout
        $searchResults = Post::search($query)->get();
    
        // Filter results to include only published posts
        $posts = $searchResults->filter(function ($post) {
            return $post->status === 'published';
        });
    
        // Paginate manually (Scout does not handle pagination directly)
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $perPage = 10;
        $currentItems = $posts->slice(($currentPage - 1) * $perPage, $perPage)->all();
        $paginatedResults = new LengthAwarePaginator($currentItems, $posts->count(), $perPage, $currentPage, [
            'path' => LengthAwarePaginator::resolveCurrentPath()
        ]);
    
        return view('posts.search', [
            'posts' => $paginatedResults,
            'query' => $query
        ]);
    }
}
