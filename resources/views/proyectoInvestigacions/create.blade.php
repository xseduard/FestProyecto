@extends('layouts.app')

@section('customcss')
@endsection
@section('content')

  
     <div class="col-md-12">
     @include('common.errors')
              <!-- formulario general de create -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h2 class="box-title">Crear nuevo  Proyecto de Investigaciòn</h2>
                </div><!-- /.box-header -->

        {!! Form::open(['route' => 'proyectoInvestigacions.store']) !!}
            <div class="box-body">
             @include('proyectoInvestigacions.fields')
                         <!-- Submit Field -->
              <div class="form-group col-sm-12">
                  {!! Form::button('<span class="glyphicon glyphicon-floppy-disk" ></span> Guardar', ['type' => 'submit', 'class' => 'btn btn-success']) !!}
                  <a href="{!! route('proyectoInvestigacions.index') !!}" class="btn btn-primary"><i class="fa fa-ban"></i> Cancelar</a>

                  {!! Form::close() !!}

        {{ Form::open(array(
             'url'=>'upload/', 
             'method' => 'post',
             'enctype'=>'multipart/form-data'
        ) )}}
<br>
       
        {!! Form::file('archivo', ['class' => 'form-control']) !!}
        <br>
        {!! Form::button('<span class="glyphicon glyphicon-cloud-upload" ></span> Subir', ['type' => 'submit', 'class' => 'btn btn-success']) !!}

        {{ Form::close()}}
              </div>
            </div>

    </div>
</div>
@endsection
@section('customjs')
@endsection

