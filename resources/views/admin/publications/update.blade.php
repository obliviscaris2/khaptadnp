@extends('admin.layouts.master')


@section('content')
    <!-- Content Wrapper. Contains page content -->

    <div class="row mb-2">
        <div class="col-sm-6">
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


    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif



    <form id="quickForm" novalidate="novalidate" method="POST" action="{{ route('publications.update') }}"
        enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $publication->id }}">
        <div class="card-body">
            <div class="form-group">
                <label for="title">Title</label><span style="color:red; font-size:large"> *</span>
                <input style="width:auto;" type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{ $publication->title }}">
            </div>
           
            <div class="form-group">
                <label for="pdf">PDF</label>
                <input type="file" name="file" class="form-control" id="pdf" onchange="previewImage(event)"
                    placeholder="PDF" value="{{ $publication->file }}">
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
