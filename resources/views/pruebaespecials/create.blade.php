@extends('layouts.app')

@section('content')

  
     <div class="col-md-8">
     @include('common.errors')
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h2 class="box-title">Crear nuevo Pruebaespecial</h2>
                </div><!-- /.box-header -->

        {!! Form::open(['route' => 'pruebaespecials.store']) !!}
            <div class="box-body">
            @include('pruebaespecials.fields')
            </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection