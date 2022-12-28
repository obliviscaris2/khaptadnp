@extends('layouts.home-master')

@section('content')
<div class="self-publication-container">
    <h1 class="team-title">{{ __('Teams') }}</h1>
    <div class="team-container row">
    
        @foreach ($teams as $team)
        <div style="height: auto;" class="team-card col-md-4">
            <span class="team-role">{{ $team->role }}</span>
            <img class="team-image" src="{{ asset('uploads/team/' . $team->image) }}" alt="team image">
            <span class="team-name" style="margin-top: 5px; text-align: center; font-weight: 600">{{$team->name }}</span>
            <hr>
            <span class="team-position green-color" style=" text-align: center; font-weight: 600">{{ $team->position }}</span>
            <hr>
            <span class="team-email green-color" style=" text-align: center; font-weight: 600">{{ $team->email }}</span>
            <hr>
            <span class="team-contact-number green-color" style=" text-align: center; font-weight: 600">{{ $team->contact_number }}</span>
        </div>
        @endforeach
    </div>
</div>

@endsection