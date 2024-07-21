<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        return view('author.index');
    }

    public function create()
    {
        return view('author.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'email' => 'required|string|email|max:255|unique:users',
            'linkedin_profile' => 'nullable|string|max:255',
            'website' => 'nullable|string|max:255',
            'bio' => 'nullable|string',
            'date_of_birth' => 'nullable|date',
        ]);
    }

    public function show(Author $author)
    {
        return view('author.show', [
            'author' => $author
        ]);
    }

    public function edit(Author $author)
    {
        return view('author.edit', [
            'author' => $author
        ]);
    }
}
