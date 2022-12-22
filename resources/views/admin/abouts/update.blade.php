@extends('admin.layouts.master')


@section('content')
    <!-- Content Wrapper. Contains page content -->

    <div class="row mb-2">
        <div class="col-sm-6">
            {{-- <h1 class="m-0">{{ $page_title }}</h1> --}}
            <a href="{{ url('admin') }}"><button class="btn-primary btn-sm"><i class="fa fa-arrow-left"></i>
                    Back</button></a>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->

    <!-- /.content-header -->
    <form id="quickForm" method="POST" action="{{ route('abouts.update') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $about->id }}">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" name="title" value="{{ $about->title ?? '' }}" class="form-control" placeholder="Title">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Subtitle</label>
                <input type="text" name="subtitle" value="{{ $about->subtitle ?? '' }}" class="form-control" placeholder="Subtitle">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Image</label>
                <input type="file" name="image" class="form-control" onchange="previewImage(event)" placeholder="Image">
            </div>
            <img id="preview" src="{{ url('uploads/about/' . $about->image) }}"
                style="max-width: 500px; max-height:500px" />
            <div class="form-group">
                <label for="exampleInputEmail1">Description</label>

                <textarea style="max-width: 30%;" type="text" class="form-control" name="description" id="description"
                    placeholder="Add Description" value="{{ old('description') }}">
                  {{ $about->description ?? '' }}
                </textarea>

            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea id="summernote" name="content" value="">
          {{ $about->content }}
        </textarea>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn-primary">Update about</button>
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
