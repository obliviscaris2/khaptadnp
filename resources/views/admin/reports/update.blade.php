@extends('admin.layouts.master')


@section('content')
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
        </div>
    </div>

    <form id="quickForm" novalidate="novalidate" method="POST" action="{{ route('reports.update') }}"
        enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $report->id }}">
        <div class="card-body">
            <div class="form-group">
                <label for="title">Title</label><span style="color:red; font-size:large"> *</span>
                <input style="width:auto;" type="text" name="title" class="form-control" value="{{ $report->title }}" placeholder="Title">
            </div>
            <div class="form-group">
                <label for="description">Description</label><span style="color:red; font-size:large"> *</span>
                <input style="width:auto;" type="text" name="description" class="form-control" value="{{ $report->description }}" placeholder="Description">
            </div>
            
            <div class="form-group">
                <label for="file">PDF</label>
                <input type="file" name="file" class="form-control" id="file" onchange="previewImage(event)"
                    placeholder="PDF" required>
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
