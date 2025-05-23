<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;

class ProjectController extends Controller
{
    public function index()
    {
        return Project::all();
    }

    public function store(StoreProjectRequest $request)
    {
        return Project::create($request->validated());
    }

    public function show(Project $project)
    {
        return $project;
    }

    public function update(StoreProjectRequest $request, Project $project)
    {
        $project->update($request->validated());
        return $project;
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return response()->noContent();
    }
}