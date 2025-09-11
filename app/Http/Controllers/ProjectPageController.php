<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectPageController extends Controller
{
    public function show()
    {
        $project = Project::first(); // fetch first row
        return view('project', compact('project'));
    }
}
