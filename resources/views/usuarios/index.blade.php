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
            <h3 class="box-title">Cuentas de usuarios</h3>
          </div><!-- /.box-header -->
          <div class="box-body">

  @if($usuarios->isEmpty())
      <div class="well text-center">No se encontraron registros de usuarios en esta consulta.</div>
  @else
      @include('usuarios.table')

  @endif
   @include('common.paginate', ['records' => $usuarios])
          </div>
        </div>
      </div>
    </div>
  </section>
             
@endsection