@extends('layouts.app')

@section('title', 'Publication')

@section('content')    
    
    @component('components.form_publication', [
        'publication' => $publication,
        'action' => route('publications.update', $publication->id),
        'imagen_publication' => $publication->img,
        'user' => $user=null
    ])
        @slot('method')
            @method('PUT')
        @endslot
        
        @slot('button_text')
            @lang('Update')
        @endslot
    @endcomponent

@endsection