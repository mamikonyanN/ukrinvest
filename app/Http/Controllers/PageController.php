<?php

namespace App\Http\Controllers;

use App\Models\AboutDescription;
use App\Models\CarouselElement;
use App\Models\ContactsDescription;
use App\Models\MissionDescription;
use App\Models\News;
use App\Models\Press;
use App\Models\Project;
use App\Models\ProjectDescription;
use App\Models\ProjectsBanner;
use App\Models\Service;

class PageController extends Controller
{
    public function main()
    {
        $locale = app()->getLocale();

        $carouselElements =   CarouselElement::with($locale)->get();
        $mission =            MissionDescription::with($locale)->first();
        $services =           Service::with($locale)->get();
        $projectDescription = ProjectDescription::with($locale)->first();
        $projects =           Project::with($locale)->get();
        $press =              Press::with($locale)->latest('created_at')->limit(2)->get();
        $news =               News::with($locale)->latest('created_at')->limit(3)->get();
        $contacts =           ContactsDescription::with($locale)->latest('created_at')->first();

        return view('pages.main', compact(['carouselElements', 'mission', 'services', 'projectDescription', 'projects', 'press', 'news', 'contacts']));
    }

    public function news()
    {
        $news = News::latest('created_at')->with(app()->getLocale())->paginate(1)->onEachSide(1);

        return view('pages.news', compact('news'));
    }

    public function projects()
    {
        $locale = app()->getLocale();

        $projectsBanner = ProjectsBanner::with($locale)->first();
        $about = AboutDescription::with($locale)->first();
        $projectDescription = ProjectDescription::with($locale)->first();
        $projects = Project::with($locale)->get();

        return view('pages.projects', compact(['projectsBanner', 'about', 'projectDescription', 'projects']));
    }
}
