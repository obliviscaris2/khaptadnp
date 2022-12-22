@extends('admin.layouts.master')


@section('content')

<form action="{{ route('categories.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <fieldset>
        <input type="" name="id" value="{{ $category->id }}" hidden>

        <label for="title">Your Category:</label><br>
        <input name="title" type="text" value="{{ $category->title }}"><br><br>
    
        <input type="submit" name="" id="">
    </fieldset>

</form>

@endsection