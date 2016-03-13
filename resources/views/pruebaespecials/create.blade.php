@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-sm-12">
            <h1 class="pull-left">Create New Pruebaespecial</h1>
        </div>
    </div>

  
      @include('common.errors')
      
    <div class="row">
        {!! Form::open(['route' => 'pruebaespecials.store']) !!}

            @include('pruebaespecials.fields')

        {!! Form::close() !!}
    </div>
</div>
@endsection