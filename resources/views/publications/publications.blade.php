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
    <div class="container my-2 justify-content-between">
    <a href="{{ route('publications.showAuthorize') }}" class="btn btn-primary">Authorize or deny publications</a>
    <a href="{{ route('user.manageUser') }}" class="btn btn-success">Manage users</a>
   </div>
    @endif
 
    @endforeach 

@endauth



<div class="container-fluid " >
       <div class="row ">
    <div class="categorias col-3  mx-0 ">                
            <img class= "card " width="100%" src="{{ asset('img/OG9KN00.jpg') }}" alt=""  >  
            <div class="card-img-overlay  d-flex justify-content-center align-content-center ">             
                <form class="form-inline " method="GET" action="{{ route('publications.index') }}">
                    <button name="search" value="Food" class="text-light  btn btn-outline-dark my-2 my-sm-0 border-0" type="submit"><h1>@lang('content.Food')</h1></button>
                </form>
            </div>
    </div>
     
      <div class="col-3  mx-0 "> 
                  
            <img class= "card" width="100%" src="{{ asset('img/Catergoria2.png') }}" alt=""  >  
            
            <div class="card-img-overlay   d-flex justify-content-center align-content-center">             
                <form class="form-inline " method="GET" action="{{ route('publications.index') }}">
                    <button name="search" value="Materials" class="text-light  btn btn-outline-dark my-2 my-sm-0 border-0" type="submit"><h1>@lang('content.Materials')</h1></button>
                </form>
            </div>
      </div>
    
    <div class="col-3  mx-0 ">                
            <img class= "card " width="100%" src="{{ asset('img/Categoria4.png') }}" alt=""  >  
            <div class="card-img-overlay  d-flex justify-content-center align-content-center ">             
                <form class="form-inline " method="GET" action="{{ route('publications.index') }}">
                    <button name="search" value="Academic Recomendations" class="text-light  btn btn-outline-dark my-2 my-sm-0 border-0" type="submit"><h3>@lang('content.Academic Recomendations')</h3></button>
                </form>
            </div>
    </div>
        
    <div class="col-3  mx-0 ">                
            <img class= "card " width="100%" src="{{ asset('img/image1913.png') }}" alt=""  >  
            <div class="card-img-overlay  d-flex justify-content-center align-content-center ">             
                <form class="form-inline " method="GET" action="{{ route('publications.index') }}">
                    <button name="search" value="Others" class="text-light  btn btn-outline-dark my-2 my-sm-0 border-0" type="submit"><h1>@lang('content.Others')</h1></button>
                </form>
            </div>
    </div>      
      
           
       </div>

     
                                 
        
        
        <div class="container row  flex justify-content-end mx-0 px-0">
        @forelse($publications as $publication)
             
        @if($publication->state==1)   
        
        <div class="card  py-1 my-3 ml-3 col-5 bg-warning border-warning" >
            <div class="row no-gutters">
              <div class="col-md-4  d-flex justify-content-center">
                <img  class="card-img rounded-circle" src="{{ url('storage/imgPublications/' . $publication->img) }}" alt="">
              </div>
              <div class="col-md-8">
                <div class="card-body justify-content-center">
                    <h5 class="card-title text-center text-secondary">{{ $publication->titulo }}</h5>            
                   <a href="{{ route('publications.show', $publication) }}" class="btn btn-outline-success ">@lang('content.View publication')</a> 
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