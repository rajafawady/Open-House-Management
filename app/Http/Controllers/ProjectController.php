<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get();
        return view('/admin/dashboard', compact('projects'));
    }

    public function show(Project $project)
    {
        $availableLocations=$this->availableLocations();
        return view('projects/project',["availableLocations"=>$availableLocations, "project"=>$project]);
    }

    public function create()
    {
        return view('project.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Project::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('projects.index')->with('success', 'Project created successfully');
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('project.edit', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $project = Project::findOrFail($id);
        $project->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('projects.index')->with('success', 'Project updated successfully');
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Project deleted successfully');
    }

    public function availableLocations()
    {
        // Get the total number of projects
        $totalProjects = Project::count();

        // Get the locations that are already assigned to projects
        $assignedLocations = Project::whereNotNull('location')->pluck('location')->toArray();

        // Calculate the available locations
        $availableLocations = array_diff(range(1, $totalProjects), $assignedLocations);

        return $availableLocations;
    }

    public function assignLocation($projectId, $locationId)
    {

        $project = Project::find($projectId);

        if ($project) {
            $project->location = $locationId;
            $project->save();

            return redirect("/projects/$projectId")->with(['message' => 'Location assigned successfully']);
        }
        return redirect("/projects/$projectId")->with(['message' => 'Location assignment Failed']);
    }
}
