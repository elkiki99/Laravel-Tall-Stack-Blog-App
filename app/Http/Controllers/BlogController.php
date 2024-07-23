<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('blog.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() 
    {
        $categories = Category::all();
        
        return view('blog.create', [
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'body' => 'required|string',
            'slug' => 'required|string|unique:blogs,slug|max:140',
            'excerpt' => 'nullable|string',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'author_id' => 'required|exists:authors,id',
            'category_id' => 'required|exists:categories,id',
            'reading_time' => 'nullable|integer|min:0',
            'is_published' => 'nullable|boolean',
        ]);

        $body = $request->input('body');
        $readingTime = Blog::calculateReadingTime($body);

        $blog = new Blog([
            'title' => $request->input('title'),
            'subtitle' => $request->input('subtitle'),
            'body' => $request->input('body'),
            'slug' => $request->input('slug'),
            'excerpt' => $request->input('excerpt'),
            'featured_image' => $request->input('featured_image'),
            'author_id' => $request->input('author_id'),
            'category_id' => $request->input('category_id'),
            'reading_time' => $readingTime,
            'is_published' => $request->input('is_published'),
        ]);

        $blog->save();
        return redirect()->route('blog.index')->with('success', 'Blog post created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view('blog.show', [
            // 'blog' => $blog
            
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
