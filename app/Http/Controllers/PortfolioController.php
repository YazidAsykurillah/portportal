<?php

namespace App\Http\Controllers;

use App\Models\Project;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = Project::where('status', 'published')->latest()->get();

        return view('portfolio.index', compact('projects'));
    }

    public function show(Project $project)
    {
        if ($project->status !== 'published' && ! auth()->check()) {
            abort(404);
        }

        return view('portfolio.show', compact('project'));
    }
}
