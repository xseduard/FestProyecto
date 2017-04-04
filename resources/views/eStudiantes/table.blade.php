<table class="table table-responsive" id="eStudiantes-table">
    <thead>
        <th>Nombre Completo</th>
        <th>Identificacion</th>
        <th>Correo</th>
        <th>Telefono</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($eStudiantes as $eStudiantes)
        <tr>
            <td>{!! $eStudiantes->nombre_completo !!}</td>
            <td>{!! $eStudiantes->identificacion !!}</td>
            <td>{!! $eStudiantes->correo !!}</td>
            <td>{!! $eStudiantes->telefono !!}</td>
            <td>
                {!! Form::open(['route' => ['eStudiantes.destroy', $eStudiantes->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('eStudiantes.show', [$eStudiantes->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('eStudiantes.edit', [$eStudiantes->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>