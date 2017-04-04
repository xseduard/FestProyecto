<table class="table table-responsive" id="rArbitras-table">
    <thead>
        <th>Id Academico</th>
        <th>Id Trabajogrado</th>
        <th>Fecha</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Deleted At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($rArbitras as $rArbitra)
        <tr>
            <td>{!! $rArbitra->id_academico !!}</td>
            <td>{!! $rArbitra->id_trabajogrado !!}</td>
            <td>{!! $rArbitra->fecha !!}</td>
            <td>{!! $rArbitra->created_at !!}</td>
            <td>{!! $rArbitra->updated_at !!}</td>
            <td>{!! $rArbitra->deleted_at !!}</td>
            <td>
                {!! Form::open(['route' => ['rArbitras.destroy', $rArbitra->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('rArbitras.show', [$rArbitra->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('rArbitras.edit', [$rArbitra->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>