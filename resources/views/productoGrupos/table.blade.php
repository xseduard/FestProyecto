<table class="table table-responsive" id="productoGrupos-table">
    <thead>
        <th>Nombre</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Deleted At</th>
        <th>Id Grupo Investigacion</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($productoGrupos as $productoGrupo)
        <tr>
            <td>{!! $productoGrupo->nombre !!}</td>
            <td>{!! $productoGrupo->created_at !!}</td>
            <td>{!! $productoGrupo->updated_at !!}</td>
            <td>{!! $productoGrupo->deleted_at !!}</td>
            <td>{!! $productoGrupo->id_grupo_investigacion !!}</td>
            <td>
                {!! Form::open(['route' => ['productoGrupos.destroy', $productoGrupo->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('productoGrupos.show', [$productoGrupo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('productoGrupos.edit', [$productoGrupo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>