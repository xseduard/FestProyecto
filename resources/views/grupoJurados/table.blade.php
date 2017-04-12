<table class="table table-responsive" id="grupoJurados-table">
    <thead>
        <th>Codigo</th>
        <th>Regional</th>
        <th>Observaciones</th>
        <th colspan="3">Acciones</th>
    </thead>
    <tbody>
    @foreach($grupoJurados as $grupoJurado)
        <tr>
            <td>{!! $grupoJurado->codigo !!}</td>
            <td>{!! $grupoJurado->regional->nombre !!}</td>
            <td>{!! $grupoJurado->observaciones !!}</td>
            <td>
                {!! Form::open(['route' => ['grupoJurados.destroy', $grupoJurado->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                <!--
                    <a href="{!! route('grupoJurados.show', [$grupoJurado->id]) !!}" class='btn btn-default btn-sm'><i class="glyphicon glyphicon-eye-open"></i></a>
                -->
                    <a href="{!! route('grupoJurados.edit', [$grupoJurado->id]) !!}" class='btn btn-default btn-sm'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm btn-eliminar']) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
