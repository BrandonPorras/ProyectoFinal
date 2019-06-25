@extends('layouts.app')

@section('title', $user->name)

@section('content')

  <?php 
        use INTEGRATEITM\Publication;      
        $publications= Publication::all();     
      ?>

<div class="container row  flex justify-content-center ml-4 px-0">
<article>
 <div class="container-fluid content-align-center">            
            <div class="card" style="width: 18rem;">
               <div class="card-body">
                    <h4 class="card-title">{{$user->name }}</h4>
                    <h6 class="card-subtitle mb-2 text-muted">@lang('name'): {{ $user->name }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">@lang('email'): {{ $user->email }}</h6>
                    
                    <a href="{{ route('publications.create', $user) }}"class="card-link">@lang('Create New Post') </a>
                    
                    <div class="card-body">
                        <div class="d-flex justify-content-around">
                            <a class="btn btn-primary mb-2" href="{{route('user.edit',$user->id,)}}">Edit</a>
                            <form action="{{ route('user.destroy', $user) }}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <button class="btn btn-danger" type="submit">Delete</button>
                            </form> 
                        </div>  
                    </div>
                </div>
             </div>
</div>
</article>
</div>
<div class="container row  flex justify-content-end mx-0 px-0">
@forelse($publications as $publication){{--forelse publication--}}
       
       
            @if($publication->user_id==$user->id)

            <div class="card  py-1 my-3 ml-1 col-5 bg-warning border-warning" >
            <div class="row no-gutters">
              <div class="col-md-4  d-flex justify-content-center">
                <img  class="card-img rounded-circle" src="{{ url('storage/imgPublications/' . $publication->img) }}" alt="">
              </div>
              <div class="col-md-8">
                <div class="card-body justify-content-center">
                    <h5 class="card-title text-center text-secondary">{{ $publication->titulo }}</h5>            
                   <a href="{{ route('publications.show', $publication) }}" class="btn btn-outline-success ">View publication</a> 
                 </div>
              </div>
            </div>
            <div class="d-flex justify-content-end">
              <a class="btn btn-primary" href="{{route('publications.edit',$publication->id,)}}">Edit</a>
              <form action="{{ route('publications.destroy', $publication) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
              </form> 
            </div>
          </div>
                
             
              
            @endif
            @empty
              <p>No hay nada</p>
         
         
       
@endforelse{{--endforelse publication--}}
</div>
@endsection