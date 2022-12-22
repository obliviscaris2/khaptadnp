@extends('layouts.home-master')

@section('content')
<div class="self-publication-container">
    <h3 class="self-publication-title">Blog Posts</h3>

    <div class="all-posts-container">
        @foreach ($blogPosts as $blogPost )
            <div class="single-post-container">               

                <a href="/blogpost/{{ $blogPost->id }}">
                    <h4 class="blog-post-title ">
                        {{$blogPost->title}}
                    </h4>
                    <p class="to-small" style="color: green ">
                        <span style="color: black">By: </span> {{ $blogPost->author }} 
                    </p>
                    <p class="to-small">Published at: <span style="color:green;">{{ $blogPost->date }}</span></p>
                    <img class="news-image" src="{{ asset('uploads/blog/' . $blogPost->image) }}" >
                    <p class="to-small">{!! Str::substr($blogPost->description, 0, 248) !!}...</p>
                    <hr>
                </a>
            </div>

        @endforeach
    </div>
</div>
@endsection