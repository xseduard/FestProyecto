<table class="table table-responsive">
    <thead>
        <th>Texto</th>
        <th>Numero</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th colspan="3">Acciones</th>
    </thead>
    <tbody>
    @foreach($marios as $mario)
        <tr>
            <td>{!! $mario->texto !!}</td>
            <td>{!! $mario->numero !!}</td>
            <td>{!! $mario->created_at !!}</td>
            <td>{!! $mario->updated_at !!}</td>
            <td>
                {!! Form::open(['route' => ['marios.destroy', $mario->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('marios.show', [$mario->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('marios.edit', [$mario->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Desea eliminar este registro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>