<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reports = Report::all();

        return view('admin.reports.index', [
            'reports' => $reports,
            'page_title' => "Reports"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.reports.create", [
            'page_title' => 'Create Reports'
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
            'description' => "required",
            'file' => "nullable|file|max:10000"
        ]);

        if ($request->hasFile('file')){
            $reportPath = $request->title . '.' .$request->file->extension();
            $request->file->move(public_path('uploads/reports'), $reportPath);
        } else {
            $reportPath = "NoFile";
        }

        $report = new Report();
        $report->title = $request->title;
        $report->description = $request->description;
        $report->file = $reportPath ?? "";

        $report->save();
        return redirect(route('reports.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report, $id)
    {
        $report = Report::find($id);
        return view('admin.reports.update', [
            'report' => $report,
            'page_title' => "Update Report"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $report)
    {
        $request->validate([
            'title' => "required",
            'description' => "required",
            'file' => "nullable|file|max:10000"
        ]);
        
        $report = Report::find($request->id);

        if ($request->hasFile('file')){
            $reportPath = $request->title . '.' .$request->file->extension();
            $request->file->move(public_path('uploads/reports'), $reportPath);
            Storage::delete('public/uploads/reports' . $report->file);
            $report->file = $reportPath;
        }

        $report->title = $request->title;
        $report->description = $request->description;

        $report->save();
        return redirect(route('reports.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report, $id)
    {
        $report = Report::find($id);
        $report->delete();

        return redirect(route('reports.index'));
    }
}
