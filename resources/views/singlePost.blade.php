@extends('layouts.home-master')

@section('content')
    <div class="self-publication-container">
        <div class="singleblog-container">
            <h3 class="blog-post-title">{{ $blogPost->title }}</h3>
            <p class="to-small" style="color: green ">
                <span style="color: black">By: </span> {{ $blogPost->author }} 
            </p>
            <img class="blogpost-img" src="{{ asset('uploads/blog/' . $blogPost->image) }}" alt="">
            <p>{!! $blogPost->description !!} </p>

        </div>      
               
    </div>
@endsection