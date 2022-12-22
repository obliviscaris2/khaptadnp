
@extends('admin.layouts.master')

@section('content')

    <form id="quickForm" action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group"></div>

                <label for="categories">Choose a category:</label>
                <select name="categories" id="">
                @foreach ($categories as $category )
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
                </select>
            </div>

            <div class="form-group">              
                <label for="title">Title</label>
                <input class="form-control" style="color: white;" type="text" name="title" id="" placeholder="Your Title..">
            </div>


            
            <div class="form-group">
                <label for="image">Image</label><span style="color:red; font-size:large"> *</span>
                <input type="file" name="image" class="form-control" id="image" onchange="previewImage(event)"
                    placeholder="image" required>
            </div>
            <img id="preview" style="max-width: 500px; max-height:500px" />
            
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" style="color: white;" type="text" name="content" id="" placeholder="Your Content.."></textarea>
            </div>


            <input type="submit" name="" id="">
            
        </div>
    </form>

    

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

@endsection


