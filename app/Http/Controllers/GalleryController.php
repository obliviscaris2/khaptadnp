<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::paginate(10);
        return view('admin.gallery.index', [
            "galleries" => $galleries,
            'page_title' => "Gallery"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.create', [
            'page_title' => "Create Gallery"
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
        $this->validate($request,[
            'title' => 'required|string',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:3048',
        ]);

        $newImageName = time() . '-' . $request->image->extension();
        
        $request->image->move(public_path('uploads/gallery'), $newImageName );

        $gallery = new Gallery();
        $gallery->title = $request->title;
        $gallery->image = $newImageName;

        $gallery->save();

        return redirect(route('gallery.index'));


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery, $id)
    {
        $gallery = Gallery::find($id);

        return view('admin.gallery.update', [
            'gallery' => $gallery,
            'page_title' => "Update Photo Gallery"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        $this->validate($request,[
            'title' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:3048',

        ]);


        $gallery = Gallery::find($request->id);

        if ($request->hasFile('image')) {
            $newImageName = time() . '-' . $request->image->extension();
            $request->image->move(public_path('uploads/gallery'), $newImageName );
            Storage::delete('uploads/gallery' . $gallery->image);
            $gallery->image = $newImageName;
        }



        $gallery->title = $request->title ?? ''; 

        $gallery->save();

        return redirect(route('gallery.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery, $id)
    {
        $gallery = Gallery::find($id);
        $gallery->delete();

        return redirect(route('gallery.index'));
    }
}
