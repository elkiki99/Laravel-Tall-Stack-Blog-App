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
            'categories' => $categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $featuredImagePath = null;
        if ($request->hasFile('featured_image')) {
            $featuredImagePath = $request->file('featured_image')->store('public/featured_images');
        }

        $body = $request->input('body');
        $readingTime = Blog::calculateReadingTime($body);

        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'body' => 'required|string',
            'slug' => 'required|string|unique:blogs,slug|max:140',
            'excerpt' => 'nullable|string',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required|exists:categories,id',
            'reading_time' => 'integer|min:0',
            'meta_description' => 'nullable|string|max:255',
            'status' => 'string|in:draft,published',
        ]);

        $blog = new Blog([
            'title' => $request->input('title'),
            'subtitle' => $request->input('subtitle'),
            'body' => $request->input('body'),
            'slug' => $request->input('slug'),
            'excerpt' => $request->input('excerpt'),
            'featured_image' => $featuredImagePath,
            'category_id' => $request->input('category_id'),
            'meta_description' => $request->input('meta_description'),
            'reading_time' => $readingTime,
            'status' => $request->input('status', 'draft'),
        ]);

        $blog->author_id = auth()->user()->id;
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
