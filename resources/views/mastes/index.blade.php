@extends('layout')

@section('content')
    <table class="table">
    	<thead>
    		<tr>
                <th>Title</th>
                <th>note</th>
            </tr>
    	</thead>
    	<tbody>
        @foreach($mastes as $maste)
            <tr>
                <td><h3><a href="{{ url('mastes', $maste->id) }}">{{ $maste->title }}</a></h3></td>
                <td>{{ $maste->note }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
