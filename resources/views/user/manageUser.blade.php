@extends('layouts.app')

@section('content')
<div class="">
 <table class="table table-responsive table-hover ">
    <thead>
        <tr>
            <th>Title</th>
            <th>Autor</th>
            <th>role</th>
       
        </tr>
    </thead>
    <tbody>
    <?php        
        use INTEGRATEITM\User;      
        $users= User::all();
        use INTEGRATEITM\Role;      
        $roles= Role::all();
      ?>

@auth
      @forelse($users as $user){{--forelse publication--}}
            {{-- @if(user()->role->name!='admin') --}}
                   
                    
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td class="">
                                    <p>{{ $user->email }}</p> 
                                </td>   
                                <td class="">
                                        <li>
                                            @foreach ($roles as $role)
                                            <form method="POST" action="{{route('user.updateRole',array($user->id, $role->id))}}">
                                                    @csrf
                                                    @method('PUT')                                                    
                                                    <button value='' class="btn  btn-succes mt-1 mb-1"type="submit">{{ $role->name }}</button>
                                                </form>
                                          
                                             @endforeach
                                        </li>
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