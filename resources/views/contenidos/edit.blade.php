@extends('layoutsweb.app')
@section('customcss')
<!--http://www.ejemplode.com/13-ciencia/2467-ejemplo_de_proyecto_de_investigacion.html -->
<style>
  .oculto{
    display: none}
  .col-sm-12{
    margin-bottom: 50px;
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
  @include('common.errors')
  <!-- general form elements -->
  <div class="box box-success">
    <div class="box-header with-border">
      <h2 class="box-title">Estas editando el contenido del proyecto: 
      </h2>
      <h4>"{!! $proyecto->titulo !!}"
      </h4>
    </div>
    <!-- /.box-header -->
    <div class="form-group col-sm-6">
      {!! Form::label('selector_titulo', 'Contenidos') !!}
      {!! Form::select('selector_titulo', $selector_titulo, null, ['id'=> 'lanzador', 'class' => 'form-control']) !!}
    </div>
    <div class="form-group col-sm-6">
      {!! Form::button('<span class="button-text-anim">Agregar / Ocultar &nbsp;&nbsp; </span> <span class="button-icon-anim  icon_plus_alt2"> </span>', ['onclick' => 'hacer_click()', 'class' => 'button large thin teal btn-4 btn-4cc']) !!} </div>
    <div class="clearfix">
    </div>
    {!! Form::model($contenido, ['route' => ['contenidos.update', $contenido->id], 'method' => 'patch']) !!}
    <div class="box-body" style="margin-top: 50px">
      <div class="form-group col-sm-12" >           
        {!! Form::button('<span class="button-text-anim">Actualizar </span> <span class="button-icon-anim icon_pencil-edit"> </span>', ['type' => 'submit', 'class' => 'button large thin teal btn-4 btn-4cc']) !!} <a href="{!! route('proyectos.index') !!}" class="button large thin btn-4 btn-4cc" >
          <span class="button-text-anim">Cancelar
          </span>                  
          <div class="button-icon-anim icon icon-arrows-deny">
          </div>
        </a>
      </div>
      @include('contenidos.fields')
      <!-- Submit Field -->
      <div class="form-group col-sm-12" >
        {!! Form::button('<span class="button-text-anim">Actualizar </span> <span class="button-icon-anim icon_pencil-edit"> </span>', ['type' => 'submit', 'class' => 'button large thin teal btn-4 btn-4cc']) !!} <a href="{!! route('proyectos.index') !!}" class="button large thin btn-4 btn-4cc" >
          <span class="button-text-anim">Cancelar
          </span>                  
          <div class="button-icon-anim icon icon-arrows-deny">
          </div>
        </a>
      </div>
    </div>
    {!! Form::close() !!}
  </div>
</div>
@endsection
@section('customjs')
<script src="/js/nicEdit.js"></script>
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
      i++;
      // incrementa la variable i
    }
  }

  bkLib.onDomLoaded(nicEditors.allTextAreas);
</script>
@include('revolutionsliders.script_banner')
@endsection
