@extends('layouts.app')

@section('content')

<div class="container-fluid d-flex justify-content-center">
<form method="POST" action="{{ route('user.update', $user->id) }}">
    @csrf
    <!--se utiliza el metodo put para enviar datos
        mediante esta directiva-->

    @method('PUT')
    <div class="form-group">
         <label for="">@lang('name')</label>   
         <input class="form-control"  type="text" name="name" id="name" value={{$user->name}}>
     </div>

     <div class="form-group">
        <label for="">@lang('name')</label>
        <input class="form-control"  type="email" name="email" id="email" value={{$user->email}}>
     </div>

     <div class="form-group">
        <label for="">@lang('Password')</label>
        <input class="form-control" type="password" name="password" >
      </div>

    <button class="btn btn-success" type="submit">@lang('content.update')</button>

</form>
</div>


@endsection