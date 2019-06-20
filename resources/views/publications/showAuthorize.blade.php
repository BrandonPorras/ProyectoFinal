@extends('layouts.app')

@section('content')
<div class="">
 <table class="table table-responsive table-hover ">
    <thead>
        <tr>
            <th>Title</th>
            <th>Autor</th>
            <th>Image</th>
            
            <th>Authorize or Deny</th>
        </tr>
    </thead>
    <tbody>
    <?php 
        use INTEGRATEITM\Publication;
        use INTEGRATEITM\User;
        $publications= Publication::all();
        $users= User::all();
      ?>
    @forelse($publications as $publication){{--forelse publication--}}
        @if($publication->state!=1)
         @forelse($users as $user)
            @if($publication->user_id==$user->id)
<<<<<<< HEAD
        <tr>
            <td>{{ $publication->titulo }}</td>
            <td>{{ $user->name }}</td>
            <td><img  class="card-img-top" src="{{ url('storage/imgPublications/' . $publication->img) }}" alt="" ></td>
           {{--forelse publication--}}
     
                    <td>
                        <p>{{ $publication->text }}</p>                 
                        <a href="#" class="btn btn-success">Authorize</a>
                        <a href="#" class="btn btn-danger">Deny</a>
                    </td>
    
                @endif
           
            </tr>
            @empty
            <p>No hay nada</p>
    @endforelse{{--endforelse user--}}
=======
                   <tr>
                    <td>{{ $publication->titulo }}</td>
                    <td>{{ $user->name }}</td>
                    <td><img  class="card-img-top" src="{{ url('storage/imgPublications/' . $publication->img) }}" alt="" ></td>
                {{--forelse publication--}}

                        <td class="">
                                <p>{{ $publication->text }}</p> 
                            </td>      
>>>>>>> master

                            <td>
                                <form method="POST" action="{{ route('publications.allow',$publication->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <button class="btn  btn-succes"type="submit">@lang('Athorize')</button>
                                </form>
                            </td>
                            
                            <td>
                                <form method="POST" action="{{ route('publications.destroy', $publication) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn  btn-danger"type="submit">@lang('Deny')</button>
                                </form>
                            </td>
                            
                      @endif
                    </tr>
                    @empty
                    <p>No hay nada</p>
              @endforelse{{--endforelse user--}}
              @endif
             @empty
                <p>No hay nada</p>
          
    @endforelse{{--endforelse publication--}}
    </tbody>
</table> 
</div>
@endsection