@extends('layouts.dashboard')

@section('content')
<h1>All Comics for Admin</h1>

<table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Slug</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
            <tr>
                <td scope="row">{{ $comic->id }}</td>
                <td>{{ $comic->title }}</td>
                <td>{{ $comic->slug }}</td>
                <td>
                    {{-- view --}}
                    <a class="btn btn-primary p-1" href="{{ route('admin.comics.show', ['comic' => $comic->slug]) }}">View</a>

                    {{-- edit --}}
                    <a class="btn btn-primary p-1" href="{{route('admin.comics.edit', ['comic' => $comic->slug])}}">Edit</a>

                    {{-- delete --}}
                    <button type="button" class="btn btn-danger p-1 m-1" data-toggle="modal" data-target="#destroy-{{$comic->slug}}">
                    Delete
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