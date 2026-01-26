<?php

namespace App\Http\Controllers;

use App\Models\Project;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = Project::where('status', 'published')->latest()->get();
        $page = \App\Models\Page::where('slug', 'portfolio')->first();

        return view('portfolio.index', [
            'projects' => $projects,
            'title' => $page->meta_title ?? $page->title ?? 'Portfolio',
            'meta_description' => $page->meta_description ?? null,
            'og_title' => $page->meta_title ?? $page->title ?? 'Portfolio',
            'og_description' => $page->meta_description ?? null,
            'og_image' => $page->image ?? null,
        ]);
    }

    public function show(Project $project)
    {
        if ($project->status !== 'published' && ! auth()->check()) {
            abort(404);
        }

        return view('portfolio.show', [
            'project' => $project,
            'title' => $project->meta_title ?? $project->title,
            'meta_description' => $project->meta_description ?? \Illuminate\Support\Str::limit(strip_tags($project->description), 160),
            'og_title' => $project->meta_title ?? $project->title,
            'og_description' => $project->meta_description ?? \Illuminate\Support\Str::limit(strip_tags($project->description), 160),
            'og_image' => $project->images[0] ?? null,
        ]);
    }
}
