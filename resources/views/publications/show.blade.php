@extends('layouts.app')

@section('title', $publication->titulo)

@section('content')

<article>
 <div class="container">
     <div class="card bg-info" style="width: 18rem;">
        <img  class="card-img-top" src="{{ url('storage/imgPublications/' . publication->img) }}" alt="">
        <div>
            <h1>{{ publication->titulo }}</h1>
            
            
          
            <p class="text-center text-white">@lang('Name'): {{ publication->txt }}</p>
          
           
          
                @csrf
                @method('DELETE')
               
            </form>
        </div>
    </div>
</div>
</article>


@endsection