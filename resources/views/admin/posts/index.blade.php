@extends('admin.layouts.master')

@section('content')

<div class="row mb-2">
  <div class="col-sm-6">
    <h1 class="m-0">{{ $page_title }}</h1>
   <a href="{{ url('admin') }}"><button class="btn-primary btn-sm"><i class="fa fa-arrow-left"></i> Back</button></a>
   
   <a href="{{ url('admin/posts/create') }}"><button class="btn-primary btn-sm"><i class="fa fa-plus"></i>Add Posts</button></a> 

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
      <th>Title</th>
      <th>Content</th>
      <th>Category</th>
      <th>Image</th>

      <th>Action</th>
    </thead>
    <tbody> 
          @foreach ($posts as $post )
          <tr>
            <td>{{ $post->title }}</td>
            <td>{{ $post->content }}</td>
            <td>@foreach ($post->getCategories as $category)

                <div>
                  {{ $category->title}}
                </div>
              
            @endforeach</td>

            <td > 
              <img id="preview1"  src="{{ url('uploads/post/' . $post->image) }}"
              style="width: 150px; height:150px" /></td>
            <td>
              <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
              <a href='{{ route('posts.destroy', $post->id) }}'>Delete</a>
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

@endsection