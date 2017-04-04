<table class="table table-responsive" id="semilleros-table">
    <thead>
        <th>Nombre</th>
        <th>Facultad</th>
        <th>Grupo De Investigacion</th>
        <th>Docente Asesor</th>
        <th>Estudiante Lider</th>
        <th>Programa</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($semilleros as $semilleros)
        <tr>
            <td>{!! $semilleros->nombre !!}</td>
            <td>{!! $semilleros->facultad !!}</td>
            <td>{!! $semilleros->grupo_de_investigacion !!}</td>
            <td>{!! $semilleros->docente_asesor !!}</td>
            <td>{!! $semilleros->estudiante_lider !!}</td>
            <td>{!! $semilleros->programa !!}</td>
            <td>
                {!! Form::open(['route' => ['semilleros.destroy', $semilleros->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('semilleros.show', [$semilleros->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('semilleros.edit', [$semilleros->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>