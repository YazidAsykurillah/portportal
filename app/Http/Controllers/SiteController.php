<?php

namespace App\Http\Controllers;

use App\Models\Project;

class SiteController extends Controller
{
    public function home()
    {
        $projects = Project::where('status', 'published')
            ->latest()
            ->take(3)
            ->get();

        return view('home', compact('projects'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
