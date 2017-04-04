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
                  <h3 class="box-title">Universidades</h3>
                   <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('universidades.create') !!}"><i class="fa fa-plus"></i> Agregar</a>
                </div><!-- /.box-header -->
                <div class="box-body">

        @if($universidades->isEmpty())
            <div class="well text-center">No se encontraron registros de Universidades en esta consulta.</div>
        @else
            @include('universidades.table')

        @endif
         @include('common.paginate', ['records' => $universidades])
                </div>
              </div>
            </div>
          </div>
        </section>
             


@endsection