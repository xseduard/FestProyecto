<table class="table table-responsive" id="rSuscribes-table">
    <thead>
        <th>Id Lineai</th>
        <th>Id Proyecto</th>
        <th>Id Programa</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Deleted At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($rSuscribes as $rSuscribe)
        <tr>
            <td>{!! $rSuscribe->id_lineai !!}</td>
            <td>{!! $rSuscribe->id_proyecto !!}</td>
            <td>{!! $rSuscribe->id_programa !!}</td>
            <td>{!! $rSuscribe->created_at !!}</td>
            <td>{!! $rSuscribe->updated_at !!}</td>
            <td>{!! $rSuscribe->deleted_at !!}</td>
            <td>
                {!! Form::open(['route' => ['rSuscribes.destroy', $rSuscribe->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('rSuscribes.show', [$rSuscribe->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('rSuscribes.edit', [$rSuscribe->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>