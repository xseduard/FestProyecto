@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Editar Unoprueba</h1>
            </div>
        </div>

        @include('common.errors')

        <div class="row">
            {!! Form::model($unoprueba, ['route' => ['unopruebas.update', $unoprueba->id], 'method' => 'patch']) !!}

            @include('unopruebas.fields')

            {!! Form::close() !!}
        </div>
    </div>
@endsection