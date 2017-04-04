@extends('layouts.app')



@section('content-ppal')
        <section class="content">
            <div class="clearfix"></div>
               @include('flash::message')
            <div class="clearfix"></div>
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h2 class="box-title">Proyectos de Investigaciòn</h2>
                   <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('proyectoInvestigacions.create') !!}"><i class="fa fa-plus"></i> Agregar</a>
                </div><!-- /.box-header -->
                <div class="box-body"> 
                @include('common.paginate', ['records' => $proyectoInvestigacions])     
                </div>
              </div>
            </div>
          </div>
@endsection
@section('content')
      @if($proyectoInvestigacions->isEmpty())
            <div class="well text-center">No se encontraron registros de ProyectoInvestigacions en esta consulta.</div>
        @else
            @include('proyectoInvestigacions.table')

        @endif
        
             


@endsection

@section('content-right')
  <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h2 class="box-title">Filtros</h2>    
                </div><!-- /.box-header -->
                <div class="box-body"> 
                   {!! Form::open(['route' => 'proyectoInvestigacions.index',
                   'method'=>'get']) !!}
                     
                       @include('proyectoInvestigacions.filtros')
                                   <!-- Submit Field -->
                        <div class="form-group col-sm-12">
                            {!! Form::button('<span class="glyphicon glyphicon-search" ></span> Buscar', ['type' => 'submit', 'class' => 'btn btn-default']) !!}                            
                        </div>
                     
                  {!! Form::close() !!}
                </div>
              </div>
            </div>
          </div>
@endsection