@extends('layouts.dashboard')
@section('content')
<h1>EDIT COMIC:  "{{$comic->title}}" </h1>

{{-- error --}}
@include('partials.error')

<form action="{{ route('admin.comics.update', ['comic'=> $comic->slug]) }}" method="post">

    @csrf
    @method('PUT')

    {{-- title --}}
    <div class="form-group">
        <label for="title">Title</label>
        <input class="form-control" type="text" name="title" id="title" value="{{$comic->title}}">
    </div>
    @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <button type="submit" class="btn btn-primary">Submit</button>

</form>
@endsection