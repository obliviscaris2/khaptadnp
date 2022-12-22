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
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
    </div>

    <form id="quickForm" novalidate="novalidate" method="POST" action="{{ route('policies.update') }}"
        enctype="multipart/form-data">
        @csrf
        <input name="id" id="" value = "{{ $policy->id }}" hidden>
        <div class="card-body">
            <div class="form-group">
                <label for="title">Title</label><span style="color:red; font-size:large"> *</span>
                <input style="width:auto;" type="text" name="title" class="form-control" value= "{{ $policy->title }}" placeholder="Title">
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control" id="image" onchange="previewImage(event)"
                    placeholder="Image" >
                <img id="preview1" src="{{ url('uploads/policies/' . $policy->image) }}"
                    style="max-width: 300px; max-height:300px" />
            </div>

            <div class="form-group">
                <label for="file">PDF</label>
                <input type="file" name="file" class="form-control" id="file" onchange="previewImage(event)"
                    placeholder="PDF">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="textarea-summernote" id="summernote" name="description">
                    {{ $policy->description }}
                </textarea>
                
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn-primary">Submit</button>
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
