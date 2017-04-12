<table class="table table-responsive" id="areas-table">
    <thead>
        <th>Nombre</th>
        <th>Decano</th>
        <th colspan="3" class="pull-right">Acciones</th>
    </thead>
    <tbody>
    @foreach($areas as $area)
        <tr>
            <td>{!! $area->nombre !!}</td>
            <td>{!! $area->decano !!}</td>
            <td align="right">
                {!! Form::open(['route' => ['areas.destroy', $area->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                <!--
                    <a href="{!! route('areas.show', [$area->id]) !!}" class='btn btn-default btn-sm'><i class="glyphicon glyphicon-eye-open"></i></a>
                -->
                    <a href="{!! route('areas.edit', [$area->id]) !!}" class='btn btn-default btn-sm'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => '', 'class' => 'btn btn-danger btn-sm btn-eliminar']) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
