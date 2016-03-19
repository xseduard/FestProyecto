<table class="table table-responsive">
    <thead>
        <th>Nombre</th>
        <th>Sexo</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th colspan="3">Acciones</th>
    </thead>
    <tbody>
    @foreach($academicos as $academico)
        <tr>
            <td>{!! $academico->nombre !!}</td>
            <td>{!! $academico->sexo !!}</td>
            <td>{!! $academico->created_at !!}</td>
            <td>{!! $academico->updated_at !!}</td>
            <td>
                {!! Form::open(['route' => ['academicos.destroy', $academico->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('academicos.show', [$academico->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('academicos.edit', [$academico->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Desea eliminar este registro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>