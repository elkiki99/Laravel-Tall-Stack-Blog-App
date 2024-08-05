<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Support\Facades\Gate;

class TagController extends Controller
{
    public function index()
    {
        Gate::authorize('viewAny', Tag::class);
        return view('tags.index');
    }

    public function create() 
    {
        Gate::authorize('create', Tag::class);
        return view('tags.create');
    }

    public function show(Tag $tag)
    {
        return view('tags.show', [
            'tag' => $tag
        ]);
    }

    public function edit(Tag $tag)
    {
        Gate::authorize('edit', Tag::class);
        return view('tags.edit', [
            'tag' => $tag
        ]);
    }
}
