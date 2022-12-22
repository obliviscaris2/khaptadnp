@extends('admin.layouts.master')
 
 
  @section('content') 
   <!-- Content Wrapper. Contains page content -->  
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">{{ $page_title }}</h1>
             <a href="{{ url('admin/publications/create') }}"><button class="btn-primary btn-sm"><i class="fa fa-plus"></i>Add Publications</button></a> 
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v1</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
       
      <!-- /.content-header -->
  
    
      <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Title</th>
                <th>File/PDF</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($publications as $publication)
                <tr data-widget="expandable-table" aria-expanded="false">
                    <td>{{ $publication->title ?? '' }}</td>
                    <td>{{ $publication->file }}</td>
                    <td>
                            <a href="edit/{{ $publication->id }}">
                                <div style="display: flex; flex-direction:row;">
                                    <button type="button" class="btn-block btn-warning btn-sm"><i
                                            class="fas fa-edit"></i> Edit </button>
                            </a>
                            
                            <a href="{{ url('admin/publications/destroy/'.$publication->id) }}">
                              <button type="button" class="btn-block btn-danger btn-sm" data-toggle="modal"
                                  data-target="#modal-default" style="width:auto;"
                                  onclick="replaceLinkFunction">Delete</button>
                              </a>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
  
          <!-- /.row -->
          <!-- Main row -->
     
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
  
  
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