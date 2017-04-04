<table class="table table-responsive" id="universidades-table">
    <thead>
        <th>Universidad</th>
        <th>Telefonos</th>
        <th>Rector</th>
        <th>Tipo</th>
        <th>Direccion</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($universidades as $universidades)
        <tr>
            <td>{!! $universidades->universidad !!}</td>
            <td>{!! $universidades->telefonos !!}</td>
            <td>{!! $universidades->rector !!}</td>
            <td>{!! $universidades->tipo !!}</td>
            <td>{!! $universidades->direccion !!}</td>
            <td>
                {!! Form::open(['route' => ['universidades.destroy', $universidades->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('universidades.show', [$universidades->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('universidades.edit', [$universidades->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>