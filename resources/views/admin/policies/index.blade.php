@extends('admin.layouts.master')
 
 
  @section('content') 
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">{{ $page_title }}</h1>
                <a href="{{ url('admin/policies/create') }}"><button class="btn-primary btn-sm"><i class="fa fa-plus"></i>Add Policy</button></a> 
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>


        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Image</th>
                    <th>File</th>
                    <th>Description</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($policies as $policy)
                    <tr data-widget="expandable-table" aria-expanded="false">
                        <td>{{ $policy->title ?? '' }}</td>  
                        <td > 
                            <img id="preview1"  src="{{ url('uploads/policies/' . $policy->image) }}"
                            style="width: 150px; height:150px" />
                        </td>
                        <td>{{ $policy->file ?? ""}}</td> 
                        <td>{{ $policy->description ?? '' }}</td>                   
                        <td>
                            <a href="edit/{{ $policy->id }}">
                                    <div style="display: flex; flex-direction:row;">
                                        <button type="button" class="btn-block btn-warning btn-sm">
                                            <i class="fas fa-edit"></i> 
                                            Edit 
                                        </button>
                            </a>
                            <a href="{{ url('admin/policies/destroy/'. $policy->id) }}">
                                    <button type="button" class="btn-block btn-danger btn-sm" data-toggle="modal"
                                        data-target="#modal-default" style="width:auto;"
                                        onclick="replaceLinkFunction">
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