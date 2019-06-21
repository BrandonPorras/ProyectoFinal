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
    <a href="{{ route('user.manageUser') }}" class="btn btn-success">Manage users</a>
    
    @endif
    @endforeach 

@endauth

 
    <div class="container">

        <form class="form-inline mt-5" method="GET" action="{{ route('publications.index') }}">
             <button name="search" value="Materials" class="btn btn-outline-success my-2 my-sm-0" type="submit">Materials</button>
         </form>
                                 
        
        <br>
        <br>
        @forelse($publications as $publication)
             
        @if($publication->state==1)          
        
             <div class="" style="width: 18rem;">
                 <img  class="card-img-top" src="{{ url('storage/imgPublications/' . $publication->img) }}" alt="">
                <div class="card-body text-center">
                    <h5 class="card-title text-center text-black">{{ $publication->titulo }}</h5>            
                        <a href="{{ route('publications.show', $publication) }}" class="btn btn-success">View publication</a> 
                </div>
            </div>      
            @endif       
        @empty
            <p>No aceptada</p>
           
        @endforelse
{{--    metodo de la paginacion --}}
        {!!$publications->appends(
        Request::only(['search',])
        )->render()!!}
        
    </div>
    

@endsection