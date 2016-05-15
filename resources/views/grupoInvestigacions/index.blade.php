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
                  <h3 class="box-title">GrupoInvestigacions</h3>
                   <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('grupoInvestigacions.create') !!}"><i class="fa fa-plus"></i> Agregar</a>
                </div><!-- /.box-header -->
                <div class="box-body">

        @if($grupoInvestigacions->isEmpty())
            <div class="well text-center">No se encontraron registros de GrupoInvestigacions en esta consulta.</div>
        @else
            @include('grupoInvestigacions.table')

        @endif
         @include('common.paginate', ['records' => $grupoInvestigacions])
                </div>
              </div>
            </div>
          </div>
        </section>
             


@endsection