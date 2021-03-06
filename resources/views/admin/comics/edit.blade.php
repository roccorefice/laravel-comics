@extends('layouts.dashboard')
@section('content')

<div class="jumbotron">
    <h1 class="display-6">EDIT COMIC: "{{$comic->title}}"</h1>
</div>

{{-- error --}}
@include('partials.error')

<form action="{{ route('admin.comics.update', ['comic'=> $comic->slug]) }}" method="post">

    @csrf
    @method('PUT')

    {{-- title --}}
    <div class="form-group my-5">
        <label for="title">Title</label>
        <input class="form-control" type="text" name="title" id="title" value="{{$comic->title}}">
    </div>
    @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    {{-- cover --}}
    <div class="form-group my-5">
        <img width="125" src="{{ asset('storage/'  . $comic->cover) }}" alt="" srcset="">
        <p>This is current image</p>
        <p>If you want to change the cover image click on the button</p>
        <input type="file" class="form-control-file" name="cover" id="cover" placeholder="add a cover image" aria-describedby="coverHelper">
        <small id="coverHelper" class="form-text text-muted">Change cover image</small>
    </div>
    @error('cover')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    {{-- author --}}
    <div class="form-group my-5">
        <label for="author">Author</label>
        <input class="form-control" type="text" name="author" id="author" value="{{$comic->author}}">
    </div>
    @error('author')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    {{-- description --}}
    <div class="form-group my-5">
        <label for="body">Description</label>
        <textarea class="form-control" name="description" id="description" rows="3">{{$comic->description}}</textarea>
    </div>
    @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    
    {{-- price --}}
    <div class="form-group my-5">
        <label for="price">Price</label>
        <input type="text" class="form-control" name="price" id="price" aria-describedby="price-helper" placeholder="Price" value="{{ $comic->price }}">
        <small id="price-helper" class="form-text text-muted">Type the Price</small>
    </div>
    @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    {{-- Available --}}
    <div class="form-group my-5 w-25">
        <label for="categories">Available</label>
        <select class="form-control" name="available" id="available">
        <option value="yes">yes</option>
        <option value="no">no</option>
        </select>
    </div>
    @error('Available')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror



    <button type="submit" class="btn btn-primary">Submit</button>

</form>
@endsection