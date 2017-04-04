<table class="table table-responsive" id="nivelformacions-table">
    <thead>
        <th>Nivel</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($nivelformacions as $nivelformacion)
        <tr>
            <td>{!! $nivelformacion->nivel !!}</td>
            <td>
                {!! Form::open(['route' => ['nivelformacions.destroy', $nivelformacion->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('nivelformacions.show', [$nivelformacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('nivelformacions.edit', [$nivelformacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>