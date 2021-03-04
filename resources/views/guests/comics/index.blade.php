@extends('layouts.app')

@section('content')
<h1>All comics for guest</h1>





@foreach ($comics as $comic)



      {{-- <h4 class="card-title">{{ $comic->title }}</h4>
      <p class="card-text">{{ $comic->slug }}</p> --}}

    
@endforeach
@endsection