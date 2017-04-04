<table class="table table-responsive" id="proyectoAulas-table">
    <thead>
        <th>Titulo</th>
        <th>Periodo</th>
        <th>Nivel</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Deleted At</th>
        <th>Id Academico</th>
        <th>Id Programa</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($proyectoAulas as $proyectoAula)
        <tr>
            <td>{!! $proyectoAula->titulo !!}</td>
            <td>{!! $proyectoAula->periodo !!}</td>
            <td>{!! $proyectoAula->nivel !!}</td>
            <td>{!! $proyectoAula->created_at !!}</td>
            <td>{!! $proyectoAula->updated_at !!}</td>
            <td>{!! $proyectoAula->deleted_at !!}</td>
            <td>{!! $proyectoAula->id_academico !!}</td>
            <td>{!! $proyectoAula->id_programa !!}</td>
            <td>
                {!! Form::open(['route' => ['proyectoAulas.destroy', $proyectoAula->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('proyectoAulas.show', [$proyectoAula->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('proyectoAulas.edit', [$proyectoAula->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>