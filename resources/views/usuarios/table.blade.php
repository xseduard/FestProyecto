<table class="table table-responsive" id="usuarios-table">
    <thead>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Cédula</th>
        <th>Rol</th>
        <th>Correo</th>
        <th colspan="3">Acciones</th>
    </thead>
    <tbody>
    @foreach($usuarios as $usuario)
        <tr>
            <td>{!! $usuario->nombres !!}</td>
            <td>{!! $usuario->apellidos !!}</td>
            <td>{!! $usuario->cedula !!}</td>
            <td>{!! $usuario->role !!}</td>
            <td>{!! $usuario->email !!}</td>
          
            <td>
                 {!! Form::open(['route' => ['usuarios.destroy', $usuario->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                
                    {{-- <a href="{!! route('usuarios.show', [$usuario->id]) !!}" class='btn btn-default btn-sm'><i class="glyphicon glyphicon-eye-open"></i></a> --}}
                
                    <a href="{!! route('usuarios.edit', [$usuario->id]) !!}" class='btn btn-default btn-sm'><i class="glyphicon glyphicon-edit"></i> Editar</a>
                    {{-- {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm btn-eliminar']) !!} --}}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
