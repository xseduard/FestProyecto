<table class="table table-responsive" id="ponencias-table">
    <thead>
        <th>Periodo</th>
        <th>Fecha</th>
        <th>País</th>
        <th>Ciudad</th>
        <th>Institucion</th>
        <th>Paginaw</th>
        <th>Idprograma</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($ponencias as $ponencia)
        <tr>
            <td>{!! $ponencia->periodo !!}</td>
            <td>{!! $ponencia->fecha !!}</td>
            <td>{!! $ponencia->país !!}</td>
            <td>{!! $ponencia->ciudad !!}</td>
            <td>{!! $ponencia->institucion !!}</td>
            <td>{!! $ponencia->paginaw !!}</td>
            <td>{!! $ponencia->idprograma !!}</td>
            <td>
                {!! Form::open(['route' => ['ponencias.destroy', $ponencia->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('ponencias.show', [$ponencia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('ponencias.edit', [$ponencia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>