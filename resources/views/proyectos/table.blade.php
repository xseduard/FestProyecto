<table class="table table-responsive" id="proyectos-table">
    <thead>
        <th>Regional Id</th>
        <th>Semillero Id</th>
        <th>Area Id</th>
        <th>Programa Id</th>
        <th>User Id</th>
        <th>Estado Id</th>
        <th>Linea Id</th>
        <th>Grupojurado Id</th>
        <th>Evento Expo Id</th>
        <th>Tipo</th>
        <th>Titulo</th>
        <th>Progreso Estimado</th>
        <th colspan="3">Acciones</th>
    </thead>
    <tbody>
    @foreach($proyectos as $proyecto)
        <tr>
            <td>{!! $proyecto->regional_id !!}</td>
            <td>{!! $proyecto->semillero_id !!}</td>
            <td>{!! $proyecto->area_id !!}</td>
            <td>{!! $proyecto->programa_id !!}</td>
            <td>{!! $proyecto->user_id !!}</td>
            <td>{!! $proyecto->estado_id !!}</td>
            <td>{!! $proyecto->linea_id !!}</td>
            <td>{!! $proyecto->grupojurado_id !!}</td>
            <td>{!! $proyecto->evento_expo_id !!}</td>
            <td>{!! $proyecto->tipo !!}</td>
            <td>{!! $proyecto->titulo !!}</td>
            <td>{!! $proyecto->progreso_estimado !!}</td>
            <td>
                {!! Form::open(['route' => ['proyectos.destroy', $proyecto->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                <!--
                    <a href="{!! route('proyectos.show', [$proyecto->id]) !!}" class='btn btn-default btn-sm'><i class="glyphicon glyphicon-eye-open"></i></a>
                -->
                    <a href="{!! route('proyectos.edit', [$proyecto->id]) !!}" class='btn btn-default btn-sm'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm btn-eliminar']) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
