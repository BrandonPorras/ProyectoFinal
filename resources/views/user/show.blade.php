@extends('layouts.app')

@section('title', $user->name)

@section('content')

<article>
 <div class="container">

            <h1>{{$user->name }}</h1>
            
            
            <p class="text-center text-black">@lang('name'): {{ $user->name }}</p>
            <p class="text-center text-black">@lang('email'): {{ $user->email }}</p><br>
            <a class="text-center text-black" href="{{ route('publications.create', Auth::user()) }}">@lang('Create New Post')  </a>
            
            <form action="{{ route('user.destroy', $user) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>
            </form> 
        </div>
    </div>
</div>
</article>


@endsection