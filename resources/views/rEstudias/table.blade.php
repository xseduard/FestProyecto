<table class="table table-responsive" id="rEstudias-table">
    <thead>
        <th>Id Academico</th>
        <th>Id Programa</th>
        <th>Fecha Matricula</th>
        <th>Fecha Finalizacion</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Deleted At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($rEstudias as $rEstudia)
        <tr>
            <td>{!! $rEstudia->id_academico !!}</td>
            <td>{!! $rEstudia->id_programa !!}</td>
            <td>{!! $rEstudia->fecha_matricula !!}</td>
            <td>{!! $rEstudia->fecha_finalizacion !!}</td>
            <td>{!! $rEstudia->created_at !!}</td>
            <td>{!! $rEstudia->updated_at !!}</td>
            <td>{!! $rEstudia->deleted_at !!}</td>
            <td>
                {!! Form::open(['route' => ['rEstudias.destroy', $rEstudia->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('rEstudias.show', [$rEstudia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('rEstudias.edit', [$rEstudia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>