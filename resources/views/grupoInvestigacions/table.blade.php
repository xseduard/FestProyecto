<table class="table table-responsive" id="grupoInvestigacions-table">
    <thead>
        <th>Nombre</th>
        <th>Año Formacion</th>
        <th>Gran Area</th>
        <th>Area Conocimiento</th>
        <th>Cedula Primer Lider</th>
        <th>Nombre Primer Lider</th>
        <th>Cedula Segundo Lider</th>
        <th>Nombre Segundo Lider</th>
        <th>Gruplac</th>
        <th colspan="3">Acciones</th>
    </thead>
    <tbody>
    @foreach($grupoInvestigacions as $grupoInvestigacion)
        <tr>
            <td>{!! $grupoInvestigacion->nombre !!}</td>
            <td>{!! $grupoInvestigacion->año_formacion !!}</td>
            <td>{!! $grupoInvestigacion->gran_area !!}</td>
            <td>{!! $grupoInvestigacion->area_conocimiento !!}</td>
            <td>{!! $grupoInvestigacion->cedula_primer_lider !!}</td>
            <td>{!! $grupoInvestigacion->nombre_primer_lider !!}</td>
            <td>{!! $grupoInvestigacion->cedula_segundo_lider !!}</td>
            <td>{!! $grupoInvestigacion->nombre_segundo_lider !!}</td>
            <td>{!! $grupoInvestigacion->grupLAC !!}</td>
            <td>
                {!! Form::open(['route' => ['grupoInvestigacions.destroy', $grupoInvestigacion->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                <!--
                    <a href="{!! route('grupoInvestigacions.show', [$grupoInvestigacion->id]) !!}" class='btn btn-default btn-sm'><i class="glyphicon glyphicon-eye-open"></i></a>
                -->
                    <a href="{!! route('grupoInvestigacions.edit', [$grupoInvestigacion->id]) !!}" class='btn btn-default btn-sm'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm btn-eliminar']) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
