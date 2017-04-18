@extends('layoutsweb.app')

@section('customcss')
@endsection

@section('head')
  @include('layoutsweb.header')
  <div class="relative">
<!-- menu transparente -->
<!-- <div class="relative indent-header"> -->
  @include('revolutionsliders.revo_blog2')
  </div>

@endsection

@section('content')

      <!-- SLIDER Revo Hero 4 -->
    
<!-- Banner-Educación-Continuada-2.png -->

<!-- FEATURES 15 WE ARE CREATIVE -->
       

 
        <div id="misproyectos" class="page-section">


              <div class="col-lg-8 col-md-8 wow fadeInUp" style="">
                <div class="fes1-main-title-cont ">
                  <div class="fes15-title-32">
                    Mis Proyectos
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4">
                  <div class="fes1-main-title-cont wow fadeInUp">
                <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('proyectos.create') !!}"><i class="fa fa-plus"></i> Agregar</a>
              </div>
              </div>
             
              
       </div>
    </div>
      <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="clearfix"></div>
               @include('flash::message')
            <div class="clearfix"></div>
          </div>
        </div> 
          
            <!-- CONTENT -->
        <div class="col-sm-12 blog-main-posts">
        @if($proyectos->isEmpty())
            <div class="well text-center">No se encontraron registros de Proyectos en esta consulta.</div>
        @else
            @include('proyectos.explore_revision')

        @endif
         @include('common.paginate', ['records' => $proyectos])
           
           
    
     
        </div> <!-- termina CONTENT -->

         <!-- SIDEBAR -->
          

 
             


@endsection

@section('customjs')
 @include('revolutionsliders.script_banner')
@endsection