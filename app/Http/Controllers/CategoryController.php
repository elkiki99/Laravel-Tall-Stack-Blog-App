<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\Gate;

class CategoryController extends Controller
{
    public function index()
    {
        Gate::authorize('viewAny', Category::class);
        return view('categories.index');
    }

    public function create() 
    {
        Gate::authorize('create', Category::class);
        return view('categories.create');
    }

    public function show(Category $category)
    {
        return view('categories.show', [
            'category' => $category
        ]);
    }

    public function edit(Category $category)
    {
        Gate::authorize('edit', $category);
        return view('categories.edit', [
            'category' => $category
        ]);
    }
}
