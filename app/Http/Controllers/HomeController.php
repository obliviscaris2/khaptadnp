<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\BlogPost;
use App\Models\Contact;
use App\Models\CoverImage;
use App\Models\Gallery;
use App\Models\News;
use App\Models\Policy;
use App\Models\Program;
use App\Models\Publication;
use App\Models\Report;
use App\Models\Sitesetting;
use App\Models\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    
    {
        $coverimages = CoverImage::all();
        $abouts = About::latest()->get()->take(1);
        $teams = Team::latest()->get()->take(3);
        $news = News::latest()->get()->take(3);
        $galleries = Gallery::latest()->get()->take(6);
        $contacts = Contact::latest()->get()->take(2);
        $policies = Policy::latest()->get()->take(3);
        $programs = Program::latest()->get()->take(3);
        $reports = Report::latest()->get()->take(3);
        // $sitesettings = Sitesetting::latest()->get()->take(1);
        $sitesettings = Sitesetting::all();
        $blogs = BlogPost::latest()->get()->take(3);
        $publications = Publication::latest()->get()->take(3);
        return view("index", [
            'coverimages' => $coverimages,
            'abouts' => $abouts,
            'teams' => $teams,
            'news' => $news,
            'galleries' => $galleries,
            'contacts' => $contacts,
            'policies' => $policies,
            "programs" => $programs,
            "reports" => $reports,
            "sitesettings" => $sitesettings,
            "blogs" => $blogs,
            "publications" => $publications,
        ]);
    }
}
