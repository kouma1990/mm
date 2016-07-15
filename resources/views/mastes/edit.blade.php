@extends('layout')

@section('content')
    <h1>Edit: {{ $maste->title }}</h1>

     {!! link_to('mastes/'.$maste->id, 'back', ['class' => 'btn btn-info']) !!}
    <hr/>

    @include('errors.form_errors')

    {!! Form::model($maste, ['method' => 'PATCH', 'url' => ['mastes', $maste->id], 'files' => true]) !!}
        @include('mastes.form', ['designers' => $designers,
                                 'printers' => $printers,
                                 'countries' => $countries,
                                 'repositories' => $repositories,
                                 'submitButton' => 'Edit Maste'])
    {!! Form::close() !!}


@stop
