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
                  <h3 class="box-title">ROfreces</h3>
                   <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('rOfreces.create') !!}"><i class="fa fa-plus"></i> Agregar</a>
                </div><!-- /.box-header -->
                <div class="box-body">

        @if($rOfreces->isEmpty())
            <div class="well text-center">No se encontraron registros de ROfreces en esta consulta.</div>
        @else
            @include('rOfreces.table')

        @endif
         @include('common.paginate', ['records' => $rOfreces])
                </div>
              </div>
            </div>
          </div>
        </section>
             


@endsection