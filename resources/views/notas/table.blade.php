<table class="table table-responsive" id="notas-table">
    <thead>
        <th>Tipo</th>
        <th>Proyecto Id</th>
        <th>Nota</th>
        <th colspan="3">Acciones</th>
    </thead>
    <tbody>
    @foreach($notas as $nota)
        <tr>
            <td>{!! $nota->tipo !!}</td>
            <td>{!! $nota->proyecto_id !!}</td>
            <td>{!! $nota->nota !!}</td>
            <td>
                {!! Form::open(['route' => ['notas.destroy', $nota->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                <!--
                    <a href="{!! route('notas.show', [$nota->id]) !!}" class='btn btn-default btn-sm'><i class="glyphicon glyphicon-eye-open"></i></a>
                -->
                    <a href="{!! route('notas.edit', [$nota->id]) !!}" class='btn btn-default btn-sm'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm btn-eliminar']) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
