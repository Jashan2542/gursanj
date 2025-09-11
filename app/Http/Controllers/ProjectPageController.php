<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectPageController extends Controller
{
   public function show()
{
    $projects = Project::all(); // fetch all rows
    return view('project', compact('projects'));
}

}
