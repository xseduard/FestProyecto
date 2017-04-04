<table class="table table-responsive" id="grupoInvestigacions-table">
    <thead>
        <th>Nombre</th>
        <th>Gruplac</th>
        <th>Categoria</th>
        <th>Fecha Creacion</th>
        <th>Reconocido</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Deleted At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($grupoInvestigacions as $grupoInvestigacion)
        <tr>
            <td>{!! $grupoInvestigacion->nombre !!}</td>
            <td>{!! $grupoInvestigacion->gruplac !!}</td>
            <td>{!! $grupoInvestigacion->categoria !!}</td>
            <td>{!! $grupoInvestigacion->fecha_creacion !!}</td>
            <td>{!! $grupoInvestigacion->reconocido !!}</td>
            <td>{!! $grupoInvestigacion->created_at !!}</td>
            <td>{!! $grupoInvestigacion->updated_at !!}</td>
            <td>{!! $grupoInvestigacion->deleted_at !!}</td>
            <td>
                {!! Form::open(['route' => ['grupoInvestigacions.destroy', $grupoInvestigacion->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('grupoInvestigacions.show', [$grupoInvestigacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('grupoInvestigacions.edit', [$grupoInvestigacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>