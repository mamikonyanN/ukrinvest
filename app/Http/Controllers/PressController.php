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
        $items = Press::latest('created_at')->with(app()->getLocale())->paginate(10);
        return view('tables.press', compact('items'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePressRequest $request)
    {
        $press = new Press();
        $press->save();

        $press->translations()->createMany(
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
    public function update(UpdatePressRequest $request, Press $press)
    {
        $press->{app()->getLocale()}?->update([
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
