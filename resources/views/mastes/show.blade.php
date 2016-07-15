@extends('layout')

@section('content')
    <h1>{{ $maste->title }}</h1>

    {!! link_to('mastes/', 'back', ['class' => 'btn btn-info']) !!}
    <hr/>

    <article>
        <div class="body">
            Note : {{ $maste->note }} <br>
            Printer : {{ $maste->printer->name }} <br>
            Designer : {{ $maste->designer->name }} <br>
            Country : {{ $maste->country->name }} <br>
            Repository : {{ $maste->repository->name }} <br>
            Price : {{ $maste->price }} <br>
            Number : {{ $maste->number }} <br>
            Number(opened) : {{ $maste->number_open }} <br>
            Trade : {{ $maste->trade_flag }} <br>
            Limit : {{ $maste->limit_flag }} <br>
        </div>
    </article>


    <br>
    {!! link_to(action('MastesController@edit', [$maste->id]), 'edit', ['class' => 'btn btn-primary']) !!}
    <br>
    {!! Form::open(['method' => 'DELETE', 'url' => ['mastes', $maste->id]]) !!}
        {!! Form::submit('delete', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsection
