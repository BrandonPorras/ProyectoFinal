@extends('layouts.app')

@section('title', $user->name)

@section('content')

  

@auth

<a href="{{ route('publications.create', $user) }}"class="card-link">@lang('Create New Post') </a>
@foreach (Auth::user()->roles as $role)
{{ $role->name}}
@endforeach -              
@endauth

<article>
 <div class="container-fluid content-align-center">

            
            
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">{{$user->name }}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">@lang('name'): {{ $user->name }}</h6>
                  <h6 class="card-subtitle mb-2 text-muted">@lang('email'): {{ $user->email }}</h6>
                  <a href="{{ route('publications.create', $user) }}"class="card-link">@lang('Create New Post') </a>
                  <div class="card-body">
                  <form action="{{ route('user.destroy', $user) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form> 
                <a class="btn" href="{{route('user.edit',$user->id,)}}">@lang('content.edit') </a>
                
            </div>
                </div>
              </div>
</div>
</article>


@endsection