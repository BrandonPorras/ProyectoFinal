@extends('layouts.app')

@section('content')

@auth
{{-- si esta autenticado ejecuta lo que este aqui adentro --}}
    {{-- logeado
    <br>
    {{Auth::user()->name}}
    
{{-- para extraer el role del usuario --}}
     @foreach (Auth::user()->roles as $role)
    @if($role->name=='admin')
    
    <a href="{{ route('publications.showAuthorize') }}" class="btn btn-success">Authorize or deny publications</a>
    
    @endif
    @endforeach 

@endauth

 
    <div class="container">
        
        <br>
        <br>
        @forelse($publications as $publication)
             
            
             <div class="" style="width: 18rem;">
                 <img  class="card-img-top" src="{{ url('storage/imgPublications/' . $publication->img) }}" alt="">
                <div class="card-body text-center">
                    <h5 class="card-title text-center text-black">{{ $publication->titulo }}</h5>            
                        <a href="{{ route('publications.show', $publication) }}" class="btn btn-success">View publication</a> 
                </div>
            </div>             
        @empty
            <p>No hay nada</p>
        @endforelse
    </div>
    

@endsection