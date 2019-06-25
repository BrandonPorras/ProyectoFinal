<?php        
use INTEGRATEITM\User;      
$users= User::all();
use INTEGRATEITM\Role;      
$roles= Role::all();
?>

@extends('layouts.app')

@section('content')
<div class="container d-flex ml-5 pl-5 ">
 <table class="table table-responsive table-hover ">
    <thead>
        <tr>
            <th>Title</th>
            <th>Autor</th>
            <th>role</th>
       
        </tr>
    </thead>
    <tbody>
@auth
      @forelse($users as $user){{--forelse publication--}}
                          <tr>
                                <td>{{ $user->name }}</td>
                                <td class="">
                                    <p>{{ $user->email }}</p> 
                                </td>   
                                <td class="row py-2">
                                       
                                            @foreach ($roles as $role)
                                            <form method="POST" action="{{route('user.updateRole',array($user->id, $role->id))}}">
                                                    @csrf
                                                    @method('PUT')                                                    
                                                    <button value='' class="mx-2 btn  btn-outline-success mt-1 mb-1"type="submit">{{ $role->name }}</button>
                                                </form>
                                          
                                             @endforeach
                                        
                                </td>   
                            </tr>
                {{-- @endif --}}
          @empty
                <p>No hay nada</p>
         @endforelse{{--endforelse publication--}}       
     @endauth
    </tbody>
</table> 
</div>
@endsection