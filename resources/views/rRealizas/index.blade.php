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
                  <h3 class="box-title">RRealizas</h3>
                   <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('rRealizas.create') !!}"><i class="fa fa-plus"></i> Agregar</a>
                </div><!-- /.box-header -->
                <div class="box-body">

        @if($rRealizas->isEmpty())
            <div class="well text-center">No se encontraron registros de RRealizas en esta consulta.</div>
        @else
            @include('rRealizas.table')

        @endif
         @include('common.paginate', ['records' => $rRealizas])
                </div>
              </div>
            </div>
          </div>
        </section>
             


@endsection