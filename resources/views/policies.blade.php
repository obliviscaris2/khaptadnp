@extends('layouts.home-master')

@section('content')
<div class="self-publication-container">
    <h3 class="self-publication-title">{{ __('Policies/Acts') }}</h3>

    <div class="all-policies-container">
        @foreach ($policies as $policy)
        <div class="single-policy-container">
            <h4 class="blog-post-title">{{ $policy->title }}</h4>
            <a class="policy-file green-color" href="{{ asset('uploads/policies/' . $policy->file) }}" target="_blank">
                <p>{{ $policy->file }} </p>
                <a class="green-color" href="" download="{{ $policy->file }}"><i class="fa-solid fa-download" style="margin-right: 5px"></i>Download</a>
            </a>
            <p class="policy-description">{{$policy->description }}</p>
            <hr>
        </div>
        @endforeach
    </div>
</div>
@endsection