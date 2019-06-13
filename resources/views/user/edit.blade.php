@extends('layouts.app')

@section('content')

<div class="container">
<form method="POST" action="{{ route('user.update', $user->id) }}">
    @csrf
    <!--se utiliza el metodo put para enviar datos
        mediante esta directiva-->

    @method('PUT')
    <div class="form-group">
         <label for="">@lang('content.name')</label>   
         <input type="text" name="name" id="name" value={{$user->name}}>
     </div>

     <div class="form-group">
        <label for="">@lang('content.name')</label>
        <input type="email" name="email" id="email" value={{$user->email}}>
     </div>

     <div class="form-group">
        <label for="">@lang('content.Password')</label>
        <input type="password" name="password" >
      </div>

    <button class="btn btn-danger" type="submit">@lang('content.update')</button>

</form>
</div>


@endsection