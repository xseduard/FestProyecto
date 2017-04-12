<table class="table table-responsive" id="eventoExpos-table">
    <thead>
        <th>Grupojurado Id</th>
        <th>Nombre</th>
        <th>Direccion</th>
        <th>Informacion</th>
        <th>User Id</th>
        <th colspan="3">Acciones</th>
    </thead>
    <tbody>
    @foreach($eventoExpos as $eventoExpo)
        <tr>
            <td>{!! $eventoExpo->grupojurado_id !!}</td>
            <td>{!! $eventoExpo->nombre !!}</td>
            <td>{!! $eventoExpo->direccion !!}</td>
            <td>{!! $eventoExpo->informacion !!}</td>
            <td>{!! $eventoExpo->user_id !!}</td>
            <td>
                {!! Form::open(['route' => ['eventoExpos.destroy', $eventoExpo->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                <!--
                    <a href="{!! route('eventoExpos.show', [$eventoExpo->id]) !!}" class='btn btn-default btn-sm'><i class="glyphicon glyphicon-eye-open"></i></a>
                -->
                    <a href="{!! route('eventoExpos.edit', [$eventoExpo->id]) !!}" class='btn btn-default btn-sm'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm btn-eliminar']) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
