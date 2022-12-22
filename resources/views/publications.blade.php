@extends('layouts.home-master')

@section('content')
    <div class="self-publication-container">
        <h3 class="self-publication-title">Publications</h3>
        <div class="publications-container">
           
            @foreach ($publications as $publication )
            
            <div class="publication-files">
                <h5 class="publication-files-title">{{ $publication->title }}</h5>
                <a href="{{ asset('uploads/publications/' . $publication->file) }}" target="_blank">
                    <p>{{ $publication->file }} </p>
                    <a class="green-color" href="" download="{{ $publication->file }}"><i class="fa-solid fa-download" style="margin-right: 5px"></i>Download</a>
                </a>
                
            </div>
            @endforeach
    
        </div>
    </div>


@endsection