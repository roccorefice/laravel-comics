@extends('layouts.app')

@section('content')

<div class="details_comic">
  <div class="container">
    <img src="{{ asset('storage/'  . $comic->cover) }}" alt="" srcset="">
    <h4 class="card-title">{{ $comic->title }}</h4>
    <table class="table_green">
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


  <div class="more_details">
    <div class="container">

      <div class="talent">
        <h5>Talent</h5>
        <table class="table">
          <tr>
            <td class="col-tit">Art by:</td>
            <td>{{ $comic->artist }}</td>
          </tr>
          <tr>
            <td class="col-tit">Written by:</td>
            <td>{{ $comic->author }}</td>
          </tr>
        </table>
      </div>
      <div class="specs">
        <h5>Specs</h5>
        <table class="table">
          <tr>
            <td class="col-tit">Series:</td>
            <td>{{ $comic->title }}</td>
          </tr>
          <tr>
            <td class="col-tit">U.S price:</td>
            <td>{{ $comic->price }}</td>
          </tr>
          <tr>
            <td class="col-tit">On Sale Date:</td>
            <td>{{ $comic->created_at }}</td>
          </tr>
        </table>
      </div>
    </div>
  </div>

</div>
  


 


@endsection