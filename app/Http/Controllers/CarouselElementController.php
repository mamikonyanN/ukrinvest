<?php

namespace App\Http\Controllers;

use App\Models\CarouselElement;
use App\Http\Requests\StoreCarouselElementRequest;
use App\Http\Requests\UpdateCarouselElementRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CarouselElementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carouselElements = CarouselElement::paginate(10);
        return view('tables.carouselElements', compact('carouselElements'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCarouselElementRequest $request)
    {
        $imageName = 'carousel_element_' . Auth::user()->id . '_'  . time() . '.' . $request->file('image')->extension();
        $request->file('image')->storeAs('public/images', $imageName);

        $carouselElement = new CarouselElement([
            'title' => $request->input('title'),
            'image_name' => $imageName,
        ]);
        $carouselElement->save();
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCarouselElementRequest $request, CarouselElement $carouselElement)
    {
        $updatedData = ['title' => $request->input('title')];

        if ($request->file('image')) {
            $imageName = 'carousel_element_' . Auth::user()->id . '_'  . time() . '.' . $request->file('image')->extension();
            $request->file('image')->storeAs('public/images', $imageName);
            Storage::delete('public/images/' . $carouselElement->image_name);

            $updatedData['image_name'] = $imageName;
        }

        $carouselElement->update($updatedData);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CarouselElement $carouselElement)
    {
        Storage::delete('public/images/' . $carouselElement->image_name);
        $carouselElement->delete();
        return redirect()->back();
    }
}
