<table class="table table-responsive" id="estados-table">
    <thead>
        <th>Nombre</th>
        <th colspan="3">Acciones</th>
    </thead>
    <tbody>
    @foreach($estados as $estado)
        <tr>
            <td>{!! $estado->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['estados.destroy', $estado->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                <!--
                    <a href="{!! route('estados.show', [$estado->id]) !!}" class='btn btn-default btn-sm'><i class="glyphicon glyphicon-eye-open"></i></a>
                -->
                    <a href="{!! route('estados.edit', [$estado->id]) !!}" class='btn btn-default btn-sm'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm btn-eliminar']) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
