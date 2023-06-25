<?php

namespace App\Http\Controllers;

use App\Models\AboutDescription;
use App\Http\Requests\UpdateAboutDescriptionRequest;

class AboutDescriptionController extends Controller
{
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAboutDescriptionRequest $request, AboutDescription $about)
    {
        $about->{app()->getLocale()}->update(['text' => $request->input('text')]);
        return redirect()->back();
    }
}
