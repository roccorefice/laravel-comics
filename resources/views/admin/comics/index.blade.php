@extends('layouts.dashboard')

@section('content')
<div class="jumbotron">
    <h1 class="display-6">All Comics for Admin</h1>
    <a class="btn btn-primary btn-lg" href="{{ route('admin.comics.create') }}">Create a Comic</a>
</div>


<table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr>
            <th>ID</th>
            <th>Cover</th>
            <th>Title</th>
            <th>Slug</th>
            <th>Author</th>
            <th>Artist</th>
            <th>Descriptioon</th>
            <th>Price</th>
            <th>Available</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
            <tr>
                {{-- ID --}}
                <td scope="row">{{ $comic->id }}</td>
                {{-- COVER --}}
                <td>
                    @if ($comic->cover)
                        <img width="50" src="{{ asset('storage/'  . $comic->cover) }}" alt="" srcset="">
                    @endif
                    {{-- <img width="50" src="{{ $comic->cover }}" alt=""> --}}
                </td>
                {{-- TITLE --}}
                <td>{{ $comic->title }}</td>
                {{-- SLUG --}}
                <td>{{ $comic->slug }}</td>
                {{-- AUTHOR --}}
                <td>{{ $comic->author }}</td>
                {{-- ARTIST --}}
                <td>{{ $comic->artist }}</td>
                {{-- DESCRIPTION --}}
                <td>{{ $comic->description }}</td>
                {{-- PRICE --}}
                <td>{{ $comic->price }}</td>
                {{-- ACTIONS  --}}
                <td>
                    @if ($comic->available == "yes")
                        yes
                    @else
                        no
                    @endif
                </td>
                <td>
                    {{-- view --}}
                    <a class="btn btn-primary p-1" href="{{ route('admin.comics.show', ['comic' => $comic->slug]) }}"><i class="fas fa-eye"></i></a>

                    {{-- edit --}}
                    <a class="btn btn-primary p-1" href="{{route('admin.comics.edit', ['comic' => $comic->slug])}}"><i class="fas fa-edit"></i></a>

                    {{-- delete --}}
                    <button type="button" class="btn btn-danger p-1 m-1" data-toggle="modal" data-target="#destroy-{{$comic->slug}}">
                        <i class="fas fa-trash"></i>
                    </button>

                    {{-- modale per eliminare comic --}}
                    <div class="modal fade" id="destroy-{{$comic->slug}}" tabindex="-1" role="dialog" aria-labelledby="comic-destroy-{{$comic->slug}}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="comic-destroy-{{$comic->slug}}">Delete comic: "{{$comic->title}}"?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Are you sure?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                    <form action="{{route('admin.comics.destroy', ['comic' => $comic->slug])}}" method="comic">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            Yes
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </td>
            </tr>
                
            @endforeach
           
        </tbody>
</table>
@endsection