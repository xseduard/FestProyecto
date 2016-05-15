<table class="table table-responsive" id="programas-table">
    <thead>
        <th>Codigo</th>
        <th>Nombre</th>
        <th>Duracion</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Deleted At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($programas as $programa)
        <tr>
            <td>{!! $programa->codigo !!}</td>
            <td>{!! $programa->nombre !!}</td>
            <td>{!! $programa->duracion !!}</td>
            <td>{!! $programa->created_at !!}</td>
            <td>{!! $programa->updated_at !!}</td>
            <td>{!! $programa->deleted_at !!}</td>
            <td>
                {!! Form::open(['route' => ['programas.destroy', $programa->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('programas.show', [$programa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('programas.edit', [$programa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>