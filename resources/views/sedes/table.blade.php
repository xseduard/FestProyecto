<table class="table table-responsive" id="sedes-table">
    <thead>
        <th>Nombre</th>
        <th>Dirección</th>
        <th>Teléfono</th>
        <th>Municipio</th>
        <th>Regional</th>
        <th>Información</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($sedes as $sede)
        <tr>
            <td>{!! $sede->nombre !!}</td>
            <td>{!! $sede->direccion !!}</td>
            <td>{!! $sede->telefono !!}</td>
            <td>{!! $sede->municipio->nombre !!}</td>
            <td>{!! $sede->regional->nombre !!}</td>
            <td>{!! $sede->info !!}</td>
            <td>
                {!! Form::open(['route' => ['sedes.destroy', $sede->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <!--
                    <a href="{!! route('sedes.show', [$sede->id]) !!}" class='btn btn-default btn-sm'><i class="glyphicon glyphicon-eye-open"></i></a> 
                    -->
                    <a href="{!! route('sedes.edit', [$sede->id]) !!}" class='btn btn-default btn-sm'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm btn-eliminar']) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
