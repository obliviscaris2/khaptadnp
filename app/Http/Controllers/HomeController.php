<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Team;
use App\Models\About;
use App\Models\Policy;
use App\Models\Report;
use App\Models\Urlink;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Program;
use App\Models\BlogPost;
use App\Models\CoverImage;
use App\Models\Publication;
use App\Models\Sitesetting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    
    {
        $coverimages = CoverImage::all();
        $about = About::first();
        $teams = Team::latest()->get()->take(3);
        $news = News::latest()->get()->take(3);
        $newsnav = News::latest()->get()->take(10);
        $galleries = Gallery::latest()->get()->take(6);
        $contacts = Contact::latest()->get()->take(2);
        $policies = Policy::latest()->get()->take(3);
        $programs = Program::latest()->get()->take(3);
        $reports = Report::latest()->get()->take(3);
        // $sitesettings = Sitesetting::latest()->get()->take(1);
        $sitesetting = Sitesetting::first();
        $blogs = BlogPost::latest()->get()->take(3);
        $publications = Publication::latest()->get()->take(3);
        $urlinks = Urlink::latest()->get()->take(6);
        return view("index", [
            'coverimages' => $coverimages,
            'about' => $about,
            'teams' => $teams,
            'news' => $news,
            'galleries' => $galleries,
            'contacts' => $contacts,
            'policies' => $policies,
            "programs" => $programs,
            "reports" => $reports,
            "sitesetting" => $sitesetting,
            "blogs" => $blogs,
            "publications" => $publications,
            "urlinks" => $urlinks,
            "newsnav" => $newsnav,
        ]);
    }
}
