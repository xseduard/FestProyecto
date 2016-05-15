<table class="table table-responsive" id="proyectos-table">
    <thead>
        <th>Descripcion</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Deleted At</th>
        <th>Id Director</th>
        <th>Id Semillero</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($proyectos as $proyecto)
        <tr>
            <td>{!! $proyecto->descripcion !!}</td>
            <td>{!! $proyecto->created_at !!}</td>
            <td>{!! $proyecto->updated_at !!}</td>
            <td>{!! $proyecto->deleted_at !!}</td>
            <td>{!! $proyecto->id_director !!}</td>
            <td>{!! $proyecto->id_semillero !!}</td>
            <td>
                {!! Form::open(['route' => ['proyectos.destroy', $proyecto->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('proyectos.show', [$proyecto->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('proyectos.edit', [$proyecto->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>