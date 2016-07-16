@extends('layout')

@section('content')

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
