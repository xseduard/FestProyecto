<table class="table table-responsive">
    <thead>
        <th>Nombres</th>
        <th>Sexo</th>
        <th colspan="3">Acciones</th>
    </thead>
    <tbody>
    @foreach($academicos as $academico)
        <tr>
            <td>{!! $academico->nombres !!}</td>
            <td>{!! $academico->sexo !!}</td>
            <td>
                {!! Form::open(['route' => ['academicos.destroy', $academico->idacademico], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('academicos.show', [$academico->idacademico]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('academicos.edit', [$academico->idacademico]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'id' => 'btn-eliminar']) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>