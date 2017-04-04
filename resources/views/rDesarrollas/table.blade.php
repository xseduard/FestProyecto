<table class="table table-responsive" id="rDesarrollas-table">
    <thead>
        <th>Id Academico</th>
        <th>Id Trabajogrado</th>
        <th>Periodo</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Deleted At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($rDesarrollas as $rDesarrolla)
        <tr>
            <td>{!! $rDesarrolla->id_academico !!}</td>
            <td>{!! $rDesarrolla->id_trabajogrado !!}</td>
            <td>{!! $rDesarrolla->periodo !!}</td>
            <td>{!! $rDesarrolla->created_at !!}</td>
            <td>{!! $rDesarrolla->updated_at !!}</td>
            <td>{!! $rDesarrolla->deleted_at !!}</td>
            <td>
                {!! Form::open(['route' => ['rDesarrollas.destroy', $rDesarrolla->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('rDesarrollas.show', [$rDesarrolla->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('rDesarrollas.edit', [$rDesarrolla->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>