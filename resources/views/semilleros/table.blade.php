<table class="table table-responsive" id="semilleros-table">
    <thead>
        <th>Nombre</th>
        <th>Director</th>
        <th>Coordinador</th>
        <th>Estudiante Lider</th>
        <th>Regional</th>
        <th>Grupo de Investigación</th>
        
        <th colspan="3">Acciones</th>
    </thead>
    <tbody>
    @foreach($semilleros as $semillero)
        <tr>
            <td>{!! $semillero->nombre !!}</td>
            <td>{!! $semillero->directorUser->nombres.' '.$semillero->directorUser->apellidos !!}</td>
            <td>{!! $semillero->coordinadorUser->nombres.' '.$semillero->coordinadorUser->apellidos  !!}</td>
            <td>{!! $semillero->estudiante->nombres.' '.$semillero->estudiante->apellidos  !!}</td>
            <td>{!! $semillero->regional->nombre !!}</td>
            <td>{!! $semillero->grupoinvestigacion->nombre !!}</td>
            
            <td>
                {!! Form::open(['route' => ['semilleros.destroy', $semillero->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                <!--
                    <a href="{!! route('semilleros.show', [$semillero->id]) !!}" class='btn btn-default btn-sm'><i class="glyphicon glyphicon-eye-open"></i></a>
                -->
                    <a href="{!! route('semilleros.edit', [$semillero->id]) !!}" class='btn btn-default btn-sm'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm btn-eliminar']) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
