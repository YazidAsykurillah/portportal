<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Project;

class SiteController extends Controller
{
    public function home()
    {
        $page = Page::where('slug', 'home')->first();
        
        $projects = Project::where('status', 'published')
            ->latest()
            ->take(3)
            ->get();

        return view('home', [
            'projects' => $projects,
            'title' => $page->meta_title ?? $page->title ?? 'Home',
            'meta_description' => $page->meta_description ?? null,
            'og_title' => $page->meta_title ?? $page->title ?? null,
            'og_description' => $page->meta_description ?? null,
            'og_image' => $page->image ?? null, // Assuming Page might have an image
        ]);
    }

    public function about()
    {
        $page = Page::where('slug', 'about')->first();

        return view('about', [
            'title' => $page->meta_title ?? $page->title ?? 'About',
            'meta_description' => $page->meta_description ?? null,
            'og_title' => $page->meta_title ?? $page->title ?? null,
            'og_description' => $page->meta_description ?? null,
            'og_image' => $page->image ?? null,
        ]);
    }

    public function contact()
    {
        $page = Page::where('slug', 'contact')->first();

        return view('contact', [
            'title' => $page->meta_title ?? $page->title ?? 'Contact',
            'meta_description' => $page->meta_description ?? null,
            'og_title' => $page->meta_title ?? $page->title ?? null,
            'og_description' => $page->meta_description ?? null,
            'og_image' => $page->image ?? null,
        ]);
    }
}
