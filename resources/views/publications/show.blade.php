@extends('layouts.app')

@section('title', $publication->titulo)

@section('content')

<article>
 <div class="container">
     <div class="card bg-info" style="width: 18rem;">
        <img  class="card-img-top" src="{{ url('storage/imgPublications/' . $publication->img) }}" alt="">
        <div>
            <h1>{{ $publication->titulo }}</h1>     
            <p class="text-center text-white">@lang('Name'): {{ $publication->txt }}</p>

            <form method="POST" action="{{ route('publications.destroy', $publication) }}">
                @csrf
                @method('DELETE')
                <p class="text-center"> <button class="btn  btn-danger"type="submit">@lang('Eliminar publicacion')</button></p> 
            </form>
            <p class="text-center"><a class="text-dark" href="{{ route('publications.edit', $publication) }}">@lang('Edit')</a></p> 
          
          
            
        </div>
    </div>
</div>
</article>


@endsection