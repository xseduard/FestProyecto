<table class="table table-responsive">
    <thead>
        <th>Gato</th>
        <th>Perro</th>
        <th>Numero</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th colspan="3">Acciones</th>
    </thead>
    <tbody>
    @foreach($unopruebas as $unoprueba)
        <tr>
            <td>{!! $unoprueba->gato !!}</td>
            <td>{!! $unoprueba->perro !!}</td>
            <td>{!! $unoprueba->numero !!}</td>
            <td>{!! $unoprueba->created_at !!}</td>
            <td>{!! $unoprueba->updated_at !!}</td>
            <td>
                {!! Form::open(['route' => ['unopruebas.destroy', $unoprueba->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('unopruebas.show', [$unoprueba->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('unopruebas.edit', [$unoprueba->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Desea eliminar este registro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>