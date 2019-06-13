@extends('layouts.app')

@section('content')

<table class="table table-responsive table-hover">
    <thead>
        <tr>
            <th>Title</th>
            <th>Autor</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $publication->titulo }}</td>
            <td>Doe</td>
            <td>[email protected]</td>
        </tr>
        
    </tbody>
</table>

@endsection