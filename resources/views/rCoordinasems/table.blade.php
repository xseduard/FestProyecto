<table class="table table-responsive" id="rCoordinasems-table">
    <thead>
        <th>Id Semillero</th>
        <th>Id Academico</th>
        <th>Periodo</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Deleted At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($rCoordinasems as $rCoordinasem)
        <tr>
            <td>{!! $rCoordinasem->id_semillero !!}</td>
            <td>{!! $rCoordinasem->id_academico !!}</td>
            <td>{!! $rCoordinasem->periodo !!}</td>
            <td>{!! $rCoordinasem->created_at !!}</td>
            <td>{!! $rCoordinasem->updated_at !!}</td>
            <td>{!! $rCoordinasem->deleted_at !!}</td>
            <td>
                {!! Form::open(['route' => ['rCoordinasems.destroy', $rCoordinasem->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('rCoordinasems.show', [$rCoordinasem->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('rCoordinasems.edit', [$rCoordinasem->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>