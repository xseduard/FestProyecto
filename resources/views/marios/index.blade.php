@extends('layouts.app')

@section('content')

    <div class="container">

        <h1 class="pull-left">Marios</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('marios.create') !!}">Agregar</a>

        <div class="clearfix"></div>

        @include('flash::message')
        @include('common.errors')

        <div class="clearfix"></div>

        @if($marios->isEmpty())
            <div class="well text-center">No se encontraron registros de Marios en esta consulta.</div>
        @else
            @include('marios.table')
        @endif
        @include('common.paginate', ['records' => $marios])  
              
    </div>
@endsection