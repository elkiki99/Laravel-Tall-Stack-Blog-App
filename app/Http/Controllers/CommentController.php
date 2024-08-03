<?php

namespace App\Http\Controllers;

class CommentController extends Controller
{
    public function index()
    {
        return view('comments.index');
    }

    public function pending()
    {
        return view('comments.pending');
    }
}
