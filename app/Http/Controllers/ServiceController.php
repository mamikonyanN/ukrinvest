<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::paginate(10);
        return view('tables.services', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        $imageName = 'service_img_' . Auth::user()->id . '_'  . time() . '.' . $request->file('image')->extension();
        $request->file('image')->storeAs('public/images', $imageName);

        $iconName = 'service_icon_' . Auth::user()->id . '_'  . time() . '.' . $request->file('icon')->extension();
        $request->file('icon')->storeAs('public/images', $iconName);


        $service = new Service([
            'title' => $request->input('title'),
            'image_name' => $imageName,
            'icon_name' => $iconName,
        ]);
        $service->save();
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        $updatedData = ['title' => $request->input('title')];

        if ($request->file('image')) {
            $imageName = 'service_img_' . Auth::user()->id . '_'  . time() . '.' . $request->file('image')->extension();
            $request->file('image')->storeAs('public/images', $imageName);
            Storage::delete('public/images/' . $service->image_name);

            $updatedData['image_name'] = $imageName;
        }

        if ($request->file('icon')) {
            $iconName = 'service_icon_' . Auth::user()->id . '_'  . time() . '.' . $request->file('icon')->extension();
            $request->file('icon')->storeAs('public/images', $iconName);
            Storage::delete('public/images/' . $service->icon_name);

            $updatedData['icon_name'] = $iconName;
        }

        $service->update($updatedData);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        Storage::delete('public/images/' . $service->image_name);
        Storage::delete('public/images/' . $service->icon_name);
        $service->delete();
        return redirect()->back();
    }
}
