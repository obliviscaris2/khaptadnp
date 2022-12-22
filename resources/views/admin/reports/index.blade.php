@extends('admin.layouts.master')
 
 
  @section('content') 
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">{{ $page_title }}</h1>
                <a href="{{ url('admin/reports/create') }}"><button class="btn-primary btn-sm"><i class="fa fa-plus"></i>Add Reports</button></a> 
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard v1</li>
                </ol>
            </div>
        </div>


        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>File</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($reports as $report)
                    <tr data-widget="expandable-table" aria-expanded="false">
                        <td>{{ $report->title ?? '' }}</td>                   
                        <td>{{ $report->description ?? '' }}</td>                   
                        <td>{{ $report->file ?? ""}}</td>                   
                        <td>
                            <a href="edit/{{ $report->id }}">
                                    <div style="display: flex; flex-direction:row;">
                                        <button type="button" class="btn-block btn-warning btn-sm">
                                            <i class="fas fa-edit"></i> 
                                            Edit 
                                        </button>
                            </a>
                            <a href="{{ url('admin/reports/destroy/'. $report->id) }}">
                                    <button type="button" class="btn-block btn-danger btn-sm" data-toggle="modal"
                                        data-target="#modal-default" style="width:auto;"
                                        onclick="replaceLinkFunction">
                                        Delete
                                    </button>
                            </a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
@stop