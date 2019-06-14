@extends('layouts.app')

@section('content')

<table class="table table-responsive table-hover">
    <thead>
        <tr>
            <th>Title</th>
            <th>Image</th>
            <th>Name</th>
        </tr>
    </thead>
    <tbody>
    @forelse($publications as $publication)
        <tr>
            <td>{{ $publication->titulo }}</td>
            <td><img  class="card-img-top" src="{{ url('storage/imgPublications/' . $publication->img) }}" alt=""></td>
            <td>{{ $user->name }}</td>
        </tr>
    @endforelse
    </tbody>
</table>

@endsection