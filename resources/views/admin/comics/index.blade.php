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
                    <a class="btn btn-primary p-1" href="{{ route('admin.comics.show', ['comic' => $comic->id]) }}">View</a>
                    <a class="btn btn-primary p-1" href="#">Edit</a>
                    <a class="btn btn-primary p-1" href="#">Delete</a>
                </td>

            </tr>
                
            @endforeach
           
        </tbody>
</table>
@endsection