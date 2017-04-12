<table class="table table-responsive" id="estudiantes-table">
    <thead>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Cedula</th>
        <th>Area</th>
        <th>Programa</th>
        <th>Regional</th>
        <th>Genero</th>
        <th>Pensum</th>
        <th>Semestre</th>
        <!--<th>Correo Principal</th>
        <th>Nacionalidad</th>-->
        <th colspan="3">Acciones</th>
    </thead>
    <tbody>
    @foreach($estudiantes as $estudiante)
        <tr>
            <td>{!! $estudiante->nombres !!}</td>
            <td>{!! $estudiante->apellidos !!}</td>
            <td>{!! $estudiante->cedula !!}</td>
            <td>{!! $estudiante->area->nombre !!}</td>
            <td>{!! $estudiante->programa->nombre !!}</td>
            <td>{!! $estudiante->regional->nombre !!}</td>
            <td>{!! $estudiante->genero !!}</td>
            <td>{!! $estudiante->pensum !!}</td>
            <td>{!! $estudiante->semestre !!}</td>
            <!--<td>{!! $estudiante->correo_principal !!}</td>
            <td>{!! $estudiante->nacionalidad !!}</td>-->
            <td>
                {!! Form::open(['route' => ['estudiantes.destroy', $estudiante->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                
                    <a href="{!! route('estudiantes.show', [$estudiante->id]) !!}" class='btn btn-default btn-sm'><i class="glyphicon glyphicon-eye-open"></i></a>
                
                    <a href="{!! route('estudiantes.edit', [$estudiante->id]) !!}" class='btn btn-default btn-sm'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm btn-eliminar']) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
