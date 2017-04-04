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
                  <h3 class="box-title">EStudiantes</h3>
                   <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('eStudiantes.create') !!}"><i class="fa fa-plus"></i> Agregar</a>
                </div><!-- /.box-header -->
                <div class="box-body">

        @if($eStudiantes->isEmpty())
            <div class="well text-center">No se encontraron registros de EStudiantes en esta consulta.</div>
        @else
            @include('eStudiantes.table')

        @endif
         @include('common.paginate', ['records' => $eStudiantes])
                </div>
              </div>
            </div>
          </div>
        </section>
             


@endsection