@extends('layouts.dashboard')

@section('content')
<div class="card">
  <div class="card-body">
    <h4 class="card-title">{{ $comic->title }}</h4>
    <p class="card-text">{{ $comic->slug }}</p>
  </div>
</div>
@endsection