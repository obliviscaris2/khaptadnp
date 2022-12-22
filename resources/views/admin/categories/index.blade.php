
@extends('admin.layouts.master')

@section('content')

    <h1 class="table-title">Categories</h1>
    <table class="table table-bordered table-hover">
        <thead>
            <th>#</th>
            <th>Title</th>
            <th>Action</th>
        </thead>

        @foreach ($categories as $category )
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $category->title }}</td>
            <td>
                
                <a href="{{ route('categories.edit', $category->id) }}">
                    <div style="display: flex; flex-direction:row;">
                        <button type="button" class="btn-block btn-warning btn-sm">
                            <i class="fas fa-edit">
                            </i> Update 
                        </button>
                    </div>
                </a>
                <a href="{{ route('categories.destroy', $category->id) }}">
                    <button type="button" class="btn-block btn-danger btn-sm" data-toggle="modal" data-target="#modal-default" style="width:auto;" onclick="replaceLinkFunction">
                        Delete
                    </button>
                </a>
                
            </td>
        </tr>
        
        @endforeach
            
    </table>
    <button class="create-button"><a href="{{ route('categories.create') }}">CREATE</a></button>
@endsection
