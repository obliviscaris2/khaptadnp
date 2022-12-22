@extends('admin.layouts.master')
 
 
@section('content') 
    <div class="row mb-2">
        <div class="col-sm-6">
        {{-- <h1 class="m-0">{{ $page_title }}</h1> --}}
        <a href="{{ url('admin') }}"><button class="btn-primary btn-sm"><i class="fa fa-arrow-left"></i> Back</button></a> 
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v1</li>
        </ol>
        </div>
    </div>

    <form id="quickForm"  method="POST" action="{{ route('teams.store') }}"
    enctype="multipart/form-data">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label for="role">Role</label>
            <input type="text" name="role" class="form-control" placeholder="Role">
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input  type="text" name="name" class="form-control" placeholder="Name" required>
        </div>
        <div class="form-group">
            <label for="position">Position</label>
            <input type="text" name="position" class="form-control" placeholder="Position" required>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control" onchange="previewImage(event)" placeholder="Image"
                required>
        </div>
        <img id="preview" style="max-width: 500px; max-height:500px" />

        <div class="form-group">
            <label for="contact_number">Contact Number</label>
            <input  type="text" name="contact_number" class="form-control" placeholder="Contact Number" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input  type="email" name="email" class="form-control" placeholder="Email" required>
        </div>

    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <button type="submit" class="btn-primary">Create Staff</button>
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