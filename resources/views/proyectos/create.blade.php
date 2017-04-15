@extends('layoutsweb.app')

@section('customcss')
@endsection
@section('content')

  
     <div class="col-md-12 tab-content tab6-cont">
     @include('common.errors')
              <!-- formulario general de create -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h2 class="box-title">Crear nuevo  Proyecto</h2>
                </div><!-- /.box-header -->

        {!! Form::open(['route' => 'proyectos.store']) !!}
            <div class="box-body">
             @include('proyectos.fields')
                         <!-- Submit Field -->
              <div class="form-group col-sm-12">
                  {!! Form::button('<span class="glyphicon glyphicon-floppy-disk" ></span> Guardar', ['type' => 'submit', 'class' => 'btn btn-success']) !!}
                  <a href="{!! route('proyectos.index') !!}" class="btn btn-primary"><i class="fa fa-ban"></i> Cancelar</a>
              </div>
            </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection
@section('customjs')
@endsection

