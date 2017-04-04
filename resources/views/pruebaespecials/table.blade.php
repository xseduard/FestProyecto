
                  <table id="example2" class="table table-responsive table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Textouno</th>
                        <th>Texto Dos</th>
                        <th>Texto Tres</th>
                        <th>Numero Uno</th>
                        <th>Numero Dos</th>
                        <th>Fecha</th>
                        <th>Fecha creacíon</th>
                        <th>Fecha actualización</th>
                        <th colspan="3">Acciones</th>
                      </tr>
                    </thead>
                    <tbody>


    @foreach($pruebaespecials as $pruebaespecial)
        <tr>
            <td>{!! $pruebaespecial->textouno !!}</td>
            <td>{!! $pruebaespecial->texto_dos !!}</td>
            <td>{!! $pruebaespecial->texto_tres !!}</td>
            <td>{!! $pruebaespecial->numero_uno !!}</td>
            <td>{!! $pruebaespecial->numero_dos !!}</td>
            <td>{!! $pruebaespecial->fecha !!}</td>
            <td>{!! $pruebaespecial->created_at !!}</td>
            <td>{!! $pruebaespecial->updated_at !!}</td>
            <td>
                {!! Form::open(['route' => ['pruebaespecials.destroy', $pruebaespecial->id], 'method' => 'delete', 'id' => 'formEliminar']) !!}
                <div class='btn-group'>  
                    <a href="{!! route('pruebaespecials.edit', [$pruebaespecial->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'id' => 'btn-eliminar']) !!}
                      
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>