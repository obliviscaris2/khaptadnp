<?php

namespace App\Http\Controllers;

use App\Models\Sitesetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SitesettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sitesetting = Sitesetting::paginate(1);
        return view('admin.sitesettings.index', [
            'sitesettings'=>$sitesetting, 
            'page_title' => 'Sitesettings'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sitesettings.create', [
            'page_title' => 'Create Sitesetting'
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
            'phone' => "required",
            'email' => "required",
            'address' => "required",
            'fax' => "required",
            'main_logo'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:1536',
            'side_logo'=>'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:1536',
            'face_link'=>'nullable|url',
            'insta_link'=>'nullable|url',
            'twitter_link'=>'nullable|url',
            'google_maps' =>'nullable|url',
        ]);

        $newMainLogo = time() . '_' . $request->main_logo->getClientOriginalName();
        $request->main_logo->move(public_path('uploads/sitesetting/'), $newMainLogo);

        if($request->hasFile('side_logo')){
            $newSideLogo = time().'_'.$request->side_logo->getClientOriginalName();
            $request->side_logo->move('uploads/sitesetting/', $newSideLogo);        
            }
            else{
            $newSideLogo = "NoImage";
        }

        $sitesetting = new Sitesetting();
        $sitesetting->title = $request->title;
        $sitesetting->phone = $request->phone;
        $sitesetting->email = $request->email;
        $sitesetting->address = $request->address;
        $sitesetting->fax = $request->fax;
        $sitesetting->main_logo=$newMainLogo;
        $sitesetting->side_logo=$newSideLogo ?? '';
        $sitesetting->face_link=$request->face_link ?? '';
        $sitesetting->insta_link=$request->insta_link ?? '';
        $sitesetting->twitter=$request->twitter ?? '';
        $sitesetting->google_maps=$request->google_maps ?? '';

        $sitesetting->save();
        return redirect(route('sitesettings.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sitesetting  $sitesetting
     * @return \Illuminate\Http\Response
     */
    public function show(Sitesetting $sitesetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sitesetting  $sitesetting
     * @return \Illuminate\Http\Response
     */
    public function edit(Sitesetting $sitesetting, $id)
    {
        $sitesetting = Sitesetting::find($id);
        return view('admin.sitesettings.update', [
            'sitesetting' => $sitesetting,
            'page_title' => "Update Sitesettings"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sitesetting  $sitesetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sitesetting $sitesetting)
    {
        $request->validate([
            'title' => "required",
            'phone' => "required",
            'email' => "required",
            'address' => "required",
            'fax' => "required",
            'main_logo'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:1536',
            'side_logo'=>'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:1536',
            'face_link'=>'nullable|url',
            'insta_link'=>'nullable|url',
            'twitter'=>'nullable|url',
            'google_maps' =>'nullable|url',

        ]);

        if ($request->hasFile('main_logo')) {
            $newMainLogo = time() . '-' . $request->main_logo->extension();
            $request->main_logo->move(public_path('uploads/sitesetting'), $newMainLogo );
            Storage::delete('uploads/sitesetting' . $sitesetting->main_logo);
            $sitesetting->main_logo = $newMainLogo;
        }else{
            unset($request['main_logo']);
        }


        if ($request->hasFile('side_logo')) {
            $newSideLogo = time() . '-' . $request->side_logo->extension();
            $request->side_logo->move(public_path('uploads/sitesetting'), $newSideLogo );
            Storage::delete('uploads/sitesetting' . $sitesetting->side_logo);
            $sitesetting->side_logo = $newSideLogo;
        }else{
            unset($request['side_logo']);
        }

        $sitesetting = Sitesetting::find($request->id);
        $sitesetting->title = $request->title;
        $sitesetting->phone = $request->phone;
        $sitesetting->email = $request->email;
        $sitesetting->address = $request->address;
        $sitesetting->fax = $request->fax;
        $sitesetting->face_link=$request->face_link ?? '';
        $sitesetting->insta_link=$request->insta_link ?? '';
        $sitesetting->twitter=$request->twitter ?? '';
        $sitesetting->google_maps=$request->google_maps ?? '';




        $sitesetting->save();

        return redirect(route('sitesettings.update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sitesetting  $sitesetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sitesetting $sitesetting, $id)
    {
        $sitesetting = Sitesetting::findOrFail($id);
        $sitesetting->delete();

        return redirect(route('sitesettings.index'));
    }
}
