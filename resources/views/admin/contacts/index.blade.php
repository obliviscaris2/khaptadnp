@extends('admin.layouts.master')
 
 
  @section('content') 
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">{{ $page_title }}</h1>
                <a href="{{ url('admin/contacts/create') }}"><button class="btn-primary btn-sm"><i class="fa fa-plus"></i>Add Contact</button></a> 
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
                    <th>Phone</th>
                    <th>Message</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr data-widget="expandable-table" aria-expanded="false">
                        <td>{{ $contact->name ?? '' }}</td>                   
                        <td>{{ $contact->email ?? '' }}</td>                   
                        <td>{{ $contact->phone ?? '' }}</td>                   
                        <td>{{ $contact->message ?? '' }}</td>                   
                        <td>
                            <a href="edit/{{ $contact->id }}">
                                    <div style="display: flex; flex-direction:row;">
                                        <button type="button" class="btn-block btn-warning btn-sm">
                                            <i class="fas fa-edit"></i> 
                                            Edit 
                                        </button>
                            </a>
                            <a href="{{ url('admin/contacts/destroy/'. $contact->id) }}">
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