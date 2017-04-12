<table class="table table-responsive" id="regionals-table">
    <thead>
        <th>Nombre</th>
        <th colspan="3">Acciones</th>
    </thead>
    <tbody>
    @foreach($regionals as $regional)
        <tr>
            <td>{!! $regional->nombre !!}</td>
            <td align="right">
                {!! Form::open(['route' => ['regionals.destroy', $regional->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                <!--
                    <a href="{!! route('regionals.show', [$regional->id]) !!}" class='btn btn-default btn-sm'><i class="glyphicon glyphicon-eye-open"></i></a>
                -->
                    <a href="{!! route('regionals.edit', [$regional->id]) !!}" class='btn btn-default btn-sm'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm btn-eliminar']) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
