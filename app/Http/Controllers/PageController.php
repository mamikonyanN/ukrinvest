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
        $carouselElements = CarouselElement::all();
        $mission = MissionDescription::first();
        $services = Service::all();
        $projectDescription = ProjectDescription::first();
        $projects = Project::all();
        $press = Press::latest('created_at')->limit(2)->get();
        $news = News::latest('created_at')->limit(3)->get();
        $contacts = ContactsDescription::latest('created_at')->first();
        return view('pages.main', compact(['carouselElements', 'mission', 'services', 'projectDescription', 'projects', 'press', 'news', 'contacts']));
    }

    public function news()
    {
        $news = News::latest('created_at')->paginate(1)->onEachSide(1);
        return view('pages.news', compact('news'));
    }

    public function projects()
    {
        $projectsBanner = ProjectsBanner::first();
        $about = AboutDescription::first();
        $projectDescription = ProjectDescription::first();
        $projects = Project::all();
        return view('pages.projects', compact(['projectsBanner', 'about', 'projectDescription', 'projects']));
    }
}
