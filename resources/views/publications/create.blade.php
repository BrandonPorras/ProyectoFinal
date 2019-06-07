@extends('layouts.app')

@section('content')

      
    
    @component('components.form_publication', [
        'publication' => null,
        'action' => route('publications.store'),
        'imagen_publication' => 'image-not-found.png',
        'user' => $user
    ])
        @slot('method')
            @method('POST')
        @endslot
        
        @slot('button_text')
            @lang('Save')
        @endslot
    @endcomponent

@endsection