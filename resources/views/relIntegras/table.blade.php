<table class="table table-responsive" id="relIntegras-table">
    <thead>
        <th>Proyecto Id</th>
        <th>Estudiante Id</th>
        <th>User Id</th>
        <th>Boo Ponente</th>
        <th colspan="3">Acciones</th>
    </thead>
    <tbody>
    @foreach($relIntegras as $relIntegra)
        <tr>
            <td>{!! $relIntegra->proyecto_id !!}</td>
            <td>{!! $relIntegra->estudiante_id !!}</td>
            <td>{!! $relIntegra->user_id !!}</td>
            <td>{!! $relIntegra->boo_ponente !!}</td>
            <td>
                {!! Form::open(['route' => ['relIntegras.destroy', $relIntegra->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                <!--
                    <a href="{!! route('relIntegras.show', [$relIntegra->id]) !!}" class='btn btn-default btn-sm'><i class="glyphicon glyphicon-eye-open"></i></a>
                -->
                    <a href="{!! route('relIntegras.edit', [$relIntegra->id]) !!}" class='btn btn-default btn-sm'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm btn-eliminar']) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
