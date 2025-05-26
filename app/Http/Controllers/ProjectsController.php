<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\File;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::find(1);

        $projects = Project::with(['user', 'tags'])->paginate(6);

        return view('projects.index', compact('user', 'projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'tags.*' => ['string', 'max:50'],
            'demo_url' => ['nullable', 'url', 'max:255'],
            'github_url' => ['nullable', 'url', 'max:255'],
        ]);

        $project = Project::create([
            'user_id' => 1,
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'live_demo_url' => $validatedData['demo_url'] ?? null,
            'github_url' => $validatedData['github_url'] ?? null,
        ]);

        return redirect('/projects')->with('success', 'Project created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        $user = User::find(1);

        $project = Project::find($project->id);

        $tagIds = $project->tags->pluck('id');

        $related_projects = Project::with(['tags', 'user'])
            ->where('id', '!=', $project->id)
            ->whereHas('tags', function ($query) use ($tagIds) {
                $query->whereIn('tags.id', $tagIds);
            })
            ->limit(3)
            ->get();

        return view('projects.show', compact('user', 'project', 'related_projects'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect('/projects');
    }
}
