<table class="table table-responsive" id="rCoordinas-table">
    <thead>
        <th>Id Academico</th>
        <th>Id Grupo Investigacion</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Deleted At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($rCoordinas as $rCoordina)
        <tr>
            <td>{!! $rCoordina->id_academico !!}</td>
            <td>{!! $rCoordina->id_grupo_investigacion !!}</td>
            <td>{!! $rCoordina->created_at !!}</td>
            <td>{!! $rCoordina->updated_at !!}</td>
            <td>{!! $rCoordina->deleted_at !!}</td>
            <td>
                {!! Form::open(['route' => ['rCoordinas.destroy', $rCoordina->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('rCoordinas.show', [$rCoordina->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('rCoordinas.edit', [$rCoordina->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>