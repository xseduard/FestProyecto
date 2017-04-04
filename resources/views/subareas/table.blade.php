<table class="table table-responsive" id="subareas-table">
    <thead>
        <th>Subarea</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($subareas as $subarea)
        <tr>
            <td>{!! $subarea->subarea !!}</td>
            <td>
                {!! Form::open(['route' => ['subareas.destroy', $subarea->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('subareas.show', [$subarea->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('subareas.edit', [$subarea->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>