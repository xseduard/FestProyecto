@extends('layouts.app')

@section('content')
    <div class="col-md-12">
     @include('common.errors')
              <!-- general form elements -->
              <div class="box box-success">
                <div class="box-header with-border">
                  <h2 class="box-title">Edit Pruebaespecial</h2>
                </div><!-- /.box-header -->

        {!! Form::model($pruebaespecial, ['route' => ['pruebaespecials.update', $pruebaespecial->id], 'method' => 'patch']) !!}
            <div class="box-body">
            @include('pruebaespecials.fields')
            <div class="form-group col-sm-12">
    {!! Form::button('<span class="glyphicon glyphicon-floppy-disk" ></span> Actualizar', ['class' => 'btn btn-success']) !!}
    <a href="{!! route('pruebaespecials.index') !!}" class="btn btn-primary"><i class="fa fa-ban"></i> Cancelar</a>
</div>

            </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection


 