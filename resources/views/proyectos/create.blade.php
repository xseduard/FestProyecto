@extends('layoutsweb.app')

@section('customcss')
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

      <!-- SLIDER Revo Hero 4 -->
    


     <div class="col-md-12">
     @include('common.errors')
              <!-- formulario general de create -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h2 class="box-title">Registrar Proyecto (Información Basica)</h2>
                </div><!-- /.box-header -->

        {!! Form::open(['route' => 'proyectos.store']) !!}
            <div class="box-body">
             @include('proyectos.fields')
                         <!-- Submit Field -->
              <div class="form-group col-sm-12 ">

                  {!! Form::button('
                    <span class="button-text-anim">Registrar</span>
                    <span class="button-icon-anim icon_floppy"></span>', ['type' => 'submit', 'class' => 'button large thin teal btn-4 btn-4cc']) !!}
                  
                  <a href="{!! route('proyectos.index') !!}" class="button large thin btn-4 btn-4cc" >
                    <span class="button-text-anim">Cancelar</span>                  
                    <div class="button-icon-anim icon icon-arrows-deny"></div>
                  </a>


                 
                  
              </div>
            </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection
@section('customjs')
 @include('revolutionsliders.script_banner')
@endsection

