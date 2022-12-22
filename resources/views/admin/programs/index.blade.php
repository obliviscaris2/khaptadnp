@extends('admin.layouts.master')
 
 
@section('content') 
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">{{ $page_title }}</h1>
        <a href="{{ url('admin') }}"><button class="btn-primary btn-sm"><i class="fa fa-arrow-left"></i> Back</button></a>
        
        <a href="{{ url('admin/programs/create') }}"><button class="btn-primary btn-sm"><i class="fa fa-plus"></i>Add Program</button></a> 

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
        @foreach ($programs as $program)
                <td>{{ $program->title }}</td>
                <td>{{ $program->description }}</td>
                <td>
                    <img src="{{ url('uploads/programs/' . $program->image) }}" id="preview" style="max-width: 150px; max-height:150px" />
                </td>
                <td>{{ $program->file ?? ""}}</td> 
                <td>
                    <a href="/admin/programs/edit/{{ $program->id }}">
                        <div style="display: flex; flex-direction:row;">
                            <button type="button" class="btn-block btn-warning btn-sm"><i
                                    class="fas fa-edit"></i> Update </button>
                    </a>
                    <a href="{{ url('admin/programs/destroy/'.$program->id) }}">
                    <button type="button" class="btn-block btn-danger btn-sm" data-toggle="modal"
                        data-target="#modal-default" style="width:auto;"
                        onclick="replaceLinkFunction">Delete</button>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>


    <script>
        const previewImage = e => {
            const reader = new FileReader();
            reader.readAsDataURL(e.target.files[0]);
            reader.onload = () => {
                const preview = document.getElementById('preview');
                preview.src = reader.result;
            };
        };
    </script>






  @stop