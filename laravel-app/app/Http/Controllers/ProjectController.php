<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() {
        $projects=Project::all();
        return view('project.index',compact('projects'));
    }
    public function create()
    {
        return view('project.create');    
    }
    
    public function store(Request $request)
    {
        $project=Project::create($request->all());
        return redirect()->route('index')->with('success','Added!');
    }
    public function edit(Project $project) 
    {
        return view('project.edit',compact('project'));
        
    }
    public function update(Request $request, Project $project)
    {
        $project->update($request->all());
        return redirect()->route('index')->with('success','Updated!');

    }
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('index')->with('success','Deleted!');

    }

}
