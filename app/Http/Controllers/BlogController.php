<?php

namespace App\Http\Controllers;

use App\Models\Post;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::where('status', 'published')->latest('published_at')->get();

        return view('blog.index', compact('posts'));
    }

    public function show(Post $post)
    {
        if ($post->status !== 'published' && ! auth()->check()) {
            abort(404);
        }

        return view('blog.show', compact('post'));
    }
}
