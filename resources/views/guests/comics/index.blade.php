@extends('layouts.app')

@section('content')
<div class="carousel">
      <h2>COMICS & GRAPHIC NOVELS</h2>

      <div class="comic_cards">
            @foreach ($comics as $comic)
                  <div class="comic_card">
                        <a href="{{ route('admin.comics.show', ['comic' => $comic->slug]) }}">
                              <img src="{{ asset('storage/'  . $comic->cover) }}" alt="" srcset="">
                        </a>
                        <h4>{{ $comic->title }}</h4>
                        <p>
                              @if ($comic->available == "yes")
                              AVAILABLE NOW
                              @else
                              NOT AVAILABLE
                              @endif
                              
                        </p>
                  </div>

            @endforeach
      </div>
          

</div>





@endsection