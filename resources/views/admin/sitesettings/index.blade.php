@extends('admin.layouts.master')

@section('content') 


<div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0">{{ $page_title }}</h1>
     {{-- <a href="{{ url('admin/sitesettings/create') }}"><button class="btn-primary btn-sm"><i class="fa fa-plus"></i>Add Sitesetting</button></a>  --}}
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
        <li class="breadcrumb-item active">Dashboard v1</li>
      </ol>
    </div><!-- /.col -->
  </div>


  <table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Title</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Email</th>
            <th>Fax</th>
            <th>Logo</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($sitesettings as $sitesetting)
            <tr>
                <td>{{ $sitesetting->title ?? '' }}</td>
                <td>{{ $sitesetting->phone ?? '' }}</td>
                <td>{{ $sitesetting->address ?? '' }}</td>
                <td>{{ $sitesetting->email ?? '' }}</td>
                <td>{{ $sitesetting->fax ?? '' }}</td>
                <td>
                        <img id="preview1"  src="{{ url('uploads/sitesetting/' . $sitesetting->main_logo) }}"
                            style="width: 150px; height:150px" />

                </td>
                
                <td>
                    <a href="/admin/sitesettings/edit/{{ $sitesetting->id }}"> 
                        <button type="button">   
                            Update 
                        </button>
                    </a>
                    <a href="{{ url('admin/sitesettings/destroy/'.$sitesetting->id) }}">
                        <button type="button">
                            Delete
                        </button>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>



<script>
  const previewImage1 = e => {
      const reader = new FileReader();
      reader.readAsDataURL(e.target.files[0]);
      reader.onload = () => {
          const preview = document.getElementById('preview1');
          preview.src = reader.result;
      };
  };
</script>







@stop