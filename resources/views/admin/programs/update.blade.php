@extends('admin.layouts.master')
 
 
@section('content') 
    <div class="row mb-2">
        <div class="col-sm-6">
        {{-- <h1 class="m-0">{{ $page_title }}</h1> --}}
        <a href="{{ url('admin') }}"><button class="btn-primary btn-sm"><i class="fa fa-arrow-left"></i>Back</button></a> 
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        </div>
    </div>

    <form id="quickForm"  method="POST" action="{{ route('programs.update') }}"
    enctype="multipart/form-data">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value={{ $program->title }}>
        </div>
        <div class="form-group">
            <label for="description">Description</label><span style="color:red; font-size:large"> *</span>
            <textarea class="textarea-summernote" id="summernote" name="description">
                {{ $program->description }}
            </textarea>
            
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control" onchange="previewImage(event)" placeholder="Image" >
        </div>
        <img id="preview" src="{{ url('uploads/programs/' . $program->image) }}" style="max-width: 500px; max-height:500px" />

        
        <div class="form-group">
            <label for="file">PDF</label>
            <input type="file" name="file" class="form-control" id="file" onchange="previewImage(event)"
                placeholder="PDF">
        </div>


    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <button type="submit" class="btn-primary">Create Program</button>
    </div>
    </form>

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