<table class="table table-responsive" id="areas-table">
    <thead>
        <th>Nombre</th>
        <th>Decano</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($areas as $area)
        <tr>
            <td>{!! $area->nombre !!}</td>
            <td>{!! $area->decano !!}</td>
            <td>
                {!! Form::open(['route' => ['areas.destroy', $area->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('areas.show', [$area->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('areas.edit', [$area->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
