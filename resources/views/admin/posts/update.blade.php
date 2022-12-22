
@extends('admin.layouts.master')

@section('content')

    <form action="{{ route('posts.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <fieldset>
            <legend>Create Your Posts</legend>

            {{-- <label for="categories">Choose a category:</label> --}}
            {{-- <select name="categories" id="">
                @foreach ($categories as $category )
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select> --}}
            <input name="id" id="" value = "{{ $post->id }}" hidden>

            <label for="title">Title</label>
            <input type="text" name="title" id="" placeholder="Your Title.." value="{{ $post->title }}">
            

            <div class="form-group">


                <label for="image">Image</label><span style="color:red; font-size:large"> *</span>
                <input type="file" name="image" class="form-control" id="image" onchange="previewImage(event)"
                    placeholder="Image">
                <img id="preview1" src="{{ url('uploads/post/' . $post->image) }}"
                    style="max-width: 300px; max-height:300px" />
            </div>

            <label for="content">Content</label>
            <input type="text" name="content" id="" placeholder="Your Content.." value="{{ $post->content }}">

            <input type="submit" name="" id="">
            
        </fieldset>
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


