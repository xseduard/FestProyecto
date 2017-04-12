<table class="table table-responsive" id="jurados-table">
    <thead>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Cedula</th>
        <th>Grupo Asignado</th>
        
        <th>Linea de Investigación</th>
        <th>Area Id</th>
        <th>Celular</th>
        <th>Dirección</th>
        <th>Correo</th>
        <th colspan="3">Acciones</th>
    </thead>
    <tbody>
    @foreach($jurados as $jurado)
        <tr>
            <td>{!! $jurado->nombres !!}</td>
            <td>{!! $jurado->apellidos !!}</td>
            <td>{!! $jurado->cedula !!}</td>
            <td>{!! $jurado->grupoJurado->codigo !!}</td>
           
            <td>{!! $jurado->lineaInvestigacion->nombre !!}</td>
            <td>{!! $jurado->area->nombre !!}</td>
            <td>{!! $jurado->celular !!}</td>
            <td>{!! $jurado->direccion !!}</td>
            <td>{!! $jurado->correo !!}</td>
            <td>
                {!! Form::open(['route' => ['jurados.destroy', $jurado->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                <!--
                    <a href="{!! route('jurados.show', [$jurado->id]) !!}" class='btn btn-default btn-sm'><i class="glyphicon glyphicon-eye-open"></i></a>
                -->
                    <a href="{!! route('jurados.edit', [$jurado->id]) !!}" class='btn btn-default btn-sm'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm btn-eliminar']) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
