<div class="header-black-bg"></div> <!-- NEED FOR TRANSPARENT HEADER ON MOBILE -->
<header id="nav" class="header header-1 no-transparent mobile-no-transparent">
          <div class="header-wrapper">
          <div class="container-m-30 clearfix">
            <div class="logo-row">
            
            <!-- LOGO --> 
            <div class="logo-container-2">
                <div class="logo-2">
                  <a href="/" class="clearfix">
                    <img src="../../elementary/img/logo-white.png" class="logo-img" alt="Logo">
                  </a>
                </div>
              </div>
            <!-- BUTTON --> 
            <div class="menu-btn-respons-container">
              <button id="menu-btn" type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse" data-target="#main-menu .navbar-collapse">
                <span aria-hidden="true" class="icon_menu hamb-mob-icon"></span>
              </button>
            </div>
           </div>
          </div>

          <!-- MAIN MENU CONTAINER -->
          <div class="main-menu-container">
            
              <div class="container-m-30 clearfix"> 
              
                <!-- MAIN MENU -->
                <div id="main-menu" >
                  <div class="navbar navbar-default" role="navigation">

                    <!-- MAIN MENU LIST -->
                    <nav class="collapse collapsing navbar-collapse right-1024">
                      <ul class="nav navbar-nav">
                        
                        <!-- MENU ITEM -->
                        @if(Auth::user()->role=='estudiante' || Auth::user()->role=='administrador')
                        <li class="parent current">
                          <a href="#" class="open-sub"><div class="main-menu-title">Estudiantes</div></a>
                          <ul class="sub">                         
                            <a href="{!! route('proyectos.create') !!}">Crear Proyecto</a>
                            <a href="{!! route('proyectos.index') !!}" >Ver Proyectos</a>
                            
                            <li class="parent">
                            <a href="/#" class="open-sub">Headers</a>
                            <ul class="sub">
                              <li><a href="elementary/index7.html">Boxed</a></li>
                              <li><a href="elementary/one-page-index8.html">Bottom</a></li>
                              <li><a href="elementary/index.html">Black Transp</a></li>
                              <li><a href="elementary/index-blog2.html">Black No Transp</a></li>
                              <li><a href="elementary/index2.html">White Transp</a></li>
                              <li><a href="elementary/index-blog.html">White No Transp</a></li>                             
                            </ul>
                          </li>                         
                          </ul>
                        </li>
                        @endif
                        <!-- MENU ITEM -->
                        @if(Auth::user()->role=='coordinador')
                          <li class="parent">
                          <a href="#" class="open-sub"><div class="main-menu-title">Coordinador</div></a>
                          <ul class="sub">                         
                            <a href="{!! route('proyectos.revision_proyectos') !!}">Revisar Proyectos</a>
                                                                      
                          </ul>
                        </li>
                        @endif


                        <!-- MEGA MENU ITEM -->
                        @if(Auth::user()->role=='administrador')
                        <li class="parent megamenu">
                          <a href="elementary/#" class="open-sub"><div class="main-menu-title">Administrador</div></a>
                          <ul class="sub">
                        
                          
                            <div class="menu-sub-container">
                            
                              <div class="box col-md-3 ">
                                <ul>
                                  <li><a href="elementary/shortcodes.html#accordions"><div class="icon icon-basic-map"></div>Comité de jurados</a></li>
                                  <li><a href="elementary/shortcodes.html#alerts"><div class="icon icon-basic-exclamation"></div>Estados</a></li>
                                  <li><a href="elementary/animations.html"><div class="icon icon-basic-mixer2"></div> Evento exposición</a></li>
                                  <li><a href="elementary/typography.html#blockquotes"><div class="icon icon-basic-message-txt"></div>Estudiantes</a></li>
                                  <li><a href="elementary/shortcodes.html#buttons"><div class="icon icon-basic-link"></div>Facultades (Áreas)</a></li>
                                  <li><a href="elementary/shortcodes.html#carousels"><div class="icon icon-arrows-expand-horizontal1"></div>Grupo de investigación</a></li>
                                  <li><a href="elementary/typography.html#code"><div class="icon icon-basic-webpage-txt"></div>Jurados</a></li>
                                  <li><a href="elementary/shortcodes.html#counters-charts"><div class="icon icon-ecommerce-graph2"></div>Líneas de investigación</a></li>
                                </ul>
                              </div>
                            
                              <div class="box col-md-3">
                                <ul>
                                  <li><a href="elementary/typography.html#dividers"><div class="icon icon-arrows-minus"></div>Municipios</a></li>
                                  <li><a href="elementary/typography.html#dropcaps"><div class="icon icon-software-font-smallcaps"></div>Notas</a></li>
                                  <li><a href="elementary/shortcodes.html#flickr-link"><div class="icon icon-basic-webpage-multiple"></div>Programas</a></li>
                                  <li><a href="elementary/typography.html#heading"><div class="icon icon-arrows-drag-vert"></div>Proyectos</a></li>
                                  <li><a href="elementary/typography.html#highlights"><div class="icon icon-ecommerce-sale"></div>Regionales</a></li>
                                  <li><a href="elementary/icons.html"><div class="icon icon-basic-lightbulb"></div>Sedes</a></li>
                                  <li><a href="elementary/shortcodes.html#labels"><div class="icon icon-ecommerce-diamond"></div>Semilleros</a></li>
                                  <li><a href="elementary/shortcodes.html#lightbox"><div class="icon icon-basic-webpage-multiple"></div>Departamentos</a></li>
                                </ul>
                              </div>                            
                            </div>

                          
                          </ul>
                        </li>         
                        
                              
                        @endif
                                            
                        <!-- MENU ITEM -->

                        <!-- 
<li id="menu-contact-info-big" class="parent megamenu">
                          <a href="#" class="open-sub"><div class="main-menu-title">Contacto</div></a>
                          <ul class="sub">
                            <li class="clearfix" >
                              <div class="menu-sub-container">

                                <div class="box col-md-3 menu-demo-info closed">
                                  <h5 class="title open-sub">Contacta con nosotros</h5>
                                  <ul>
                                  <li><a href="elementary/contact.html">Regional CUN monteria</a></li>
                                  <li><a href="elementary/contact2.html">Regional CUN Bogota Central</a></li>
                                  </ul>
                                </div>
                                
                                <div class="col-md-3 menu-contact-info">
                                  <ul class="contact-list">
                                    <li class="contact-loc clearfix">
                                      <div class="loc-icon-container">
                                        <div class="icon icon-basic-map main-menu-contact-icon"></div>
                                      </div>
                                      <div class="menu-contact-text-container"> Monteria, cl 30</div>
                                    </li>
                                    <li class="contact-phone clearfix">
                                      <div class="loc-icon-container">
                                        <div class="icon icon-basic-smartphone main-menu-contact-icon"></div>
                                      </div>  
                                      <div class="menu-contact-text-container">01-800-000000, 01-800-000000</div>
                                    </li>
                                    <li class="contact-mail clearfix" >
                                      <div class="loc-icon-container">
                                        <div class="icon icon-basic-mail main-menu-contact-icon"></div>
                                      </div>
                                      <div class="menu-contact-text-container">             
                                        <a class="a-mail" href="elementary/mailto:contacto@cun.edu.co">contacto@cun.edu.co</a>
                                      </div>  
                                    </li>
                                  </ul>
                                </div>
                                
                                <div class="col-md-6 menu-map-container hide-max-960 ">
                                 
                                  <div class="google-map-container">
                                    <img src="../elementary/images/map-line.png" alt="alt">
                                  </div>
                                  
                                </div>
                                
                              </div>
                            </li>
                          </ul>
                        </li>
                        -->

                        <!-- MENU ITEM -->
                        <li class="parent">
                          <a href="elementary/#" class="open-sub"><div class="main-menu-title">Conócenos</div></a>
                          <ul class="sub">
                            <li><a href="https://www.cun.edu.co/institucional/quienes-somos.html" target="blank">¿QUIÉNES SOMOS?</a></li>
                            <li><a href="https://www.cun.edu.co/institucional/rectoria.html" target="blank">RECTORIO</a></li>
                            <li><a href="https://www.cun.edu.co/institucional/mision-y-vision.html" target="blank">CONÓCENOS</a></li>
                            <li><a href="https://www.cun.edu.co/institucional/estructura-organizacional.html" target="blank">ESTRUCTURA ORGANIZACIONAL</a></li>
                            <li><a href="https://www.cun.edu.co/institucional/normatividad.html" target="blank">NORMATIVIDAD</a></li>
                          </ul>
                        </li>   

                         
                        
                          <!-- MENU ITEM -->
                        <li class="parent">
                          <a href="elementary/#" class="open-sub"><div class="main-menu-title">Programas</div></a>
                          <ul class="sub">
                            <li>
                          <a href="https://www.cun.edu.co/programas.html" target="blank"><div class="main-menu-title">PROGRAMAS</div></a>
                          </li>
                             <li class="parent ">
                          <a href="http://carreras.cun.edu.co/programas-de-educaci%C3%B3n-continuada-cun" target="blank"><div class="main-menu-title">CONTINUADA</div></a>
                          </li>
                            <li class="parent ">
                          <a href="https://www.cun.edu.co/proyectos-especiales.html" target="blank"><div class="main-menu-title" >PROYECTOS ESPECIALES</div></a>
                          </li>
                            
                          </ul>
                        </li>  

                          <!-- MENU ITEM -->
                        <li class="parent">
                          <a href="elementary/#" class="open-sub"><div class="main-menu-title">Inscripciones</div></a>
                          <ul class="sub">
                            <li><a href="http://carreras.cun.edu.co/" target="blank">¡INSCRÍBETE YA!</a></li>
                            <li><a href="https://www.cun.edu.co/vinculaciones/ciclos-propedeuticos.html" target="blank">CICLOS PROPEDÉUTICOS</a></li>
                            <li><a href="https://www.cun.edu.co/requisitos-de-inscripcion.html" target="blank">REQUISITOS DE INSCRIPCIÓN</a></li>
                            <li><a href="https://www.cun.edu.co/informacion-de-matriculas.html" target="blank">INFORMACIÓN DE MATRICULAS</a></li>
                            <li><a href="https://www.cun.edu.co/convenios.html" target="blank">CONVENIOS</a></li>
                          </ul>
                        </li>  

                         <!-- MENU ITEM -->
                       
                         

<!-- menu user -->

                <li id="menu-contact-info-big" class="parent megamenu">
                          <a href="#" class="open-sub"><div class="main-menu-title">
                          <img src="                        
                            @if (Auth::user()->role=='administrador')
                                {{asset('/bower_components/admin-lte/dist/img/userADMIN.png')}}
                            @else
                                {{asset('/bower_components/admin-lte/dist/img/user4-128x128.jpg')}}
                            @endif

                        " class="user-image" alt="User Image"/>
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs">{{ Auth::user()->nombres  }}</span>
                          </div></a>
                          <ul class="sub">
                            <li class="clearfix" >
                              <div class="menu-sub-container">

                                <div class="box col-md-3 menu-demo-info closed">
                                  <h5 class="title open-sub">Acciones de usuario</h5>
                                  <ul>

                                  
                              <li><a href="#" class="btn btn-default btn-flat">Perfil</a></li>                            
                            
                                <li><a href="{{ url('/logout') }}" class="btn btn-default btn-flat">Cerrar session</a></li>
                          
                                  </ul>
                                </div>
                                
                                <div class="col-md-3 menu-contact-info">
                                  <ul class="contact-list">
                                    <li class="contact-loc clearfix">
                                      <div class="loc-icon-container">
                                        <i class="glyphicon glyphicon-user main-menu-contact-icon"></i>
                                      </div>
                                      <div class="menu-contact-text-container"> 
                                      {{ Auth::user()->nombres, Auth::user()->apellidos }} </div>
                                    </li>
                                    <li class="contact-phone clearfix">
                                      <div class="loc-icon-container">
                                        <div class="icon icon_key_alt main-menu-contact-icon"></div>
                                      </div>  
                                      <div class="menu-contact-text-container">{{ Auth::user()->role }}</div>
                                    </li>
                                    <li class="contact-mail clearfix" >
                                      <div class="loc-icon-container">
                                        <div class="icon icon-basic-mail main-menu-contact-icon"></div>
                                      </div>
                                      <div class="menu-contact-text-container">             
                                        <a class="a-mail" href="elementary/mailto:{{ Auth::user()->email }}">{{ Auth::user()->email }}</a>
                                      </div>  
                                    </li>
                                  </ul>
                                </div>
                                
                                <div class="col-md-6 menu-map-container hide-max-960 ">
                                  <!-- Google Maps -->
                                  <div class="google-map-container">
                                   <img src="                        
                            @if (Auth::user()->role=='administrador')
                                {{asset('/bower_components/admin-lte/dist/img/userADMIN.png')}}
                            @else
                                {{asset('/bower_components/admin-lte/dist/img/user4-128x128.jpg')}}
                            @endif

                        " class="user-image-full" alt="User Image"/>

                                    
                                  </div>
                                  <!-- Google Maps / End -->  
                                </div>
                                
                              </div>
                            </li>
                          </ul>
                        </li>

              <!-- fin menu user -->

                        
                      
                      </ul>
                
                    </nav>
   
                  </div>
                </div>
                <!-- END main-menu -->
                
              </div>
              <!-- END container-m-30 -->
            
          </div>
          <!-- END main-menu-container -->
          
          <!-- SEARCH READ DOCUMENTATION -->
          <ul class="cd-header-buttons">
            <li><a class="cd-search-trigger" href="#cd-search"><span></span></a></li>
          </ul> <!-- cd-header-buttons -->
          <div id="cd-search" class="cd-search">
            <form class="form-search" id="searchForm" action="page-search-results.html" method="get">
              <input type="text" value="" name="q" id="q" placeholder="Buscar...">
            </form>
          </div>
          
          </div>
          <!-- END header-wrapper -->
          
        </header>