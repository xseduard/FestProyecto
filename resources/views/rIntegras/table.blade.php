<table class="table table-responsive" id="rIntegras-table">
    <thead>
        <th>Id Academico</th>
        <th>Id Semillero</th>
        <th>Periodo</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Deleted At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($rIntegras as $rIntegra)
        <tr>
            <td>{!! $rIntegra->id_academico !!}</td>
            <td>{!! $rIntegra->id_semillero !!}</td>
            <td>{!! $rIntegra->periodo !!}</td>
            <td>{!! $rIntegra->created_at !!}</td>
            <td>{!! $rIntegra->updated_at !!}</td>
            <td>{!! $rIntegra->deleted_at !!}</td>
            <td>
                {!! Form::open(['route' => ['rIntegras.destroy', $rIntegra->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('rIntegras.show', [$rIntegra->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('rIntegras.edit', [$rIntegra->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>