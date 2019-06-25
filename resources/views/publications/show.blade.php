@extends('layouts.app')

@section('title', $publication->titulo)

@section('content')

<article>

<div class="d-flex justify-content-center align-content-center mx-auto">
<!-- Section: Blog v.1 -->
<section class="my-5">
   <!-- Grid row -->
  <div class="row  ">

    <!-- Grid column -->
    <div class="col-lg-5">

      <!-- Featured image -->
      <div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
        <img class="img-fluid" src="{{ url('storage/imgPublications/' . $publication->img) }}" alt="Sample image">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-7 py-0 my-0">

      <!-- Category -->
      <a href="#!" class="green-text">
        <h6 class="font-weight-bold mb-3">{{ $publication->categoria }}</h6>
      </a>
      <!-- Post title -->
      <h3 class="font-weight-bold mb-3"><strong>{{ $publication->titulo }}</strong></h3>
      <!-- Excerpt -->
      <div class=" py-0 my-0 mx-auto">
      <p>{{ $publication->text }}</p>
      <!-- Post data -->
     </div>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

  </section>
<!-- Section: Blog v.1 -->
          
</div>
</article>

@endsection