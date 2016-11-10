@extends('layout')

@section('content')


    @include("option.list", ["title"=>"Designer", "datas"=>$designers, "url"=>"designer"])

    <br><br><hr>

    @include("option.list", ["title"=>"Printer", "datas"=>$printers, "url"=>"printer"])

    <br><br><hr>

    @include("option.list", ["title"=>"Country", "datas"=>$countries, "url"=>"country"])

    <br><br><hr>

    @include("option.list", ["title"=>"Repository", "datas"=>$repositories, "url"=>"repository"])

    <br><br>
@endsection
