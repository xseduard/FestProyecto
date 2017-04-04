@extends('layouts.app')

@section('content')

    <div class="container">

        <h1 class="pull-left">Unopruebas</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('unopruebas.create') !!}">Agregar</a>

        <div class="clearfix"></div>

        @include('flash::message')
        @include('common.errors')

        <div class="clearfix"></div>

        @if($unopruebas->isEmpty())
            <div class="well text-center">No se encontraron registros de Unopruebas en esta consulta.</div>
        @else
            @include('unopruebas.table')
        @endif
        @include('common.paginate', ['records' => $unopruebas])  
              
    </div>
@endsection