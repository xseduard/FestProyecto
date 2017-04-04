<table class="table table-responsive" id="ponencias-table">
    <thead>
        <th>Titulo</th>
        <th>Periodo</th>
        <th>Fecha</th>
        <th>Pais</th>
        <th>Ciudad</th>
        <th>Institucion</th>
        <th>Pagina</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Id Programa</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($ponencias as $ponencia)
        <tr>
            <td>{!! $ponencia->titulo !!}</td>
            <td>{!! $ponencia->periodo !!}</td>
            <td>{!! $ponencia->fecha !!}</td>
            <td>{!! $ponencia->pais !!}</td>
            <td>{!! $ponencia->ciudad !!}</td>
            <td>{!! $ponencia->institucion !!}</td>
            <td>{!! $ponencia->pagina !!}</td>
            <td>{!! $ponencia->created_at !!}</td>
            <td>{!! $ponencia->updated_at !!}</td>
            <td>{!! $ponencia->id_programa !!}</td>
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