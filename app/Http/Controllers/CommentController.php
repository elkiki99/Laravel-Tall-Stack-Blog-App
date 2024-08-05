<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Support\Facades\Gate;

class CommentController extends Controller
{
    public function index()
    {
        Gate::authorize('viewAny', Comment::class);
        return view('comments.index');
    }

    public function pending()
    {
        Gate::authorize('viewAny', Comment::class);
        return view('comments.pending');
    }
}
