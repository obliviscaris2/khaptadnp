<?php

namespace App\Http\Controllers;

use App\Models\Policy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PolicyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $policies = Policy::all();
        return view('admin.policies.index', [
            'page_title' => "Policies",
            'policies' => $policies
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.policies.create', [
            'page_title' => "Create Policy"
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
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:3048',
            'file' => "nullable|file|max:10000"
        ]);

        if ($request->hasFile('file')){
            $policyPath = $request->title . '.' .$request->file->extension();
            $request->file->move(public_path('uploads/policies'), $policyPath);
        } else {
            $policyPath = "NoFile";
        }

        $newImageName = $request->image->extension();
        
        $request->image->move(public_path('uploads/policies'), $newImageName);

        $policy = new Policy();
        $policy->title = $request->title;
        $policy->description = $request->description;
        $policy->file = $policyPath ?? "";
        $policy->image = $newImageName;


        $policy->save();
        return redirect(route('policies.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Policy  $policy
     * @return \Illuminate\Http\Response
     */
    public function show(Policy $policy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Policy  $policy
     * @return \Illuminate\Http\Response
     */
    public function edit(Policy $policy, $id)
    {
        $policy = Policy::find($id);
        return view('admin.policies.update', [
            'policy' => $policy,
            'page_title' => "Update Policy"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Policy  $policy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Policy $policy)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:3048',
            'file' => "nullable|file|max:10000"
            
        ]);

        $policy = Policy::find($request->id);

        if ($request->hasFile('image')) {
            $newImageName = $request->image->extension();
            $request->image->move(public_path('uploads/policies'), $newImageName );
            Storage::delete('uploads/policies' . $policy->image);
            $policy->image = $newImageName;
        }

        if ($request->hasFile('file')){
            $policyPath = $request->title . '.' .$request->file->extension();
            $request->file->move(public_path('uploads/policies'), $policyPath);
            Storage::delete('public/uploads/policies' . $policy->file);
            $policy->file = $policyPath;
        }


        $policy->title = $request->title;
        $policy->description = $request->description;

        $policy->save();
        return redirect(route('policies.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Policy  $policy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Policy $policy, $id)
    {
        $policy = Policy::find($id);
        $policy->delete();

        return redirect(route('policies.index'));
    }
}
