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
use App\Models\Publication;
use App\Models\Sitesetting;
use Illuminate\Http\Request;

class SingleController extends Controller
{
    public function renderIntroduction () 
    {
        $sitesetting = Sitesetting::first();
        $contacts = Contact::all();
        $policies = Policy::all();
        $programs = Program::all();
        $reports = Report::all();
        $about = About::first();
        $urlinks = Urlink::latest()->get()->take(6);
        $newsnav = News::latest()->get()->take(10);

        return view('introduction', [
            "sitesetting" => $sitesetting,
            "contacts" => $contacts,
            "policies" => $policies,
            "programs" => $programs,
            "reports" => $reports,
            "about" => $about,
            "urlinks" => $urlinks,
            "newsnav" => $newsnav,

        ]);
    }

    public function renderServices ()
    {
        $sitesetting = Sitesetting::first();
        $contacts = Contact::all();
        $policies = Policy::all();
        $programs = Program::all();
        $reports = Report::all();
        $about = About::first();
        $urlinks = Urlink::latest()->get()->take(6);
        $newsnav = News::latest()->get()->take(10);


        return view('services', [
            "sitesetting" => $sitesetting,
            "contacts" => $contacts,
            "policies" => $policies,
            "programs" => $programs,
            "reports" => $reports,
            "about" => $about,
            "urlinks" => $urlinks,
            "newsnav" => $newsnav,

        ]); 
    }

    public function renderTeam ()
    {
        $sitesetting = Sitesetting::first();
        $contacts = Contact::all();
        $policies = Policy::all();
        $programs = Program::all();
        $reports = Report::all();
        $teams = Team::all();
        $about = About::first();
        $urlinks = Urlink::latest()->get()->take(6);
        $newsnav = News::latest()->get()->take(10);


        return view('team', [
            "sitesetting" => $sitesetting,
            "contacts" => $contacts,
            "policies" => $policies,
            "programs" => $programs,
            "reports" => $reports,
            "teams"  => $teams,
            "about" => $about,
            "urlinks" => $urlinks,
            "newsnav" => $newsnav,
        ]); 
    }


    public function renderReports ()
    {
        $sitesetting = Sitesetting::first();
        $contacts = Contact::all();
        $policies = Policy::all();
        $programs = Program::all();
        $reports = Report::all();
        $about = About::first();
        $urlinks = Urlink::latest()->get()->take(6);
        $newsnav = News::latest()->get()->take(10);


        return view('reports', [
            "sitesetting" => $sitesetting,
            "contacts" => $contacts,
            "policies" => $policies,
            "programs" => $programs,
            "reports" => $reports,
            "about" => $about,
            "urlinks" => $urlinks,
            "newsnav" => $newsnav,

        ]); 
    }


    public function renderPolicies ()
    {
        $sitesetting = Sitesetting::first();
        $contacts = Contact::latest()->get()->take(2);
        $policies = Policy::all();
        $programs = Program::all();
        $reports = Report::all();
        $about = About::first();
        $urlinks = Urlink::latest()->get()->take(6);
        $newsnav = News::latest()->get()->take(10);


        return view('policies', [
            "sitesetting" => $sitesetting,
            "contacts" => $contacts,
            "policies" => $policies,
            "programs" => $programs,
            "reports" => $reports,
            "about" => $about,
            "urlinks" => $urlinks,
            "newsnav" => $newsnav,

        ]); 
    }


    public function renderPrograms ()
    {
        $sitesetting = Sitesetting::first();
        $contacts = Contact::latest()->get()->take(2);
        $policies = Policy::all();
        $programs = Program::all();
        $reports = Report::all();
        $about = About::first();
        $urlinks = Urlink::latest()->get()->take(6);
        $newsnav = News::latest()->get()->take(10);


        return view('programs', [
            "sitesetting" => $sitesetting,
            "contacts" => $contacts,
            "policies" => $policies,
            "programs" => $programs,
            "reports" => $reports,
            "about" => $about,
            "urlinks" => $urlinks,
            "newsnav" => $newsnav,

        ]); 
    }

    public function renderNews ()
    {
        $sitesetting = Sitesetting::first();
        $contacts = Contact::latest()->get()->take(2);
        $policies = Policy::all();
        $programs = Program::all();
        $reports = Report::all();
        $news = News::all();
        $about = About::first();
        $urlinks = Urlink::latest()->get()->take(6);
        $newsnav = News::latest()->get()->take(10);


        return view('news', [
            "sitesetting" => $sitesetting,
            "contacts" => $contacts,
            "policies" => $policies,
            "programs" => $programs,
            "reports" => $reports,
            "news" => $news,
            "about" => $about,
            "urlinks" => $urlinks,
            "newsnav" => $newsnav,
        ]); 
    }


    public function renderBlog ()
    {
        $sitesetting = Sitesetting::first();
        $contacts = Contact::latest()->get()->take(2);
        $policies = Policy::latest()->get()->take(3);
        $programs = Program::latest()->get()->take(3);
        $reports = Report::latest()->get()->take(3);
        $blogPosts = BlogPost::all();
        $about = About::first();
        $urlinks = Urlink::latest()->get()->take(6);
        $newsnav = News::latest()->get()->take(10);


        return view('blog', [
            "sitesetting" => $sitesetting,
            "contacts" => $contacts,
            "policies" => $policies,
            "programs" => $programs,
            "reports" => $reports,
            "blogPosts" => $blogPosts,
            "about" => $about,
            "urlinks" => $urlinks,
            "newsnav" => $newsnav,
        ]); 
    }

    public function singleBlogPost($id) {
        $sitesetting = Sitesetting::first();
        $about = About::first();
        $contacts = Contact::latest()->get()->take(2);
        $policies = Policy::latest()->get()->take(3);
        $programs = Program::latest()->get()->take(3);
        $reports = Report::latest()->get()->take(3);
        $publications = Publication::all();
        $blogPost = BlogPost::find($id);
        $urlinks = Urlink::latest()->get()->take(6);
        $newsnav = News::latest()->get()->take(10);
        return view('singlePost', [
            "sitesetting" => $sitesetting,
            "contacts" => $contacts,
            "policies" => $policies,
            "programs" => $programs,
            "reports" => $reports,
            "blogPost" => $blogPost,
            "publications" => $publications,
            "about" => $about,
            "urlinks" => $urlinks,
            "newsnav" => $newsnav,
        ]);
    }


    public function renderGallery ()
    {
        $sitesetting = Sitesetting::first();
        $contacts = Contact::all();
        $policies = Policy::all();
        $programs = Program::all();
        $reports = Report::all();
        $galleries = Gallery::all();
        $about = About::first();
        $urlinks = Urlink::latest()->get()->take(6);
        $newsnav = News::latest()->get()->take(10);



        return view('gallery', [
            "sitesetting" => $sitesetting,
            "contacts" => $contacts,
            "policies" => $policies,
            "programs" => $programs,
            "reports" => $reports,
            "galleries" => $galleries,
            "about" => $about,
            "urlinks" => $urlinks,
            "newsnav" => $newsnav,

        ]); 
    }

    public function renderContact ()
    {
        $sitesetting = Sitesetting::first();
        $contacts = Contact::latest()->get()->take(2);
        $policies = Policy::all();
        $programs = Program::all();
        $reports = Report::all();
        $teams = Team::latest()->get()->take(2);
        $about = About::first();
        $urlinks = Urlink::latest()->get()->take(6);
        $newsnav = News::latest()->get()->take(10);


        return view('contact', [
            "sitesetting" => $sitesetting,
            "contacts" => $contacts,
            "policies" => $policies,
            "programs" => $programs,
            "reports" => $reports,
            "teams" => $teams,
            "about" => $about,
            "urlinks" => $urlinks,
            "newsnav" => $newsnav,

        ]); 
    }

    public function renderPublications ()
    {
        $sitesetting = Sitesetting::first();
        $contacts = Contact::all();
        $policies = Policy::all();
        $programs = Program::all();
        $reports = Report::all();
        $publications = Publication::all();
        $about = About::first();
        $urlinks = Urlink::latest()->get()->take(6);
        $newsnav = News::latest()->get()->take(10);
        


        return view('publications', [
            "sitesetting" => $sitesetting,
            "contacts" => $contacts,
            "policies" => $policies,
            "programs" => $programs,
            "reports" => $reports,
            "publications" => $publications,
            "about" => $about,
            "urlinks" => $urlinks,
            "newsnav" => $newsnav,

        ]); 
    }






}
