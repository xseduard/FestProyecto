@foreach($proyectos as $proyecto)
<div class="col-md-12 col-sm-12 mb-50 wow fadeInUp">
  
</div>
<div class="col-md-4 col-sm-12 mb-50 wow fadeInUp">
                  
    <div class="post-prev-img popup-gallery">
      <a href="elementary/img/item2_proyecto.jpg"><img src="elementary/img/item2_proyecto.jpg" alt="img"></a>
    </div>
    <div class="sale-label-cont">
      <span class="sale-label label-danger bg-white font-poppins"><strong>{!! $proyecto->created_at->format(' j F '); !!}</strong></span>
    </div> 
    
            
    </div>
<div class="col-md-8 col-sm-12 wow fadeInUp">         

    <div class="col-sm-12">
        <label>Titulo</label>
     <p>{!! $proyecto->titulo !!}</p>
    </div>
                      
<div class="clearfix"></div>
   <div class="col-sm-6">
<label for="">Miembros</label>
<p>{!! $proyecto->usuario->nombres,' ', $proyecto->usuario->apellidos !!}</p>
    <label>Área / Sub Área</label>
    <p>{!! $proyecto->area->nombre !!} / {!! $proyecto->programa->nombre !!}</p>
         
    <label>Tipo de proyecto</label>
    <p>{!! $proyecto->tipo !!}</p>  
             
        
   
   </div>

   <div class="col-sm-6">

   <label>Regional</label>
    <p>{!! $proyecto->regional->nombre !!}</p>
               
    <label>Semillero</label>
    <p>{!! $proyecto->semillero->nombre !!}</p>
        <label>Lineade investigación</label>
    <p>{!! $proyecto->linea->nombre !!}</p>
                
    
   </div>


    {!! Form::open(['route' => 'proyectos.asignar', 'method' => 'POST']) !!}
        {!! Form::hidden('id', $proyecto->id, ['' => '']) !!}

        
         <div class="col-sm-6">             
            {!! Form::label('grupojurado_id', 'Comité Jurado:') !!}
            {!! Form::select('grupojurado_id', $selectores['grupojurado'], $proyecto->grupojurado_id, ['class' => 'form-control']) !!}
         </div>
         
      
    <div class="col-sm-6">
        {!! Form::label('evento_expo_id', 'Evento:') !!}
        {!! Form::select('evento_expo_id', $selectores['evento'], $proyecto->evento_expo_id, ['class' => 'form-control']) !!}
    </div>
    

         
      


 
  <col class="clearfix"> 
<div class="col-sm-12" style="margin-top: 20px;">
{!! Form::button('<span class="button-text-anim">Guardar Cambios &nbsp &nbsp</span><span class="button-icon-anim icon_floppy"></span>', ['type' => 'submit', 'class' => 'button large thin teal btn-4 btn-4cc']) !!}
<a href="{!! route('contenidos.pdf', [$proyecto->id]) !!}" class="button large thin  btn-4 btn-4cc" title="Ver Contenido del proyecto" >
        <span class="button-text-anim">Ver Proyecto</span>                  
        <div class="button-icon-anim icon icon_document_alt"></div>
      </a>
     
@if($proyecto->boo_solicitud_revision=='1') 
     <a href="{!! route('notas.crear', [$proyecto->id]) !!}" class="button large thin  btn-4 btn-4cc" title="revisar y Agregar observaciones" >
        <span class="button-text-anim">Revisar</span>                  
        <div class="button-icon-anim icon icon_search-2"></div>
      </a>
@endif
</div>
 {!! Form::close() !!}
</div>
<!--
<label>Estado Actual ({!! $proyecto->progreso_estimado !!}%)</label>
          <td>@if($proyecto->boo_solicitud_revision=='1')                   
       <p  style="color: #1bbc9b"><i class="icon icon_search-2"></i> Revision Pendiente</p>
       @else
       <p>{!! $proyecto->estado->nombre !!}</p>                         
       @endif   

-->    
<div class="col-md-12 wow fadeInUp"></div>
    <div class="clearfix"></div>
    <div class="divider divider-center"><i class="fa fa-square"></i></div>
   
@endforeach


