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
        $items = News::latest('created_at')->with(app()->getLocale())->paginate(10);
        return view('tables.news', compact('items'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNewsRequest $request)
    {
        $imageName = 'news_' . Auth::user()->id . '_'  . time() . '.' . $request->file('image')->extension();
        $request->file('image')->storeAs('public/images', $imageName);

        $news = new News([
            'image_name' => $imageName,
        ]);
        $news->save();

        $news->translations()->createMany(
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
    public function update(UpdateNewsRequest $request, News $news)
    {
        if ($request->file('image')) {
            $imageName = 'news_' . Auth::user()->id . '_'  . time() . '.' . $request->file('image')->extension();
            $request->file('image')->storeAs('public/images', $imageName);
            Storage::delete('public/images/' . $news->image_name);

            $news->update(['image_name' => $imageName]);
        }

        $news->{app()->getLocale()}->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);
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
