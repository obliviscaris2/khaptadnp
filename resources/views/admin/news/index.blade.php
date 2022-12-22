@extends('admin.layouts.master')
 
 
@section('content') 
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">{{ $page_title }}</h1>
        <a href="{{ url('admin') }}"><button class="btn-primary btn-sm"><i class="fa fa-arrow-left"></i> Back</button></a>
        
        <a href="{{ url('admin/news/create') }}"><button class="btn-primary btn-sm"><i class="fa fa-plus"></i>Add News</button></a> 

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
            <th>Title</th>
            <th>Description</th>
            <th>Image</th>
            <th>File</th>

            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($news as $new)
                <td>{{ $new->title }}</td>
                <td>{!! $new->description !!}</td>
                <td > 
                    <img id="preview"  src="{{ asset('uploads/news/' . $new->image)}}"
                    style="width: 150px; height:150px" />
                </td>
                <td>{{ $new->file ?? "" }}</td>
                <td>
                    <a href="/admin/news/edit/{{ $new->id }}">
                        <div style="display: flex; flex-direction:row;">
                            <button type="button" class="btn-block btn-warning btn-sm"><i
                                    class="fas fa-edit"></i> Update </button>
                    </a>
                    <a href="{{ url('admin/news/destroy/'.$new->id) }}">
                    <button type="button" class="btn-block btn-danger btn-sm" data-toggle="modal"
                        data-target="#modal-default" style="width:auto;"
                        onclick="replaceLinkFunction">Delete</button>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@stop