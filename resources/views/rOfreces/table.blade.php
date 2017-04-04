<table class="table table-responsive" id="rOfreces-table">
    <thead>
        <th>Id Ponencia</th>
        <th>Id Academico</th>
        <th>Fecha</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Deleted At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($rOfreces as $rOfrece)
        <tr>
            <td>{!! $rOfrece->id_ponencia !!}</td>
            <td>{!! $rOfrece->id_academico !!}</td>
            <td>{!! $rOfrece->fecha !!}</td>
            <td>{!! $rOfrece->created_at !!}</td>
            <td>{!! $rOfrece->updated_at !!}</td>
            <td>{!! $rOfrece->deleted_at !!}</td>
            <td>
                {!! Form::open(['route' => ['rOfreces.destroy', $rOfrece->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('rOfreces.show', [$rOfrece->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('rOfreces.edit', [$rOfrece->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>