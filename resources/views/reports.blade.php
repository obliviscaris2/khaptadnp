@extends('layouts.home-master')

@section('content')
    <div class="self-publication-container">
        <h3 class="self-publication-title">{{ __('Reports') }}</h3>
        <div class="publications-container">
           
            @foreach ($reports as $report )
            
            <div class="publication-files">
                <h5 class="publication-files-title">{{ $report->title }}</h5>
                <a href="{{ asset('uploads/reports/' . $report->file) }}" target="_blank">
                    <p>{{ $report->file }} </p>
                    <a  class="green-color" href="" download="{{ $report->file }}"><i class="fa-solid fa-download" style="margin-right: 5px"></i>Download</a>
                </a>
                
            </div>
            @endforeach
    
        </div>
    </div>


@endsection