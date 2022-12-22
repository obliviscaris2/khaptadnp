@extends('admin.layouts.master')


@section('content')
    <div class="row mb-2">
        <div class="col-sm-6">
            <a href="{{ url('admin') }}">
                <button class="btn-primary btn-sm">
                    <i class="fa fa-arrow-left"></i>
                    Back
                </button>
            </a>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
    </div>

    <form id="quickForm" novalidate="novalidate" method="POST" action="{{ route('contacts.store') }}"
        enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="title">Name</label><span style="color:red; font-size:large"> *</span>
                <input style="width:auto;" type="text" name="name" class="form-control" placeholder="Your Name">
            </div>
            <div class="form-group">
                <label for="email">Email</label><span style="color:red; font-size:large"> *</span>
                <input style="width:auto;" type="text" name="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label><span style="color:red; font-size:large"> *</span>
                <input style="width:auto;" type="text" name="phone" class="form-control" placeholder="Phone">
            </div>
            <div class="form-group">
                <label for="message">Message</label><span style="color:red; font-size:large"> *</span>
                <textarea style="width:auto; height:auto;" name="message" class="form-control" id="" cols="30" rows="10" placeholder="Message"></textarea>

            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn-primary">Submit</button>
        </div>
    </form>
@stop
