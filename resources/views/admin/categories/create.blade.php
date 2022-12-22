
@extends('admin.layouts.master')


@section('content')
    <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <fieldset>
            <label for="title">Your Category:</label><br>
            <input name="title" type="text"><br><br>
        
            <input type="submit" name="" id="">

            </div>

        </fieldset>

    </form>

@endsection