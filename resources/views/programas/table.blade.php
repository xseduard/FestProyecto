<table class="table table-responsive" id="programas-table">
    <thead>
        <th>Nombre</th>
        <th>Modalidad</th>
        <th>Facultad (Área)</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($programas as $programa)
        <tr>
            <td>{!! $programa->nombre !!}</td>
            <td>{!! $programa->modalidad !!}</td>
            <td>{!! $programa->area->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['programas.destroy', $programa->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                <!--
                    <a href="{!! route('programas.show', [$programa->id]) !!}" class='btn btn-default btn-sm'><i class="glyphicon glyphicon-eye-open"></i></a>
                -->
                    <a href="{!! route('programas.edit', [$programa->id]) !!}" class='btn btn-default btn-sm'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm btn-eliminar']) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
