<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::where('is_active', true)->get();

        return view('projects.index', ['projects' => $projects]);
    }

    public function show(string $slug)
    {
        $project = Project::where('slug', $slug)->where('is_active', true)->firstOrFail();

        return view('projects.show', ['project' => $project]);
    }
}
