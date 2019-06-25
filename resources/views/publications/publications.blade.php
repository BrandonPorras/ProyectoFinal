@extends('layouts.app')

@section('content')

<div class="container-fluid ">
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


    

        <form class="form-inline " method="GET" action="{{ route('publications.index') }}">
             <button name="search" value="Materials" class="btn btn-outline-success my-2 my-sm-0" type="submit">Materials</button>
         </form>
                                 
        
        <br>
        <br>
        <div class="container row  flex justify-content-end">
        @forelse($publications as $publication)
             
        @if($publication->state==1)   
        
        <div class="card  py-1 my-3 ml-3 col-5 bg-warning border-warning" >
            <div class="row no-gutters">
              <div class="col-md-4  d-flex justify-content-center">
                <img  class="card-img rounded-circle" src="{{ url('storage/imgPublications/' . $publication->img) }}" alt="">
              </div>
              <div class="col-md-8">
                <div class="card-body justify-content-center">
                    <h5 class="card-title text-center text-black">{{ $publication->titulo }}</h5>            
                   <a href="{{ route('publications.show', $publication) }}" class="btn btn-dark ">View publication</a> 
                 </div>
              </div>
            </div>
          </div>
        
             {{-- <div class="" style="width: 18rem;">
                 <img  class="card-img-top" src="{{ url('storage/imgPublications/' . $publication->img) }}" alt="">
                <div class="card-body text-center">
                    <h5 class="card-title text-center text-black">{{ $publication->titulo }}</h5>            
                        <a href="{{ route('publications.show', $publication) }}" class="btn btn-success">View publication</a> 
                </div>
            </div>       --}}
            @endif       
        @empty
            <p>No aceptada</p>
           
        @endforelse
    </div>
{{--    metodo de la paginacion --}}
        {!!$publications->appends(
        Request::only(['search',])
        )->render()!!}
        
    </div>
    

@endsection