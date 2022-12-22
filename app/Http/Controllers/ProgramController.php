<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs = Program::all();
        return view('admin.programs.index', [
            'programs' => $programs,
            'page_title' => "Programs"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.programs.create', [
            'page_title' => "Add Programs"
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
            'description' => 'required',
            'image' => "nullable|image|mimes:jpg,png,jpeg,gif,svg|max:3048",
            'file' => "nullable|file|max:10000",

        ]);

        if ($request->hasFile('file')){
            $programsPath = $request->title . '.' .$request->file->extension();
            $request->file->move(public_path('uploads/programs'), $programsPath);
        } else {
            $programsPath = "NoFile";
        }

        $imagePlace = time() . '-' . $request->title . '.' .$request->image->extension();
        $request->image->move(public_path('uploads/programs'), $imagePlace);

        $program = new Program();
        $program->title = $request->title;
        $program->description = $request->description;
        $program->image = $imagePlace;
        $program->file = $programsPath ?? "";

        $program->save();

        return redirect(route('programs.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function show(Program $program)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function edit(Program $program, $id)
    {
        $program = Program::find($id);

        return view('admin.programs.update', [
            'program' => $program,
            'page_title' => "Update Program"
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // $request->validate([
        //     'title' => 'nullable',
        //     'description' => 'nullable',
        //     'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:3048'
        // ]);

        // $program = Program::find($request->id);

        // $imagePlace = time() . '-' . '.' .$request->image->getClientOriginalExtension();
        // $request->image->move(public_path('uploads/program'), $imagePlace);

        // $program->title = $request->title;
        // $program->description = $request->description;
        // $program->image = $imagePlace;

        // $program->save();

        // return redirect('admin/programs/index');

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => "required|image|mimes:jpg,png,jpeg,gif,svg|max:3048",
            'file' => "nullable|file|max:10000"
        ]);


        $program = Program::find($request->id);


        $imagePlace = time() . '-' . $request->title . '.' .$request->image->extension();
        $request->image->move(public_path('uploads/programs'), $imagePlace);
      
        if ($request->hasFile('image')) {
            $newImageName = $request->image->extension();
            $request->image->move(public_path('uploads/programs'), $newImageName );
            Storage::delete('uploads/programs' . $program->image);
            $program->image = $newImageName;
        }
     
        $program->title = $request->title;
        $program->description = $request->description;
        $program->image = $imagePlace;

        $program->save();

        return redirect(route('programs.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function destroy(Program $program, $id)
    {
        $program = Program::find($id);

        $program->delete();

        return redirect('admin/programs/index');
    }
}
