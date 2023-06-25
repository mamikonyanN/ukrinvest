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
        if ($request->file('image')) {
            $imageName = 'banner_' . Auth::user()->id . '_'  . time() . '.' . $request->file('image')->extension();
            $request->file('image')->storeAs('public/images', $imageName);
            Storage::delete('public/images/' . $banner->image_name);

            $banner->update(['image_name' => $imageName]);
        }

        $banner->{app()->getLocale()}->update(['title' => $request->input('title')]);
        return redirect()->back();
    }
}
