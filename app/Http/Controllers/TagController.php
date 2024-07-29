<?php

namespace App\Http\Controllers;

use App\Models\Tag;

class TagController extends Controller
{
    public function index()
    {
        return view('tags.index');
    }

    public function create() 
    {
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
        return view('tags.edit', [
            'tag' => $tag
        ]);
    }
}
