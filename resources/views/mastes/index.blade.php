@extends('layout')

@section('content')
    <h1>Maste</h1>

    <hr/>

    {!! link_to('mastes/create', 'New maste', ['class' => 'btn btn-info']) !!}

    @foreach($mastes as $maste)
        <article>
            <h2>
                <a href="{{ url('mastes', $maste->id) }}">
                    {{ $maste->title }}
                </a>
            </h2>
            <div class="body">
                {{ $maste->note }}
            </div>
        </article>
    @endforeach
@endsection
