<?php

namespace App\Http\Controllers;

use App\Models\Urlink;
use Illuminate\Http\Request;

class UrlinkController extends Controller
{
    public function index()
    {
        $urlinks = Urlink::paginate(10);
        
        return view('admin.urlink.index', ['urlinks' => $urlinks, 'page_title'=>'Importantant Links']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.urlink.create',['page_title'=>'Add New Link']);
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
            'url' => 'required|url',
        ]);


       
        $urlink = new Urlink;

        $urlink->title = $request->title;

        $urlink->url = $request->url;;
        
        $urlink->save();

        return redirect('admin/urlink/index')->with(['successMessage' => 'Success !! New Link Created']);
    }


    public function edit(Urlink $urlink, $id)
    {
        $urlink = Urlink::find($id);

        return view('admin.urlink.update', ['urlink' => $urlink, 'page_title' =>'Update Links']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CoverImage  $coverImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Urlink $urlink)
    {
        $this->validate($request,[
            'title' => 'nullable|string',
            'url' => 'nullable|url',
        ]);


        $urlink = Urlink::find($request->id);


         

        $urlink->title = $request->title ?? ''; 
        $urlink->url = $request->url ?? ''; 

        if ($urlink->save()) {
            return redirect('admin/urlink/index')->with(['successMessage' => 'Success !! Link Updated']);
        } else {
            return redirect()->back()->with(['errorMessage' => 'Error Link not updated']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CoverImage  $coverImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Urlink $urlink, $id)
    {
        $urlink = Urlink::find($id);

        $urlink->delete();

        return redirect('admin/urlink/index')->with(['successMessage' => 'Success !!Link Deleted']);
    }
}
