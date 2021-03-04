@extends('layouts.dashboard')
@section('content')

<div class="jumbotron">
    <h1 class="display-6">CREATE COMIC</h1>
</div>

{{-- error --}}
@include('partials.error')

<form action="{{ route('admin.comics.store') }}" method="post" enctype="multipart/form-data">

    @csrf

    {{-- title --}}
    <div class="form-group">
        <label for="title">Title</label>
        <input class="form-control" type="text" name="title" id="title" required value="{{ old('title') }}">
    </div>
    @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    {{-- cover --}}
    <div class="form-group">
      <label for="cover">Cover</label>
      <input type="file" class="form-control-file" name="cover" id="cover" placeholder="add a cover image" aria-describedby="coverHelper">
      <small id="coverHelper" class="form-text text-muted">Add a cover image for the current comic</small>
    </div>
    @error('cover')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    {{-- author --}}
    <div class="form-group">
        <label for="author">Author</label>
        <input class="form-control" type="text" name="author" id="author" required value="{{ old('author') }}">
    </div>
    @error('author')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    {{-- description --}}
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" name="description" id="description" rows="3" >{{ old('description') }}</textarea>
    </div>
    @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    {{-- price --}}
    <div class="form-group">
        <label for="price">Price</label>
        <input type="text" class="form-control" name="price" id="price" aria-describedby="price-helper" placeholder="Price" value="{{ old('price') }}">
        <small id="price-helper" class="form-text text-muted">Type the Price</small>
    </div>
    @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror


    {{-- Available --}}
    <div class="form-group w-25">
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