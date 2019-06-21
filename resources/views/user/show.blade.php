@extends('layouts.app')

@section('title', $user->name)

@section('content')

  <?php 
        use INTEGRATEITM\Publication;
        use INTEGRATEITM\User;
        $publications= Publication::all();
        $users= User::all();
      ?>

{{-- @auth


@foreach (Auth::user()->roles as $role)
{{ $role->name}}
@endforeach -              
@endauth --}}

<article>
 <div class="container-fluid content-align-center">

            
            
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">{{$user->name }}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">@lang('name'): {{ $user->name }}</h6>
                  <h6 class="card-subtitle mb-2 text-muted">@lang('email'): {{ $user->email }}</h6>
                  
                  <a href="{{ route('publications.create', $user) }}"class="card-link">@lang('Create New Post') </a>
                  
                  <div class="card-body">
                  
                
                
            </div>
                </div>
              </div>
</div>
</article>

@forelse($publications as $publication){{--forelse publication--}}
        @if($publication->state!=1)
         @forelse($users as $user)
            @if($publication->user_id==$user->id)

                <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ url('storage/imgPublications/' . $publication->img) }}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{ $publication->titulo }}</h5>
                  <p class="card-text">{{ $publication->text }}</p>
                </div>
                
                <div class="d-flex justify-content-around">
                  <a class="btn btn-primary" href="{{route('user.edit',$user->id,)}}">Edit</a>
                  <form action="{{ route('user.destroy', $user) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                  </form> 
                </div>
              </div>
            @endif
            @empty
              <p>No hay nada</p>
          @endforelse{{--endforelse user--}}
         @endif
        @empty
         <p>No hay nada</p>
          
@endforelse{{--endforelse publication--}}

@endsection