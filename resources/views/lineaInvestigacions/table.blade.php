<table class="table table-responsive" id="lineaInvestigacions-table">
    <thead>
        <th>Nombre</th>
        <th colspan="3">Acciones</th>
    </thead>
    <tbody>
    @foreach($lineaInvestigacions as $lineaInvestigacion)
        <tr>
            <td>{!! $lineaInvestigacion->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['lineaInvestigacions.destroy', $lineaInvestigacion->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                <!--
                    <a href="{!! route('lineaInvestigacions.show', [$lineaInvestigacion->id]) !!}" class='btn btn-default btn-sm'><i class="glyphicon glyphicon-eye-open"></i></a>
                -->
                    <a href="{!! route('lineaInvestigacions.edit', [$lineaInvestigacion->id]) !!}" class='btn btn-default btn-sm'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm btn-eliminar']) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
