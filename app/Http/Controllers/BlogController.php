<?php

namespace App\Http\Controllers;

use App\Models\Post;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::where('status', 'published')->latest('published_at')->get();
        $page = \App\Models\Page::where('slug', 'blog')->first();

        return view('blog.index', [
            'posts' => $posts,
            'title' => $page->meta_title ?? $page->title ?? 'Blog',
            'meta_description' => $page->meta_description ?? null,
            'og_title' => $page->meta_title ?? $page->title ?? 'Blog',
            'og_description' => $page->meta_description ?? null,
            'og_image' => $page->image ?? null,
        ]);
    }

    public function show(Post $post)
    {
        if ($post->status !== 'published' && ! auth()->check()) {
            abort(404);
        }

        return view('blog.show', [
            'post' => $post,
            'title' => $post->meta_title ?? $post->title,
            'meta_description' => $post->meta_description ?? \Illuminate\Support\Str::limit(strip_tags($post->content), 160),
            'og_title' => $post->meta_title ?? $post->title,
            'og_description' => $post->meta_description ?? \Illuminate\Support\Str::limit(strip_tags($post->content), 160),
            'og_image' => $post->image ?? null,
        ]);
    }
}
