<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('getCategories')->latest()->paginate(50);
        return view("admin.posts.index", [
            "posts" => $posts,
            'page_title' => 'Post'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.posts.create', [
            'page_title' => 'Create Post',
            'categories' => $categories
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
            'title' => "required",
            'image' => "required|image|mimes:jpg,png,jpeg,gif,svg|max:5048",
            'content' => "required"
        ]);

        $imagePath = time() . '-' . $request->image->extension();
        $request->image->move(public_path('uploads/post'), $imagePath);



        $post = new Post();
        $post->title = $request->title;
        $post->slug = SlugService::createSlug(Post::class,'slug',$request->title);
        $post->image = $imagePath;
        $post->content = $request->content;

        if($post->save()){
            $post->getCategories()->sync($request->categories);
            return(redirect('admin/posts/index'));
        };
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        return view('admin.posts.update', [
            'post' => $post,
            'page_title' => 'Update Posts',
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => "required",
            'image' => "image|mimes:png,jpg,jpeg,gif,svg|max:5048",
            'content' => "required"
        ]);

        $post = Post::find($request->id);
        $post->title = $request->title;

        if($request->hasFile('image')){
            $imagePath = time() . '-' . $request->title . '.' . $request-> image->extension();
            $request->image->move(public_path('uploads/post'), $imagePath);
            Storage::delete('uploads/post' . $post->image);
            $post->image = $imagePath;
        }
        $post->content = $request->content;

        if($post->save()){
            $post->getCategories()->sync($request->categories);
            return(redirect('admin/posts/index'));
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        if($post->delete()){
            $post->getCategories()->detach();
            Storage::delete('uploads/post/' . $post->image);
            
            return redirect((route('posts.index')));
        };

        
    }
}
