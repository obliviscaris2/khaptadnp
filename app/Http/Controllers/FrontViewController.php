<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Post;
use App\Models\Team;
use App\Models\About;
use App\Models\Gallery;
use App\Models\Service;
use App\Models\Category;
use App\Models\CoverImage;
use App\Models\Policy;
use App\Models\Program;
use App\Models\Report;
use App\Models\Sitesetting;
use Illuminate\Http\Request;

class FrontViewController extends Controller
{
    public function index(){

        $categories = Category::latest()->get()->take(10);
        $coverimages = CoverImage::latest()->get()->take(5);
        $photogallerys = Gallery::latest()->get()->take(6);
        $posts = Post::with('getCategories')->latest()->get()->take(4);
        $categorieson = Category::with(['getPosts'=>function($query){
            $query->latest()->take(6);
        }])->whereIn('id',[1])->get();
        $categoriesone = Category::with(['getPosts'=>function($query){
            $query->latest()->take(6);
        }])->whereIn('id',[2])->get();
        
        $news = News::latest()->get()->take(3);
        $abouts = About::latest()->get()->take(1);
        $services = Service::latest()->get()->take(6);
        $sitesetting = Sitesetting::first();
        $teams = Team::first()->get()->take(2);
        $reports= Report::latest()->get()->take(6);
        $programs = Program::latest()->get()->take(5);
        $policies = Policy::latest()->get()->take(5);
        
    
    
        return view('index',[

            'categories'=>$categories,
            'categorieson'=>$categorieson,
            'categoriesone'=>$categoriesone,

            'coverimages'=>$coverimages,
            'photogallerys'=>$photogallerys,
            'posts'=>$posts,
            'abouts'=>$abouts,
            'services'=>$services,
            'sitesetting'=>$sitesetting,
            'news' => $news,
            'teams' => $teams,
            'reports' => $reports,
            'programs' => $programs,
            'policies' => $policies,

        ]);
    }
}
