@foreach($proyectoInvestigacions as $proyectoInvestigacion)

<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Titulo: {!! $proyectoInvestigacion->titulo !!}</h3>                   
        </div><!-- /.box-header -->
        <div class="box-body">
        
 

<table class="table table-responsive" id="proyectos-table">
    <th>Departamento</th>
        <th>Universidad</th>
        <th>Semillero</th>
        <th>Ponente</th>
        <th>Categoria</th>

    <tr>
            <td>{!! $proyectoInvestigacion->Nodo->nodo!!}</td>
            <td>{!! $proyectoInvestigacion->Universidad->universidad !!}</td>
            <td>{!! $proyectoInvestigacion->Semillero->nombre !!}</td>
            <td>{!! $proyectoInvestigacion->EStudiantes->nombre_completo !!}</td>
            <td>
                @if($proyectoInvestigacion->categoria==1)
                    Propuesta de Investigación
                @elseif($proyectoInvestigacion->categoria==2)
                    Investigación en Curso
                @else
                    Investigación Terminada
                @endif
            </td>

    </tr>
</table>

<p class="card-text">
    <div class="form-group">
    {!! Form::label('introduccion', 'Introduccion:') !!}
    <p>{!! $proyectoInvestigacion->introduccion !!}</p>
</div>
</p>
{!! Form::open(['route' => ['proyectoInvestigacions.destroy', $proyectoInvestigacion->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('proyectoInvestigacions.show', [$proyectoInvestigacion->id]) !!}" class='btn btn-primary'><i class="glyphicon glyphicon-eye-open"></i> Ver mas </a>
                    <a href="{!! route('proyectoInvestigacions.edit', [$proyectoInvestigacion->id]) !!}" class='btn btn-default'><i class="glyphicon glyphicon-edit"></i> Editar</a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i> Eliminar', ['type' => 'submit', 'class' => 'btn btn-danger', 'onclick' => "return confirm('Esta seguro?')"]) !!}
                </div>
                {!! Form::close() !!}

   
        </div>
      </div>
    </div>
</div>




            
@endforeach
    

