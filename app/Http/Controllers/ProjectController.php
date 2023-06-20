<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::paginate(10);
        return view('tables.projects', compact('projects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        $imageName = 'project_' . Auth::user()->id . '_'  . time() . '.' . $request->file('image')->extension();
        $request->file('image')->storeAs('public/images', $imageName);

        $project = new Project([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'image_name' => $imageName,
        ]);
        $project->save();
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        $updatedData = [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ];

        if ($request->file('image')) {
            $imageName = 'project_' . Auth::user()->id . '_'  . time() . '.' . $request->file('image')->extension();
            $request->file('image')->storeAs('public/images', $imageName);
            Storage::delete('public/images/' . $project->image_name);

            $updatedData['image_name'] = $imageName;
        }

        $project->update($updatedData);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        Storage::delete('public/images/' . $project->image_name);
        $project->delete();
        return redirect()->back();
    }
}
