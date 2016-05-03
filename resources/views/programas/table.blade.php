<table class="table table-responsive">
    <thead>
        <th>Codigo</th>
        <th>Nombre</th>
        <th>Duracion</th>
        <th colspan="3">Acciones</th>
    </thead>
    <tbody>
    @foreach($programas as $programa)
        <tr>
            <td>{!! $programa->idprograma !!}</td>
            <td>{!! $programa->nombre !!}</td>
            <td>{!! $programa->duracion !!}</td>
            <td>
                {!! Form::open(['route' => ['programas.destroy', $programa->idprograma], 'method' => 'delete', 'id' => 'formEliminar']) !!}
                <div class='btn-group'>
                    <a href="{!! route('programas.show', [$programa->idprograma]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('programas.edit', [$programa->idprograma]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'id' => 'btn-eliminar']) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>