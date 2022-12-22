@extends('layouts.home-master')

@section('content')

<div class="self-publication-container">
    <h3 class="self-publication-title">Programs</h3>

    <div class="all-policies-container">
        @foreach ($programs as $program)
        <div class="single-policy-container">
            <h4 class="blog-post-title">{{ $program->title }}</h4>
            <a class="policy-file green-color" href="{{ asset('uploads/programs/' . $program->file) }}" target="_blank">
                <p>{{ $program->file }} </p>
                <a class="green-color" href="" download="{{ $program->file }}"><i class="fa-solid fa-download" style="margin-right: 5px"></i>Download</a>
            </a>
            <p class="policy-description">{{$program->description }}</p>
            <hr>
        </div>
        @endforeach
    </div>
</div>
@endsection