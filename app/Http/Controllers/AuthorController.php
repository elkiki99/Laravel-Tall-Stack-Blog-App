<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        return view('authors.index');
    }

    public function create()
    {
        return view('authors.create');
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

        $author = new Author([
            'name' => $request->input('name'),
            'username' => $request->input('username'),
            'profile_image' => $request->input('profile_image'),
            'email' => $request->input('email'),
            'linkedin_profile' => $request->input('linkedin_profile'),
            'website' => $request->input('website'),
            'bio' => $request->input('bio'),
            'date_of_birth' => $request->input('date_of_birth'),
        ]);

        $author->save();
        return redirect()->route('authors.index')->with('success', 'Author created successfully.');
    }

    public function show(Author $author)
    {
        return view('authors.show', [
            'author' => $author
        ]);
    }

    public function edit(Author $author)
    {
        return view('authors.edit', [
            'author' => $author
        ]);
    }
}
