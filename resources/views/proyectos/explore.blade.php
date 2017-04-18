@foreach($proyectos as $proyecto)
<div class="col-md-12 col-sm-12 mb-50 wow fadeInUp">
    <h3 class="mt-0 mb-5">{!! $proyecto->titulo !!}</h3>
</div>
<div class="col-md-4 col-sm-12 mb-50 wow fadeInUp">
                  
    <div class="post-prev-img popup-gallery">
      <a href="elementary/img/item2_proyecto.jpg"><img src="elementary/img/item2_proyecto.jpg" alt="img"></a>
    </div>
    <div class="sale-label-cont">
      <span class="sale-label label-danger bg-white font-poppins"><strong>{!! $proyecto->created_at->format(' j F '); !!}</strong></span>
    </div> 
    <div class="post-prev-info ">{!! $proyecto->area->nombre !!}<span class="slash-divider">/</span>{!! $proyecto->programa->nombre !!}
        </div>
    <div class=""> 
        <!-- <small>&nbsp; Sin <span class="display-none-767">Valoraciones</span> </small> -->
        <span class="shop-fes-stars-cont">
          <i class="fa fa-star-o"></i>
          <i class="fa fa-star-o"></i>
          <i class="fa fa-star-o"></i>
          <i class="fa fa-star-o"></i>
          <i class="fa fa-star-o"></i>
        </span>
      </div>                                       
    </div>
<div class="col-md-8 col-sm-12 wow fadeInUp">         

      <h4 class="">Descripción</h4>
      <div class="mb-40" align="justify">{!! substr($proyecto->descripcion, 0, 650), '...' !!}</div>

      <div class="skillbar clearfix " data-percent="{!! $proyecto->progreso_estimado !!}%">
        <div class="skillbar-title">Progreso Estimado</div>
        <div class="skillbar-bar bg-purple" style="width: 100%;"></div>
        <div class="skill-bar-percent">{!! $proyecto->progreso_estimado !!}%</div>
      </div>

</div>
<div class="col-md-12 wow fadeInUp">

<div class="tabs-6">
    <ul class="nav nav-tabs bootstrap-tabs mb-0">
    <li class="active"><a href="#tab_comentarios{!! $proyecto->id !!}" class="a-inv font-poppins" data-toggle="tab" aria-expanded="false"><span class="icon  icon_chat"></span> Comentarios</a></li>
      <li class=""><a href="#tab_especificaciones{!! $proyecto->id !!}" class="a-inv font-poppins" data-toggle="tab" aria-expanded="true"><span class="icon  icon_tag"></span> Especificaciones</a></li>
      <li class=""><a href="#tab_estado{!! $proyecto->id !!}" class="a-inv font-poppins" data-toggle="tab" aria-expanded="false"><i class="glyphicon glyphicon-stats"></i> Estado</a></li>                  
      <li class=""><a href="#tab_acciones{!! $proyecto->id !!}" class="a-inv font-poppins" data-toggle="tab" aria-expanded="false"><span class="icon icon_cogs"></span> Acciones</a></li>
    </ul>
    
    <div class="tab-content tab6-cont">
    <div class="tab-pane fade  active in" id="tab_comentarios{!! $proyecto->id !!}">
        <p>Sin comentarios</p>
      </div>
      <div class="tab-pane fade " id="tab_especificaciones{!! $proyecto->id !!}">
        <table class="table table-bordered mt-30">
    <tbody>
    <tr>                  
          <td><label>Pais</label></td>
          <td>{!! $proyecto->pais !!}</td>                 
      </tr>
      <tr>                  
          <td><label>Regional</label></td>
          <td>{!! $proyecto->regional->nombre !!}</td>                 
      </tr>
      <tr>                  
          <td><label>Semillero</label></td>
         <td>{!! $proyecto->semillero->nombre !!}</td>           
      </tr>
      <tr>                  
          <td><label>Lineade investigación</label></td>
         <td>{!! $proyecto->linea->nombre !!}</td>           
      </tr>
       <tr>                  
          <td><label>Tipo de proyecto</label></td>
         <td>{!! $proyecto->tipo !!}</td>           
      </tr>
      
    </tbody>
    </table>
      </div>
      <div class="tab-pane fade" id="tab_estado{!! $proyecto->id !!}">
       
       <label for="">Estado Actual</label>
       @if($proyecto->boo_solicitud_revision=='1')                   
       <p  style="color: #1bbc9b"><i class="icon icon_search-2"></i> En proceso de Revisión</p>
       @else
       <p>{!! $proyecto->estado->nombre !!}</p>                         
       @endif                   
       <label for="">Comité Asignado</label>
       <p>
       @if($proyecto->grupojurado->codigo=='N/D')
       Aún no se ha asigando Comité de jurados para su valoración
       @else
       {!! $proyecto->grupojurado->codigo !!}
       @endif
       </p>
       <label for="">Evento de Exposición</label>
       <p>@if($proyecto->evento_expo_id=='1')
       {!! $proyecto->evento->nombre !!}
       @else
       {!! $proyecto->evento->nombre !!}
       @endif

       {!! $proyecto->evento->nombre !!}</p>
      </div>
      
      <div class="tab-pane fade" id="tab_acciones{!! $proyecto->id !!}">
        {!! Form::open(['route' => ['proyectos.destroy', $proyecto->id], 'method' => 'delete']) !!}
    
    <!--
        <a href="{!! route('proyectos.show', [$proyecto->id]) !!}" class='btn btn-default btn-sm'><i class="glyphicon glyphicon-eye-open"></i></a>
    -->
    <a href="{!! route('proyectos.edit', [$proyecto->id]) !!}" class="button large thin teal btn-4 btn-4cc" title="Editar Información basica del proyecto" >
        <span class="button-text-anim">Editar</span>                  
        <div class="button-icon-anim icon  icon_pencil-edit"></div>
      </a>
      <a href="{!! route('proyectos.edit', [$proyecto->id]) !!}" class="button large thin teal btn-4 btn-4cc" title="Editar contenido del proyecto">
        <span class="button-text-anim">Contenido</span>                  
        <div class="button-icon-anim icon  icon_pencil-edit"></div>
      </a>
       @if($proyecto->boo_solicitud_revision=='0')
        <a href="{!! route('proyectos.rev', [$proyecto->id]) !!}" class="button large thin teal btn-4 btn-4cc" title="Solicitar revision al  director de semillero">
        <span class="button-text-anim">Revisión</span>
        <div class="button-icon-anim icon   icon_search-2"></div>
      </a>                
       @endif
    
    {!! Form::button('
        <span class="button-text-anim">Eliminar</span>
        <span class="button-icon-anim icon_trash_alt"></span>', ['type' => 'submit', 'class' => 'button large thin deeporange  btn-4 btn-4cc btn-eliminar']) !!}
   
    {!! Form::close() !!}

    
      
      
      </div>
    </div>
  </div>
    
</div>
    <div class="clearfix"></div>
    <div class="divider divider-center"><i class="fa fa-square"></i></div>
   
@endforeach


