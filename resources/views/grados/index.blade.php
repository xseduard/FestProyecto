@extends('layouts.app')

@section('content')

    <div class="container">

        <h2 class="pull-left">Grados</h2>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('grados.create') !!}"><i class="fa fa-plus"></i> Agregar</a>

        <div class="clearfix"></div>

        @include('flash::message')
        @include('common.errors')

        <div class="clearfix"></div>

        @if($grados->isEmpty())
            <div class="well text-center">No se encontraron registros de Grados en esta consulta.</div>
        @else
            @include('grados.table')
        @endif
        @include('common.paginate', ['records' => $grados])  
              
    </div>
@endsection