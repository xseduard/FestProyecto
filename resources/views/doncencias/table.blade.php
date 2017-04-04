<table class="table table-responsive" id="doncencias-table">
    <thead>
        <th>Cedula</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Facultad</th>
        <th>Cargo</th>
        <th>Especialidad</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($doncencias as $doncencia)
        <tr>
            <td>{!! $doncencia->Cedula !!}</td>
            <td>{!! $doncencia->Nombre !!}</td>
            <td>{!! $doncencia->Apellidos !!}</td>
            <td>{!! $doncencia->Direccion !!}</td>
            <td>{!! $doncencia->Telefono !!}</td>
            <td>{!! $doncencia->Facultad !!}</td>
            <td>{!! $doncencia->Cargo !!}</td>
            <td>{!! $doncencia->Especialidad !!}</td>
            <td>
                {!! Form::open(['route' => ['doncencias.destroy', $doncencia->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('doncencias.show', [$doncencia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('doncencias.edit', [$doncencia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>