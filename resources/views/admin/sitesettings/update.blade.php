@extends('admin.layouts.master')

@section('content') 


<div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0">{{ $page_title }}</h1>
     {{-- <a href="{{ url('admin/sitesetting/create') }}"><button class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>Add Sitesetting</button></a>  --}}
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
        <li class="breadcrumb-item active">Dashboard v1</li>
      </ol>
    </div><!-- /.col -->
</div>


  <form id="quickForm" method="POST" action="{{ route('sitesettings.update') }}" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
        <div>
            <input type="hidden" name="id" value="{{ $sitesetting->id }}">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control"
                     value="{{ $sitesetting->title }}">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="number" name="phone" class="form-control"
                value="{{ $sitesetting->phone }}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control"
                value="{{ $sitesetting->email }}">
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" class="form-control" value="{{ $sitesetting->address }}">
            </div>

            <div class="form-group">
                <label for="fax">Fax</label>
                <input type="number" name="fax" class="form-control" value="{{ $sitesetting->fax }}">
            </div>

            <div class="form-group">
                <label for="main_logo">Main Logo</label>
                <input type="file" name="main_logo" class="form-control" placeholder="Main Logo" id="main_logo"
                onchange="previewImage1(event)" >

                <img id="preview1"  src="{{ url('uploads/sitesetting/' . $sitesetting->main_logo) }}"
                    style="max-width: 300px; max-height:300px" />
            </div>

            <div class="form-group">
                <label for="side_logo">Side Logo</label>
                <input type="file" name="side_logo" class="form-control" placeholder="Side Logo" id="side_logo">

            </div>
            <div class="form-group">
                <label for="face_link">Facebook URL</label>
                <input name="face_link" class="form-control" placeholder="Facebook URL (https://)" id="face_link"
                    value="{{ $sitesetting->face_link }}">
            </div>
            <div class="form-group">
                <label for="insta_link">Insta URL</label>
                <input name="insta_link" class="form-control" placeholder="Insta URL (https://)" id="insta_link"
                    value="{{ $sitesetting->insta_link }}">
            </div>
            <div class="form-group">
                <label for="insta_link">Twitter URL</label>
                <input name="twitter" class="form-control" placeholder="LinkedIn URL (https://)" id="twitter"
                    value="{{ $sitesetting->linked_link }}">
            </div>

            <div class="form-group">
                <label for="google_maps">Google Map</label>
                <input name="google_maps" class="form-control" placeholder="Google Maps URL (https://)"
                    id="google_maps" value="{{ $sitesetting->google_maps }}">
            </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn-primary">Apply</button>
    </div>
</form>

  







@stop