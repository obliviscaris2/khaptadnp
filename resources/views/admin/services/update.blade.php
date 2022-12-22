@extends('admin.layouts.master')


@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <form id="quickForm" method="POST" action="{{ route('services.update') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $service->id }}">

                <div class="form-group">
                    <label for="title">Title</label><span style="color:red; font-size:large"> *</span>
                    <input style="width:auto;" type="text" name="title" class="form-control" id="title"
                        placeholder="Title" value="{{ $service->title }}">
                </div>
              

                <div>
                    <label for="description">Description</label><span style="color:red; font-size:large">
                        *</span>
                    <textarea style="max-width: 30%;" type="text" class="form-control" name="description" id="description"
                        placeholder="Add Description" value="">{{ $service->description }}
                      </textarea>
                </div>

               
                <div class="form-group">


                    <label for="image">Image</label><span style="color:red; font-size:large"> *</span>
                    <input type="file" name="image" class="form-control" id="image" onchange="previewImage(event)"
                        placeholder="Image" required>
                    <img id="preview1" src="{{ url('uploads/service/' . $service->image) }}"
                        style="max-width: 300px; max-height:300px" />
                </div>


               


                <div class="form-group">
                    <label for="summernote">Content</label><span style="color:red; font-size:large"> *</span>
                    <textarea id="summernote" name="content" value="">
                      {{ $service->content }}
                    </textarea>
                </div>


        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn-primary">Update</button>
        </div>
        </form>



        <!-- /.row -->
        <!-- Main row -->

        <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


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
