<table class="table table-responsive">
    <thead>
        <th>Titulo</th>
        <th>Nivel</th>
        <th>Periodo</th>
        <th>Observaciones</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th colspan="3">Acciones</th>
    </thead>
    <tbody>
    @foreach($grados as $grado)
        <tr>
            <td>{!! $grado->titulo !!}</td>
            <td>{!! $grado->nivel !!}</td>
            <td>{!! $grado->periodo !!}</td>
            <td>{!! $grado->observaciones !!}</td>
            <td>{!! $grado->created_at !!}</td>
            <td>{!! $grado->updated_at !!}</td>
            <td>
                {!! Form::open(['route' => ['grados.destroy', $grado->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('grados.show', [$grado->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('grados.edit', [$grado->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Desea eliminar este registro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>