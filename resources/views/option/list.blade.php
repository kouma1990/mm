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
                {!! Form::open(['method' => 'PATCH', 'url' => [$url, $data->id]]) !!}
                    <td><input class="form-control" name="name" type="text" value="{{$data->name}}" id="name"></td>
                    <td>{!! Form::submit('edit', ['class' => 'btn btn-success']) !!}</td>
                {!! Form::close() !!}
                <td>
                    {!! Form::open(['method' => 'DELETE', 'url' => [$url, $data->id]]) !!}
                        {!! Form::submit('delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{!! Form::open(['url' => $url, 'files' => true,  "class"=>"form-inline"]) !!}
    <div class="form-group">
        {!! Form::label('name', 'New '.$title.":") !!}
        <input class="form-control" name="name" type="text" value="" id="name">
    </div>

    <div class="form-group">
        {!! Form::submit("add", ['class' => 'btn btn-primary form-control']) !!}
    </div>
{!! Form::close() !!}
