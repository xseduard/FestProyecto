@extends('layouts.app')

@section('customcss')
@endsection
@section('content')

  
     <div class="col-md-12">
     @include('common.errors')
              <!-- formulario general de create -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h2 class="box-title">Crear nuevo  Sede</h2>
                </div><!-- /.box-header -->

        {!! Form::open(['route' => 'sedes.store']) !!}
            <div class="box-body">
             @include('sedes.fields')
                         <!-- Submit Field -->
              <div class="form-group col-sm-12">
                  {!! Form::button('<span class="glyphicon glyphicon-floppy-disk" ></span> Guardar', ['type' => 'submit', 'class' => 'btn btn-success']) !!}
                  <a href="{!! route('sedes.index') !!}" class="btn btn-primary"><i class="fa fa-ban"></i> Cancelar</a>
              </div>
            </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection
@section('customjs')
@endsection

