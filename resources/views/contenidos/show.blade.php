@extends('layoutsweb.app')

@section('customcss')
<!--http://www.ejemplode.com/13-ciencia/2467-ejemplo_de_proyecto_de_investigacion.html -->
<style>
    .oculto{display: none}

    .maxwidth {
    position: absolute;
    width: 100%;
    left: 0;
    }
</style>

@endsection
@section('head')
  @include('layoutsweb.header')
  <div class="relative">
<!-- menu transparente -->
<!-- <div class="relative indent-header"> -->
  @include('revolutionsliders.revo_blog2')
  </div>
@endsection
@section('content')

<div class="col-md-12">
<div class="box box-warning">
                <div class="box-header with-border">
                  <h2 class="box-title">Detalles Contenidos</h2>
                  <a href="{!! route('proyectos.revision_proyectos') !!}" class="btn btn-default pull-right"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Atrás</a>
                </div><!-- /.box-header -->
               
 {!! Form::model($contenido, ['route' => ['contenidos.update', $contenido->id], 'method' => 'patch']) !!}
    @include('contenidos.fields')
  {!! Form::close() !!}
</div>
</div>
@endsection
@section('customjs')

<script>
  function hacer_click(){
    var codigo = $('#lanzador').val();
    
//    $('#'+codigo).slideDown(1500).removeClass( 'oculto' ).addClass('visible');
    $('#'+codigo).slideToggle("slow");
    
  }
function ocultartodo(){
  var i=0;
   while (i < 25) {
    // Este bloque de código se ejecutará 100 veces
    $('#a'+i).hide();
    i++; // incrementa la variable i
  }
}
  $( document ).ready(function() {
    console.log( "ready!" );

});

</script>
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>


 @include('revolutionsliders.script_banner')
@endsection

