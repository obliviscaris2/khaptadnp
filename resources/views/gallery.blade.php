@extends('layouts.home-master')

@section('content')
<div class="self-publication-container">
    <h3 class="self-publication-title">Our Gallery</h3>
    <div class="gallery-images-container">
        @foreach ($galleries as $gallery )
        <figure>
            <a href="{{ asset('uploads/gallery/' . $gallery->image) }}" data-lightbox="mygallery" data-title="{{ $gallery->title }}">
                <img src="{{ asset('uploads/gallery/' . $gallery->image) }}" width="100%" height="250px">
            </a>
            <figcaption>{{ $gallery->title}}</figcaption>
        </figure>
        @endforeach

    </div>
</div>
    
@endsection