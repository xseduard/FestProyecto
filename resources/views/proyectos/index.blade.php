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
            <div class="well text-center">No se encontraron registros de Proyectos en esta consulta.</div>
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
                    <li>
                      <a href="#" title="">Branding</a>
                    </li>
                    <li>
                      <a href="#" title="">Development</a>
                    </li>
                    <li>
                      <a href="#" title="">Technology</a>
                    </li>
                    <li>
                      <a href="#" title="">Social Media</a>
                    </li>
                    <li>
                      <a href="#" title="">Entertainment</a>
                    </li>
                  </ul>
                </div>
                
              </div>
              
              <!-- WIDGET -->
              <div class="widget">
                
                <h5 class="widget-title2">Recent posts</h5>
                
                <div class="widget-body mt-25">
                  <ul class="clearlist widget-posts">
                    <li class="clearfix">
                      <a href=""><img src="elementary/images/blog/recent/1.jpg" alt="" class="widget-posts-img"></a>
                      <div class="widget-posts-descr2">
                        <a href="#" class="font-poppins lh-18">Time For Minimalism</a>
                        <div class="lh-18">June 26, 2016</div> 
                      </div>
                    </li>

                    <li class="clearfix">
                      <a href=""><img src="elementary/images/blog/recent/2.jpg" alt="" class="widget-posts-img"></a>
                      <div class="widget-posts-descr2">
                        <a href="#" class="font-poppins lh-18">New Trends In Web</a>
                        <div class="lh-18">June 21, 2016</div> 
                      </div>
                    </li>

                    <li class="clearfix">
                      <a href=""><img src="elementary/images/blog/recent/3.jpg" alt="" class="widget-posts-img"></a>
                      <div class="widget-posts-descr2">
                        <a href="#" class="font-poppins lh-18">The Sound Of Life</a>
                        <div class="lh-18">June 16, 2016</div> 
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
                    <a href="">design</a>
                    <a href="">development</a>
                    <a href="">minimal</a>
                    <a href="">branding</a>
                    <a href="">unique</a>
                    <a href="">clean</a>
                    <a href="">UI &amp; UX</a>
                  </div>
                </div>
                
              </div>
              
              <!-- WIDGET -->
              <div class="widget">
                <h5 class="widget-title2">Text Widget</h5>

                <div class="widget-body">
                  <p>Lorem ipsum dolor sit amet, cotur adcing elit. Recusandae, nostrum, cumque culpa provident aliquam commodi assumenda</p>
                </div>
              </div>
              
              <!-- WIDGET -->
              <div class="widget">
                
                <h5 class="widget-title2">Archive</h5>
                
                <div class="widget-body">
                  <ul class="clearlist widget-menu font-poppins">
                    <li>
                      <a href="#" title="">October 2016</a><small><span class="slash-divider">/</span> 10</small>
                    </li>
                    <li>
                      <a href="#" title="">July 2016</a><small><span class="slash-divider">/</span> 21</small>
                    </li>
                    <li>
                      <a href="#" title="">June 2016</a><small><span class="slash-divider">/</span> 11</small>
                    </li>
                  </ul>
                </div>
                
              </div>

            </div><!-- side bar-->

 
             


@endsection

@section('customjs')
 @include('revolutionsliders.script_fullscreen')
@endsection