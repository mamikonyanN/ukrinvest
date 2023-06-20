<?php

namespace App\Http\Controllers;

use App\Models\Press;
use App\Http\Requests\StorePressRequest;
use App\Http\Requests\UpdatePressRequest;

class PressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $press = Press::latest('created_at')->paginate(10);
        return view('tables.press', compact('press'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePressRequest $request)
    {
        $project = new Press([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);
        $project->save();
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePressRequest $request, Press $press)
    {
        $press->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Press $press)
    {
        $press->delete();
        return redirect()->back();
    }
}
