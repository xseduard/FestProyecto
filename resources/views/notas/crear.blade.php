@extends('layoutsweb.app-black')

@section('customcss')
@endsection
@section('head')
  @include('layoutsweb.header')

@endsection
@section('content')

 
     <div class="col-md-12">
     @include('common.errors')
              <!-- formulario general de create -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h2 class="box-title">Enviar nota a:</h2>
                </div><!-- /.box-header -->

                <h3>{!! $proyecto->titulo !!}</h3>

        {!! Form::open(['route' => 'notas.store']) !!}
            <div class="box-body">
             @include('notas.fields')
                         <!-- Submit Field -->
              
                <div class="form-group col-sm-12">
                  {!! Form::button('
                    <span class="button-text-anim">Enviar</span>
                    <span class="button-icon-anim fa fa-send-o"></span>', ['type' => 'submit', 'class' => 'button large thin teal btn-4 btn-4cc']) !!}
                  
                  <a href="{!! route('proyectos.revision_proyectos') !!}" class="button large thin btn-4 btn-4cc" >
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
@endsection

