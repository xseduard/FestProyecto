@extends('layouts.app')

@section('content')
    <div class="col-md-12">
     @include('common.errors')
              <!-- general form elements -->
              <div class="box box-success">
                <div class="box-header with-border">
                  <h2 class="box-title">Editar Regionales</h2>
                </div><!-- /.box-header -->

        {!! Form::model($regional, ['route' => ['regionals.update', $regional->id], 'method' => 'patch']) !!}
            <div class="box-body">
            @include('regionals.fields')
            <!-- Submit Field -->
              <div class="form-group col-sm-12">
                  {!! Form::button('<span class="glyphicon glyphicon-floppy-disk" ></span> Actualizar', ['type' => 'submit', 'class' => 'btn btn-success']) !!}
                  <a href="{!! route('regionals.index') !!}" class="btn btn-primary"><i class="fa fa-ban"></i> Cancelar</a>
              </div>

            </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection


 