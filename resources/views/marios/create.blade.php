@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-sm-12">
            <h1 class="pull-left">Crear nuevo Mario</h1>
        </div>
    </div>

    @include('common.errors')

    <div class="row">
        {!! Form::open(['route' => 'marios.store']) !!}

            @include('marios.fields')

        {!! Form::close() !!}
    </div>
</div>
@endsection