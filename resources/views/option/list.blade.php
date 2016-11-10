<h3>
    {{$title}}
</h3>

<table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($datas as $data)
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->name}}</td>
                <td>edit</td>
                <td>delete</td>
            </tr>
        @endforeach
    </tbody>
</table>

{!! Form::open(['url' => $url, 'files' => true,  "class"=>"form-inline"]) !!}
    <div class="form-group">
        {!! Form::label('name', 'New '.$title.":") !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit("add", ['class' => 'btn btn-primary form-control']) !!}
    </div>
{!! Form::close() !!}
