@extends('layouts.home-master')

@section('content')

<div class="self-publication-container">
    <h3 class="self-publication-title">{{ __('News') }}</h3>

    <div class="all-policies-container">
        @foreach ($news as $new)
        <div class="single-policy-container">
            <h4 class="blog-post-title">{{ $new->title }}</h4>
            <a class="policy-file green-color" href="{{ asset('uploads/news/' . $new->file) }}" target="_blank">
                <p>{{ $new->file }} </p>
                <a class="green-color" href="" download="{{ $new->file }}"><i class="fa-solid fa-download" style="margin-right: 5px"></i>Download</a>
            </a>
            <img class="news-image" src="{{ asset('uploads/news/' . $new->image) }}">
            <p class="policy-description">{{$new->description }}</p>
            <hr>
        </div>
        @endforeach
    </div>
</div>
@endsection