@extends('admin.layouts.master')
 
 
@section('content') 
    <div class="row mb-2">
        <div class="col-sm-6">

        <a href="{{ url('admin') }}"><button class="btn-primary btn-sm"><i class="fa fa-arrow-left"></i>Back</button></a> 
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        </div>
    </div>

    <form id="quickForm"  method="POST" action="{{ route('blog.update') }}"
    enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ $blog->id }}">
    <div class="card-body">
        <div class="form-group">
            <label for="title">Title</label>
            <input  type="text" name="title" class="form-control" value="{{ $blog->title }}" placeholder="Title..">
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input  type="text" name="author" class="form-control" value="{{ $blog->author }}" placeholder="Written By..">
        </div>
        <div class="form-group">
            <label for="date">Date</label>
            <input  type="date" name="date" class="form-control" value="{{ $blog->date }}">
        </div>

        <div class="form-group">
            <label for="image">Image</label><span style="color:red; font-size:large"> *</span>
            <input type="file" name="image" class="form-control" id="image" onchange="previewImage(event)"
                placeholder="image" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label><span style="color:red; font-size:large"> *</span>
            <textarea class="textarea-summernote" id="summernote" name="description">
                {{ $blog->description }}
            </textarea>
            
        </div>
       
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <button type="submit" class="btn-primary">Create Blog Post</button>
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


  