<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    function addProject()
    {
        return view('admin.add-project');
    }


    function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'image' => 'required|mimes:jpeg,png,jpg|max:2048'
        ]);

        $project = new Project();
        $project->name = $request->name;
        $project->description = $request->description;

        $imagePath = $request->file('image')->store('image/projects', 'public');
        $project->image = '/storage/' . $imagePath;

        $project->save();
        return back();

    }

    function projects(){
        $projects = Project::all();
        return view('admin.project-list', compact('projects'));
    }

    function edit($id){
        $project = Project::find($id);

        return view('admin.edit-project', compact('project'));
    }

    function update(Request $request, $id){
        $project = Project::find($id);
        $project->name = $request->name;
        $project->description = $request->description;
        $project->image = $request->image;
        $project->save();
        return back();
    }


    function delete($id){
        $project = Project::find($id);
        $project->delete();

        return back();
    }


    function gallery()
    {
        $projects = Project::all();
        return view('user.gallery', compact('projects'));
    }
}
