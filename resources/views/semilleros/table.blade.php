<table class="table table-responsive" id="semilleros-table">
    <thead>
        <th>Nombre</th>
        <th>Sigla</th>
        <th>Fecha Vinculacion</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Deleted At</th>
        <th>Id Programa</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($semilleros as $semillero)
        <tr>
            <td>{!! $semillero->nombre !!}</td>
            <td>{!! $semillero->sigla !!}</td>
            <td>{!! $semillero->fecha_vinculacion !!}</td>
            <td>{!! $semillero->created_at !!}</td>
            <td>{!! $semillero->updated_at !!}</td>
            <td>{!! $semillero->deleted_at !!}</td>
            <td>{!! $semillero->id_programa !!}</td>
            <td>
                {!! Form::open(['route' => ['semilleros.destroy', $semillero->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('semilleros.show', [$semillero->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('semilleros.edit', [$semillero->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>