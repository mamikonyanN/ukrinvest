<?php

namespace App\Http\Controllers;

use App\Models\ProjectDescription;
use App\Http\Requests\UpdateProjectDescriptionRequest;

class ProjectDescriptionController extends Controller
{
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectDescriptionRequest $request, ProjectDescription $projectDescription)
    {
        $projectDescription->update(['title' => $request->input('title')]);
        return redirect()->back();
    }
}
