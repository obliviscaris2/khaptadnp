@extends('admin.layouts.master')
 
 
  @section('content') 
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">{{ $page_title }}</h1>
                
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>


        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($userfeedbacks as $userfeedback)
                    <tr height="auto" data-widget="expandable-table" aria-expanded="false">
                        <td>{{ $userfeedback->name ?? '' }}</td>                   
                        <td>{{ $userfeedback->email ?? '' }}</td>
                                           
                        <td>
                            <p>
                                {{ $userfeedback->message ?? '' }}
                            </p>
                        </td>                   
                        <td>
                            <a href="{{ url('admin/userfeedback/destroy/'. $userfeedback->id) }}">
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