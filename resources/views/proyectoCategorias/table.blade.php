<table class="table table-responsive" id="proyectoCategorias-table">
    <thead>
        <th>Categoria</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($proyectoCategorias as $proyectoCategoria)
        <tr>
            <td>{!! $proyectoCategoria->categoria !!}</td>
            <td>
                {!! Form::open(['route' => ['proyectoCategorias.destroy', $proyectoCategoria->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('proyectoCategorias.show', [$proyectoCategoria->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('proyectoCategorias.edit', [$proyectoCategoria->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>