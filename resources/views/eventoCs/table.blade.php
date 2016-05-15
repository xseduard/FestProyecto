<table class="table table-responsive" id="eventoCs-table">
    <thead>
        <th>Codigo</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Id Programa</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($eventoCs as $eventoC)
        <tr>
            <td>{!! $eventoC->codigo !!}</td>
            <td>{!! $eventoC->nombre !!}</td>
            <td>{!! $eventoC->descripcion !!}</td>
            <td>{!! $eventoC->created_at !!}</td>
            <td>{!! $eventoC->updated_at !!}</td>
            <td>{!! $eventoC->id_programa !!}</td>
            <td>
                {!! Form::open(['route' => ['eventoCs.destroy', $eventoC->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('eventoCs.show', [$eventoC->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('eventoCs.edit', [$eventoC->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>