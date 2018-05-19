@extends('layoutsweb.app')

@section('customcss')
@endsection

@section('head')
  @include('layoutsweb.header')
  <div class="relative">
<!-- menu transparente -->
<!-- <div class="relative indent-header"> -->
  @include('revolutionsliders.revo_proyectos')
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
        <div class="col-sm-8 blog-main-posts">
                 

        @if($proyectos->isEmpty())
            <div class="well text-center">No tienes Proyectos registrados.</div>
        @else
            @include('proyectos.explore')

        @endif
         @include('common.paginate', ['records' => $proyectos])
           
           
    
     
        </div> <!-- termina CONTENT -->

         <!-- SIDEBAR -->
            <div class="col-sm-4 col-md-3 col-md-offset-1">


              
              <!-- SEARCH -->
              <div class="widget">
                <form class="form-search widget-search-form" action="page-search-results.html" method="get">
                  <input type="text" name="q" class="input-search-widget" placeholder="Buscar">
                  <button  type="submit" title="Start Search">
                    <span aria-hidden="true" class="icon_search"></span>
                  </button>
                </form>
              </div>
              
              <!-- WIDGET -->
              <div class="widget">
                
                <h5 class="widget-title2">Áreas</h5>
                
                <div class="widget-body">
                  <ul class="clearlist widget-menu font-poppins">
                  @foreach($selectores['area'] as $area)
                      @if($area != 'seleccione...')
                      <li>
                        <a href="#">
                          {{ $area }}
                        </a>
                      </li>
                      @endif
                  @endforeach
                    
                  </ul>
                </div>
                
              </div>
              
              <!-- WIDGET -->
              <div class="widget">
                
                <h5 class="widget-title2">Ultimos Proyectos</h5>
                
                <div class="widget-body mt-25">
                  <ul class="clearlist widget-posts">
                    <li class="clearfix">
                      <a href=""><img src="/images/dem1.png" style="width: 70px"  alt="" class="widget-posts-img"></a>
                      <div class="widget-posts-descr2">
                        <a href="#" class="font-poppins lh-18">Tiempo del minimalismo</a>
                        <div class="lh-18">Abril 26, 2018</div> 
                      </div>
                    </li>

                    <li class="clearfix">
                      <a href=""><img src="/images/dem2.png" style="width: 70px"  alt="" class="widget-posts-img"></a>
                      <div class="widget-posts-descr2">
                        <a href="#" class="font-poppins lh-18">Nuevas formas de ver la WEB</a>
                        <div class="lh-18">Enero 21, 2018</div> 
                      </div>
                    </li>

                    <li class="clearfix">
                      <a href=""><img src="/images/dem3.png" style="width: 70px"  alt="" class="widget-posts-img"></a>
                      <div class="widget-posts-descr2">
                        <a href="#" class="font-poppins lh-18">El sonido del abismo</a>
                        <div class="lh-18">Febrero 2, 2018</div> 
                      </div>
                    </li>

                  </ul>
                </div>
                
              </div>
              
              <!-- WIDGET -->
              <div class="widget">
                                
                <h5 class="widget-title2">Tags</h5>
                
                <div class="widget-body mt-25">
                  <div class="tags">
                    <a href="">salud</a>
                    <a href="">informatica</a>
                    <a href="">humanidades</a>
                    <a href="">unico</a>
                    <a href="">robotica</a>
                    <a href="">cultura</a>
                    <a href="">UI &amp; UX</a>
                  </div>
                </div>
                
              </div>
              
              <!-- WIDGET -->
              <div class="widget">
                <h5 class="widget-title2">Jack Welch (2001)</h5>

                <div class="widget-body">
                  <p>La ventaja de operar como una pequeña empresa: Definir el proyecto, ponerlo en manos de personal cualificado y proveerlo de suficiente dinero es la mejor forma de alcanzar el éxito.</p>
                </div>
              </div>
              
              <!-- WIDGET -->
              <div class="widget">
                
                <h5 class="widget-title2">Archivo</h5>
                
                <div class="widget-body">
                  <ul class="clearlist widget-menu font-poppins">
                    <li>
                      <a href="#" title="">Abril 2017</a><small><span class="slash-divider">/</span> 2</small>
                    </li>
                    <li>
                      <a href="#" title="">Marzo 2017</a><small><span class="slash-divider">/</span> 21</small>
                    </li>
                    <li>
                      <a href="#" title="">Febrero 2017</a><small><span class="slash-divider">/</span> 11</small>
                    </li>
                  </ul>
                </div>
                
              </div>

            </div><!-- side bar-->

 
             


@endsection

@section('customjs')
 @include('revolutionsliders.script_fullscreen')
@endsection