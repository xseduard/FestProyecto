@extends('layouts.app')

@section('content')

 
        <section class="content">
            <div class="clearfix"></div>
               @include('flash::message')
            <div class="clearfix"></div>

          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Lineas de Investigación</h3>
                   <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('lineaInvestigacions.create') !!}"><i class="fa fa-plus"></i> Agregar</a>
                </div><!-- /.box-header -->
                <div class="box-body">

        @if($lineaInvestigacions->isEmpty())
            <div class="well text-center">No se encontraron registros de Lineas de Investigación en esta consulta.</div>
        @else
            @include('lineaInvestigacions.table')

        @endif
         @include('common.paginate', ['records' => $lineaInvestigacions])
                </div>
              </div>
            </div>
          </div>
        </section>
             


@endsection