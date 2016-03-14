@extends('layouts.app')

@section('content')
    <div class="col-md-8">
     @include('common.errors')
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h2 class="box-title">Edit Pruebaespecial</h2>
                </div><!-- /.box-header -->

        {!! Form::model($pruebaespecial, ['route' => ['pruebaespecials.update', $pruebaespecial->id], 'method' => 'patch']) !!}
            <div class="box-body">
            @include('pruebaespecials.fields')
            </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection


 