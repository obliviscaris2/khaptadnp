<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\News;
use App\Models\Policy;
use App\Models\Program;
use App\Models\Publication;
use App\Models\Report;
use App\Models\Sitesetting;
use App\Models\Team;
use Illuminate\Http\Request;

class SingleController extends Controller
{
    public function renderIntroduction () 
    {
        $sitesettings = Sitesetting::all();
        $contacts = Contact::all();
        $policies = Policy::all();
        $programs = Program::all();
        $reports = Report::all();

        return view('introduction', [
            "sitesettings" => $sitesettings,
            "contacts" => $contacts,
            "policies" => $policies,
            "programs" => $programs,
            "reports" => $reports,

        ]);
    }

    public function renderServices ()
    {
        $sitesettings = Sitesetting::all();
        $contacts = Contact::all();
        $policies = Policy::all();
        $programs = Program::all();
        $reports = Report::all();

        return view('services', [
            "sitesettings" => $sitesettings,
            "contacts" => $contacts,
            "policies" => $policies,
            "programs" => $programs,
            "reports" => $reports,

        ]); 
    }

    public function renderTeam ()
    {
        $sitesettings = Sitesetting::all();
        $contacts = Contact::all();
        $policies = Policy::all();
        $programs = Program::all();
        $reports = Report::all();
        $teams = Team::all();

        return view('team', [
            "sitesettings" => $sitesettings,
            "contacts" => $contacts,
            "policies" => $policies,
            "programs" => $programs,
            "reports" => $reports,
            "teams"  => $teams,
        ]); 
    }


    public function renderReports ()
    {
        $sitesettings = Sitesetting::all();
        $contacts = Contact::all();
        $policies = Policy::all();
        $programs = Program::all();
        $reports = Report::all();

        return view('reports', [
            "sitesettings" => $sitesettings,
            "contacts" => $contacts,
            "policies" => $policies,
            "programs" => $programs,
            "reports" => $reports,

        ]); 
    }


    public function renderPolicies ()
    {
        $sitesettings = Sitesetting::all();
        $contacts = Contact::latest()->get()->take(2);
        $policies = Policy::all();
        $programs = Program::all();
        $reports = Report::all();

        return view('policies', [
            "sitesettings" => $sitesettings,
            "contacts" => $contacts,
            "policies" => $policies,
            "programs" => $programs,
            "reports" => $reports,

        ]); 
    }


    public function renderPrograms ()
    {
        $sitesettings = Sitesetting::all();
        $contacts = Contact::latest()->get()->take(2);
        $policies = Policy::all();
        $programs = Program::all();
        $reports = Report::all();

        return view('programs', [
            "sitesettings" => $sitesettings,
            "contacts" => $contacts,
            "policies" => $policies,
            "programs" => $programs,
            "reports" => $reports,

        ]); 
    }

    public function renderNews ()
    {
        $sitesettings = Sitesetting::all();
        $contacts = Contact::latest()->get()->take(2);
        $policies = Policy::all();
        $programs = Program::all();
        $reports = Report::all();
        $news = News::all();

        return view('news', [
            "sitesettings" => $sitesettings,
            "contacts" => $contacts,
            "policies" => $policies,
            "programs" => $programs,
            "reports" => $reports,
            "news" => $news
        ]); 
    }


    public function renderBlog ()
    {
        $sitesettings = Sitesetting::all();
        $contacts = Contact::latest()->get()->take(2);
        $policies = Policy::latest()->get()->take(3);
        $programs = Program::latest()->get()->take(3);
        $reports = Report::latest()->get()->take(3);
        $blogPosts = BlogPost::all();

        return view('blog', [
            "sitesettings" => $sitesettings,
            "contacts" => $contacts,
            "policies" => $policies,
            "programs" => $programs,
            "reports" => $reports,
            "blogPosts" => $blogPosts,
        ]); 
    }

    public function singleBlogPost($id) {
        $sitesettings = Sitesetting::all();
        $contacts = Contact::latest()->get()->take(2);
        $policies = Policy::latest()->get()->take(3);
        $programs = Program::latest()->get()->take(3);
        $reports = Report::latest()->get()->take(3);
        $publications = Publication::all();
        $blogPost = BlogPost::find($id);
        return view('singlePost', [
            "sitesettings" => $sitesettings,
            "contacts" => $contacts,
            "policies" => $policies,
            "programs" => $programs,
            "reports" => $reports,
            "blogPost" => $blogPost,
            "publications" => $publications
        ]);
    }


    public function renderGallery ()
    {
        $sitesettings = Sitesetting::all();
        $contacts = Contact::all();
        $policies = Policy::all();
        $programs = Program::all();
        $reports = Report::all();
        $galleries = Gallery::all();

        return view('gallery', [
            "sitesettings" => $sitesettings,
            "contacts" => $contacts,
            "policies" => $policies,
            "programs" => $programs,
            "reports" => $reports,
            "galleries" => $galleries,

        ]); 
    }

    public function renderContact ()
    {
        $sitesettings = Sitesetting::all();
        $contacts = Contact::latest()->get()->take(2);
        $policies = Policy::all();
        $programs = Program::all();
        $reports = Report::all();
        $teams = Team::latest()->get()->take(2);

        return view('contact', [
            "sitesettings" => $sitesettings,
            "contacts" => $contacts,
            "policies" => $policies,
            "programs" => $programs,
            "reports" => $reports,
            "teams" => $teams,

        ]); 
    }

    public function renderPublications ()
    {
        $sitesettings = Sitesetting::all();
        $contacts = Contact::all();
        $policies = Policy::all();
        $programs = Program::all();
        $reports = Report::all();
        $publications = Publication::all();

        return view('publications', [
            "sitesettings" => $sitesettings,
            "contacts" => $contacts,
            "policies" => $policies,
            "programs" => $programs,
            "reports" => $reports,
            "publications" => $publications,

        ]); 
    }






}
