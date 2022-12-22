<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use function PHPUnit\Framework\returnSelf;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publications = Publication::all();
        return view('admin.publications.index', [
            "publications" => $publications,
            "page_title" => "Publications"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.publications.create');
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
            'title' => 'required|string',
            'file' => 'nullable|file|max:10000',
        ]);

        if ($request->hasFile('file')){
            $postPath = $request->title . '.' .$request->file->extension();
            $request->file->move(public_path('uploads/publications'), $postPath );
        }else{
                $postPath = "NoFile";
        }

        $publication = new Publication();
        $publication->title = $request->title;
        $publication->file = $postPath ?? '';

        $publication->save();

        return redirect('admin/publications/index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function show(Publication $publication)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function edit(Publication $publication, $id)
    {
        $publication = Publication::find($id);
        return view('admin.publications.update', [
            "publication" => $publication
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publication $publication)
    {
        $request->validate([
            'title' => 'required|string',
            'file' => 'nullable|file|max:10000',
        ]);

        $publication = Publication::find($request->id);

        $request->hasFile('file');
        $postPath = $request->title . '.' .$request->file->extension();
        $request->file->move(public_path('uploads/publications'), $postPath );
        Storage::delete('public/uploads/publications' . $publication->file);
        $publication->file = $postPath;

        $publication->title = $request->title;
        
        $publication->save();
        return redirect('admin/publications/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publication $publication, $id)
    {
        $publication = Publication::find($id);
        $publication->delete();
        Storage::delete('uploads/publications/' . $publication->file);
        return redirect('admin/publications/index');
    }
}
