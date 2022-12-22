<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        return view('admin.news.index', [
            'news' => $news,
            'page_title' => 'News'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create', [
            'page_title' => "Create News"
        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:3048',
            'file' => "nullable|file|max:10000",
            'description' => 'required'
        ]);

        if ($request->hasFile('file')){
            $newsPath = $request->title . '.' .$request->file->extension();
            $request->file->move(public_path('uploads/news'), $newsPath);
        } else {
            $newsPath = "NoFile";
        }

        $newImageName =  $request->title . $request->image->extension();
        
        $request->image->move(public_path('uploads/news'), $newImageName);

        $news = new News();
        $news->title = $request->title;
        $news->description = $request->description;
        $news->file = $newsPath ?? "";
        $news->image = $newImageName;

        $news->save();
        return redirect(route('news.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news, $id)
    {
        $news = News::find($id);
        return view('admin.news.update', [
            'news' => $news,
            'page_title' => "Update News"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:3048',
            'file' => "nullable|file|max:10000"
        ]);

        $news = News::find($request->id);

        if ($request->hasFile('image')) {
            $newImageName = $request->image->extension();
            $request->image->move(public_path('uploads/news'), $newImageName );
            Storage::delete('uploads/news' . $news->image);
            $news->image = $newImageName;
        }

        if ($request->hasFile('file')){
            $newsPath = $request->title . '.' .$request->file->extension();
            $request->file->move(public_path('uploads/news'), $newsPath);
            Storage::delete('public/uploads/news' . $news->file);
            $news->file = $newsPath;
        }

        $news->title = $request->title;
        $news->description = $request->description;

        $news->save();

        return redirect(route('news.index'));
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news, $id)
    {
        $news = News::find($id);
        $news->delete();

        return redirect(route('news.index'));
    }
}
