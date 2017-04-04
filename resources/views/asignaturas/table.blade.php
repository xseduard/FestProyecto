<table class="table table-responsive" id="asignaturas-table">
    <thead>
        <th>Asignatura</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($asignaturas as $asignaturas)
        <tr>
            <td>{!! $asignaturas->asignatura !!}</td>
            <td>
                {!! Form::open(['route' => ['asignaturas.destroy', $asignaturas->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('asignaturas.show', [$asignaturas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('asignaturas.edit', [$asignaturas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>