<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

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
        //
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
     * Show the form for editing the specified resource.
     */
    public function edit(Project $post)
    {
        return view('projects.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $post)
    {
        //
    }
}
