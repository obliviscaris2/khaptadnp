<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogPostController extends Controller
{


    public function index()
    {
        $blogs = BlogPost::all();
        return view('admin.blog.index', [
            "blogs" => $blogs,
            "page_title" => "Blog Post"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'author' => 'required|string',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|  max:3048',
            'date' => 'required|string',
            'description' => 'required|string',            
        ]);

        $newImageName = time() . '-' . $request->title . '.' .$request->image->extension();
        $request->image->move(public_path('uploads/blog'), $newImageName );

        $blog = new BlogPost();
        $blog->title = $request->title;
        $blog->author = $request->author;
        $blog->image = $newImageName;
        $blog->date = $request->date;
        $blog->description = $request->description;

        $blog->save();

        return redirect('admin/blog/index')->with([
            'successMessage' => 'Success !! Blog Post created'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function show(BlogPost $blogPost)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogPost $blogPost, $id)
    {
        $blog = BlogPost::find($id);
        return view('admin.blog.update', [
            'blog' => $blog, 
            'page_title' =>'Update Blog'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogPost $blogPost)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'author' => 'required|string',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|  max:3048',
            'date' => 'required|string',
            'description' => 'required|string',            
        ]);

        $blog = BlogPost::find($request->id);
        if ($request->hasFile('image')) {
            $newImageName = time() . '-' . $request->title . '.' .$request->image->extension();
            $request->image->move(public_path('uploads/blog'), $newImageName );
            Storage::delete('uploads/about' . $blog->image);
            $blog->image = $newImageName;
        }

        $blog->title = $request->title ;
        $blog->author = $request->author;
        $blog->date = $request->date;
        $blog->description = $request->description;

        if ($blog->save()) {
            return redirect('admin/blog/index')->with(['successMessage' => 'Success !! Blog Post Updated']);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogPost $blogPost, $id)
    {
        $blog = BlogPost::find($id);

        $blog->delete();
    
        return redirect('admin/blog/index');
    }
}
