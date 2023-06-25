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
        $items = Project::with(app()->getLocale())->paginate(10);
        return view('tables.projects', compact('items'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        $imageName = 'project_' . Auth::user()->id . '_'  . time() . '.' . $request->file('image')->extension();
        $request->file('image')->storeAs('public/images', $imageName);

        $project = new Project([
            'image_name' => $imageName,
        ]);
        $project->save();

        $project->translations()->createMany(
            array_map(
                fn ($locale) => [
                    'title' => $request->input('title'),
                    'description' => $request->input('description'),
                    'locale' => $locale,
                ],
                config('app.available_locales')
            )
        );
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        if ($request->file('image')) {
            $imageName = 'project_' . Auth::user()->id . '_'  . time() . '.' . $request->file('image')->extension();
            $request->file('image')->storeAs('public/images', $imageName);
            Storage::delete('public/images/' . $project->image_name);

            $project->update(['image_name' => $imageName]);
        }

        $project->{app()->getLocale()}->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);

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
