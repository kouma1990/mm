<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('image', 'Image:')!!}
    {!! Form::file('image'); !!}
</div>

<div class="form-group">
    {!! Form::label('designer', 'Designer:') !!}
    {!! Form::select('designer_id', $designers); !!}
</div>

<div class="form-group">
    {!! Form::label('printer', 'Printer:') !!}
    {!! Form::select('printer_id', $printers); !!}
</div>

<div class="form-group">
    {!! Form::label('country', 'Countory:') !!}
    {!! Form::select('country_id', $countries); !!}
</div>

<div class="form-group">
    {!! Form::label('repository', 'Repository:') !!}
    {!! Form::select('repository_id', $repositories); !!}
</div>

<div class="form-group">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::text('price', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('number', 'Number:') !!}
    {!! Form::text('number', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('number_open', 'Number(opened):') !!}
    {!! Form::text('number_open', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('trade_flag', 'Trade:') !!}
    {!! Form::hidden('trade_flag', 0) !!}
    {!! Form::checkbox('trade_flag') !!}
</div>

<div class="form-group">
    {!! Form::label('limit_flag', 'Limit:') !!}
    {!! Form::hidden('limit_flag', 0) !!}
    {!! Form::checkbox('limit_flag') !!}
</div>

<div class="form-group">
    {!! Form::label('note', 'Note:') !!}
    {!! Form::textarea('note', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButton, ['class' => 'btn btn-primary form-control']) !!}
</div>
