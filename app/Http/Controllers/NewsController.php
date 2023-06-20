<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::latest('created_at')->paginate(10);
        return view('tables.news', compact('news'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNewsRequest $request)
    {
        $imageName = 'news_' . Auth::user()->id . '_'  . time() . '.' . $request->file('image')->extension();
        $request->file('image')->storeAs('public/images', $imageName);

        $news = new News([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'image_name' => $imageName,
        ]);
        $news->save();
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNewsRequest $request, News $news)
    {
        $updatedData = [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ];

        if ($request->file('image')) {
            $imageName = 'news_' . Auth::user()->id . '_'  . time() . '.' . $request->file('image')->extension();
            $request->file('image')->storeAs('public/images', $imageName);
            Storage::delete('public/images/' . $news->image_name);

            $updatedData['image_name'] = $imageName;
        }

        $news->update($updatedData);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        Storage::delete('public/images/' . $news->image_name);
        $news->delete();
        return redirect()->back();
    }
}
