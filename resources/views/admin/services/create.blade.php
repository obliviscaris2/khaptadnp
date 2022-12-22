@extends('admin.layouts.master')


@section('content')

    <div class="row mb-2">
        <div class="col-sm-6">
            <a href="{{ url('admin') }}">
                <button class="btn-primary btn-sm">
                    <i class="fa fa-arrow-left"></i>
                    Back
                </button>
            </a>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
        </div>
    </div>

    <form id="quickForm" novalidate="novalidate" method="POST" action="{{ route('services.store') }}"
        enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="title">Title</label><span style="color:red; font-size:large"> *</span>
                <input style="width:auto; color:white;" type="text" name="title" class="form-control" id="title"
                    value="{{ old('title') }}" placeholder="Title">
            </div>
           
            <div>
                <label for="description">Description</label><span style="color:red; font-size:large">
                    *</span>
                <textarea style="max-width: 30%; color:white;" type="text" class="form-control" name="description" id="description"
                    placeholder="Add Description" value="{{ old('description') }}"></textarea>
            </div>

            <div class="form-group">
                <label for="image">Image</label><span style="color:red; font-size:large"> *</span>
                <input type="file" name="image" class="form-control" id="image" onchange="previewImage(event)"
                    placeholder="image" required>
            </div>
            <img id="preview" style="max-width: 500px; max-height:500px" />

        

            <div class="form-group">
                <label for="summernote">Content</label><span style="color:red; font-size:large"> *</span>
                <textarea id="summernote" name="content">
                    {{ old('content') }}
                </textarea>
            </div>


        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn-primary">Submit</button>
        </div>
    </form>


    <!-- Main row -->




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
