<table class="table table-responsive" id="trabajoGrados-table">
    <thead>
        <th>Titulo</th>
        <th>Nivel</th>
        <th>Periodo</th>
        <th>Observaciones</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Deleted At</th>
        <th>Id Programa</th>
        <th>Id Director</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($trabajoGrados as $trabajoGrado)
        <tr>
            <td>{!! $trabajoGrado->titulo !!}</td>
            <td>{!! $trabajoGrado->nivel !!}</td>
            <td>{!! $trabajoGrado->periodo !!}</td>
            <td>{!! $trabajoGrado->observaciones !!}</td>
            <td>{!! $trabajoGrado->created_at !!}</td>
            <td>{!! $trabajoGrado->updated_at !!}</td>
            <td>{!! $trabajoGrado->deleted_at !!}</td>
            <td>{!! $trabajoGrado->id_programa !!}</td>
            <td>{!! $trabajoGrado->id_director !!}</td>
            <td>
                {!! Form::open(['route' => ['trabajoGrados.destroy', $trabajoGrado->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('trabajoGrados.show', [$trabajoGrado->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('trabajoGrados.edit', [$trabajoGrado->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>