@extends('admin.layouts.master')
 
 
@section('content') 
 <!-- Content Wrapper. Contains page content -->


 

    

        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">{{ $page_title }}</h1>
           <a href="{{ url('admin') }}"><button class="btn-primary btn-sm"><i class="fa fa-arrow-left"></i> Back</button></a>
           
           <a href="{{ url('admin/blog/create') }}"><button class=" btn-primary btn-sm"><i class="fa fa-plus"></i>Add BlogPost</button></a> 

          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div>
        </div>
      

<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Image</th>
            <th>Published Date</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($blogs as $blog)
            <tr data-widget="expandable-table" aria-expanded="false">
                <td >{{ $blog->title ?? '' }}</td>
                <td >{{ $blog->author ?? '' }}</td>
                <td><img src="{{ url('uploads/blog/' . $blog->image) ?? '' }}" id="preview" style="max-width: 150px; max-height:150px" /></td>
                <td>{{ $blog->date }}</td>
                <td>{!! $blog->description ?? '' !!}</td>
                <td>
                    <a href="/admin/blog/edit/{{ $blog->id }}">
                        <button type="button" class="btn-block btn-primary btn-sm" data-toggle="modal"
                        data-target="#modal-default" style="width:auto;"
                        onclick="replaceLinkFunction">Edit</button>
                    </a>
                    <a href="{{ url('admin/blog/destroy/'.$blog->id) }}">
                    <button type="button" class="btn-block btn-danger btn-sm" data-toggle="modal"
                        data-target="#modal-default" style="width:auto;"
                        onclick="replaceLinkFunction">Delete</button>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>



     
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