@extends('layout')

@section('content')
    <h1>Add a New Maste</h1>

    {!! link_to('mastes/', 'back', ['class' => 'btn btn-info']) !!}
    <hr/>

    @include('errors.form_errors')

    {!! Form::open(['url' => 'mastes', 'files' => true]) !!}
        @include('mastes.form', ['designers' => $designers,
                                 'printers' => $printers,
                                 'countries' => $countries,
                                 'repositories' => $repositories,
                                 'submitButton' => 'Add Maste'])
    {!! Form::close() !!}


@endsection
