<table class="table table-responsive" id="areainvestigacions-table">
    <thead>
        <th>Area</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($areainvestigacions as $areainvestigacion)
        <tr>
            <td>{!! $areainvestigacion->area !!}</td>
            <td>
                {!! Form::open(['route' => ['areainvestigacions.destroy', $areainvestigacion->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('areainvestigacions.show', [$areainvestigacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('areainvestigacions.edit', [$areainvestigacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>