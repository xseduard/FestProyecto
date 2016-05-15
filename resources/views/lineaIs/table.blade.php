<table class="table table-responsive" id="lineaIs-table">
    <thead>
        <th>Descripcion</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($lineaIs as $lineaI)
        <tr>
            <td>{!! $lineaI->descripcion !!}</td>
            <td>{!! $lineaI->created_at !!}</td>
            <td>{!! $lineaI->updated_at !!}</td>
            <td>
                {!! Form::open(['route' => ['lineaIs.destroy', $lineaI->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('lineaIs.show', [$lineaI->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('lineaIs.edit', [$lineaI->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>