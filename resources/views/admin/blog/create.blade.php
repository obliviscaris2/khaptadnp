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

    <form id="quickForm"  method="POST" action="{{ route('blog.store') }}"
    enctype="multipart/form-data">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label for="title">Title</label>
            <input  type="text" name="title" class="form-control" placeholder="Title..">
        </div>
        <div class="form-group">
            <label for="Author">Author</label>
            <input  type="text" name="author" class="form-control" placeholder="Written By..">
        </div>
        <div class="form-group">
            <label for="date">Date</label>
            <input  type="date" name="date" class="form-control">
        </div>

        <div class="form-group">
            <label for="image">Image</label><span style="color:red; font-size:large"> *</span>
            <input type="file" name="image" class="form-control" id="image" onchange="previewImage(event)"
                placeholder="image" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label><span style="color:red; font-size:large"> *</span>
            <textarea class="textarea-summernote" id="summernote" name="description">
                
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


  