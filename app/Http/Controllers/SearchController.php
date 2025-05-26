<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke()
    {
        $user = User::find(1);

        $projects = Project::where('title', 'LIKE', '%'.request('search').'%')->paginate(6);

        return view('projects.index', [
            'user' => $user,
            'projects' => $projects,
            'search' => request('search')
        ]);
    }
}
