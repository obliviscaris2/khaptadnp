<?php

namespace App\Http\Controllers;

use App\Models\UserFeedback;
use Illuminate\Http\Request;

class UserFeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userFeedbacks = UserFeedback::all();

        return view('admin.userfeedback.index', [
            "page_title" => "User Feedback",
            "userfeedbacks" => $userFeedbacks,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            "name" => "required",
            "email" => "required",
            'phone' => "required",
            "message" => "required"
        ]);

        $userFeedback = new UserFeedback();
        $userFeedback->name = $request->name;
        $userFeedback->email = $request->email;
        $userFeedback->phone = $request->phone;
        $userFeedback->message = $request->message;

        $userFeedback->save();

        return redirect(route('contact'))->with('message', 'Submitted Successfully');


    }

    public function HomeStore(Request $request)
    {
        $request->validate([
            "name" => "required",
            "email" => "required",
            'phone' => "required",
            "message" => "required"
        ]);

        $userFeedback = new UserFeedback();
        $userFeedback->name = $request->name;
        $userFeedback->email = $request->email;
        $userFeedback->phone = $request->phone;
        $userFeedback->message = $request->message;

        $userFeedback->save();

        return redirect(route('home'))->with('message', 'Submitted Successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserFeedback  $userFeedback
     * @return \Illuminate\Http\Response
     */
    public function show(UserFeedback $userFeedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserFeedback  $userFeedback
     * @return \Illuminate\Http\Response
     */
    public function edit(UserFeedback $userFeedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserFeedback  $userFeedback
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserFeedback $userFeedback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserFeedback  $userFeedback
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserFeedback $userFeedback, $id)
    {
        $userFeedback = UserFeedback::find($id);
        $userFeedback->delete();

        return redirect(route('userfeedback.index'));
    }
}
