<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog.index');
    }
    
    public function create() 
    {   
        return view('blog.create');
    }

    public function show(Blog $blog)
    {
        return view('blog.show', [
            'blog' => $blog
        ]);
    }

    public function edit(Blog $blog)
    {
        return view('blog.edit', [
            'blog' => $blog
        ]);
    }
}
