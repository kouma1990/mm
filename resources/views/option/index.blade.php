@extends('layout')

@section('content')

    <ul class="nav nav-tabs">
    	<li class="active"><a href="#Designer" data-toggle="tab">Designer</a></li>
    	<li><a href="#Printer" data-toggle="tab">Printer</a></li>
    	<li><a href="#Country" data-toggle="tab">Country</a></li>
    	<li><a href="#Repository" data-toggle="tab">Repository</a></li>
    </ul>



    <div class="tab-content">
        <div class="tab-pane active" id="Designer">
            @include("option.list", ["title"=>"Designer", "datas"=>$designers, "url"=>"designer"])
        </div>
        <div class="tab-pane" id="Printer">
            @include("option.list", ["title"=>"Printer", "datas"=>$printers, "url"=>"printer"])
        </div>
        <div class="tab-pane" id="Country">
            @include("option.list", ["title"=>"Country", "datas"=>$countries, "url"=>"country"])
        </div>
        <div class="tab-pane" id="Repository">
            @include("option.list", ["title"=>"Repository", "datas"=>$repositories, "url"=>"repository"])
        </div>
    </div>
@endsection
