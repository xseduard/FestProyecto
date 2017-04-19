<table class="table table-responsive" id="titulos-table">
    <thead>
        <th>codigo</th>
        <th>Titulo</th>
        <th>Capitulo</th>
        <th colspan="3">Acciones</th>
    </thead>
    <tbody>
    @foreach($titulos as $titulo)
        <tr>
            <td>{!! $titulo->codigo !!}</td>
            <td>{!! $titulo->titulo !!}</td>
            <td>{!! $titulo->capitulo !!}</td>
            <td>
                {!! Form::open(['route' => ['titulos.destroy', $titulo->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                <!--
                    <a href="{!! route('titulos.show', [$titulo->id]) !!}" class='btn btn-default btn-sm'><i class="glyphicon glyphicon-eye-open"></i></a>
                -->
                    <a href="{!! route('titulos.edit', [$titulo->id]) !!}" class='btn btn-default btn-sm'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm btn-eliminar']) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
