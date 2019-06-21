@extends('layouts.app')

@section('title', $publication->titulo)

@section('content')

<article>

{{-- <div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="{{ url('storage/imgPublications/' . $publication->img) }}" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{ $publication->titulo }}</h5>
        <p class="card-text">{{ $publication->text }}</p>
        
      </div>
    </div>
  </div>
</div> --}}
          

<div class="card mb-3">
  <img src="{{ url('storage/imgPublications/' . $publication->img) }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{ $publication->titulo }}</h5>
    <p class="card-text">{{ $publication->text }}</p>
  </div>
</div>

</article>


@endsection