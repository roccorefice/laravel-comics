@extends('layouts.app')

@section('content')
<h1>All comics for guest</h1>

@foreach ($comics as $comic)
<div class="card m-5 p-2">
    <div class="card-body">
      <h4 class="card-title">{{ $comic->title }}</h4>
      <p class="card-text">{{ $comic->slug }}</p>
    </div>
  </div>
    
@endforeach
@endsection