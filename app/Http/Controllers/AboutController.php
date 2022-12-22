<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::paginate(10);
        return view('admin.abouts.index',[
            'abouts' => $abouts, 
            'page_title' =>'About Us'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.abouts.create', [
            'page_title' =>'Create About Us'
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
        
        $this->validate($request, [
            'title' => 'required|string',
            'subtitle' => 'nullable|string',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|  max:3048',
            'content' => 'required|string',
            
        ]);
    
        $newImageName = time() . '-' . $request->title . '.' .$request->image->extension();
        $request->image->move(public_path('uploads/about'), $newImageName );
     
    
    
        $about = new About();
    
        $about->title = $request->title;
        $about->subtitle = $request->subtitle ?? '';
        $about->description = $request->description;
        $about->image = $newImageName;
        $about->content = $request->content;
          
        $about->save();
    
        return redirect('admin/abouts/index')->with([
            'successMessage' => 'Success !! About Us created'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about, $id)
    {
        $about = About::find($id);
        return view('admin.abouts.update', [
            'about' => $about, 
            'page_title' =>'Update About Us'
        ]);
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'subtitle' => 'nullable|string',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:1536',
            'content' => 'required|string',
            
        ]);

        $about = About::find($request->id);
            
        if ($request->hasFile('image')) {
            $newImageName = time() . '-' . $request->title . '.' .$request->image->extension();
            $request->image->move(public_path('uploads/about'), $newImageName );
            Storage::delete('uploads/about' . $about->image);
            $about->image = $newImageName;
        }

        $about->title = $request->title ;
        $about->subtitle = $request->subtitle ?? '';
        $about->description = $request->description;
        $about->content = $request->content;


        if ($about->save()) {
            return redirect('admin/abouts/index')->with(['successMessage' => 'Success !! ABout Us Updated']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about, $id)
    {
        $about = About::find($id);

        $about->delete();
    
        return redirect('admin/abouts/index');
    }
}
