<?php

namespace App\Http\Controllers;

use App\Models\ProjectsBanner;
use App\Http\Requests\UpdateProjectsBannerRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProjectsBannerController extends Controller
{
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectsBannerRequest $request, ProjectsBanner $banner)
    {
        $updatedData = ['title' => $request->input('title')];

        if ($request->file('image')) {
            $imageName = 'banner_' . Auth::user()->id . '_'  . time() . '.' . $request->file('image')->extension();
            $request->file('image')->storeAs('public/images', $imageName);
            Storage::delete('public/images/' . $banner->image_name);

            $updatedData['image_name'] = $imageName;
        }

        $banner->update($updatedData);
        return redirect()->back();
    }
}
