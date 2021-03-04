@extends('layouts.app')

@section('content')

<div class="details_comic container">

  <img src="{{ asset('storage/'  . $comic->cover) }}" alt="" srcset="">
  <h4 class="card-title">{{ $comic->title }}</h4>
  <table>
    <thead>
      <tr>
        <th>U.S Price: {{ $comic->price }}</th>
        <th>
          @if ($comic->available == "yes")
              AVAILABLE
          @else
              NOT AVAILABLE
          @endif
        </th>
        <th>Check Availability <i class="fas fa-caret-down"></i></th>
      </tr>
    </thead>
  </table>
  <p class="w-50">{{ $comic->description }}</p>
    

  
</div>

@endsection