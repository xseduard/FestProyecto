<!DOCTYPE html>
<!--

    Theme Name: Elementy
    Description: HTML/CSS 
    Author: Abcgomel 
    Designed & Coded by Abcgomel
    
-->

<html>
    <head>
        <title>Elementy - Responsive HTML5 Template</title>
        <meta charset=utf-8 >
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
        <meta name="robots" content="index, follow" > 
        <meta name="keywords" content="HTML5 Template" > 
        <meta name="description" content="Elementy - Responsive HTML5 Template" > 
        <meta name="author" content="Vladimir Azarushkin">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="theme-color" content="#2a2b2f">
    
        <!-- FAVICONS -->
    <link rel="shortcut icon" href="elementary/images/favicon/favicon.png">
    <link rel="apple-touch-icon" href="elementary/images/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="elementary/images/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="elementary/images/favicon/apple-touch-icon-114x114.png">
    <link rel="icon" sizes="192x192" href="elementary/images/favicon/icon-192x192.png">
        
<!-- CSS -->
    <!--  GOOGLE FONT -->       
    <link href='http://fonts.googleapis.com/css?family=Poppins:400,600,300%7COpen+Sans:400,300,700' rel='stylesheet' type='text/css'>
    
    <!-- REVOSLIDER CSS SETTINGS -->
    
    <!-- REVOLUTION STYLE SHEETS -->
    <link href="elementary/revo-slider/css/settings-custom.css" rel="stylesheet" type="text/css">
    
    <!--  BOOTSTRAP -->
        <link rel="stylesheet" href="elementary/css/bootstrap.min.css"> 
    
    <!-- ICONS ELEGANT FONT & FONT AWESOME & LINEA ICONS  -->       
        <link rel="stylesheet" href="elementary/css/icons-fonts.css" > 
    
    <!--  CSS THEME -->     
        <link rel="stylesheet" href="elementary/css/style.css" >
    
    <!-- ANIMATE -->    
        <link rel='stylesheet' href="elementary/css/animate.min.css">
        
    <!-- IE Warning CSS -->
        <!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="elementary/css/ie-warning.css" ><![endif]-->
        <!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="elementary/css/ie8-fix.css" ><![endif]-->
    
    <!-- Magnific popup, Owl Carousel Assets in style.css -->       
    
<!-- CSS end -->

<!-- JS begin some js files in bottom of file-->
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="elementary/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="elementary/https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body>
    
        <!-- LOADER --> 
        <div id="loader-overflow">
      <div id="loader3" class="loader-cont">Please enable JS</div>
    </div>  

        <div id="wrap" class="boxed ">
            <div class="grey-bg"> <!-- Grey BG  --> 
                
                <!--[if lte IE 8]>
                <div id="ie-container">
                    <div id="ie-cont-close">
                        <a href='#' onclick='javascript&#058;this.parentNode.parentNode.style.display="none"; return false;'><img src='images/ie-warn/ie-warning-close.jpg' style='border: none;' alt='Close'></a>
                    </div>
                    <div id="ie-cont-content" >
                        <div id="ie-cont-warning">
                            <img src='images/ie-warn/ie-warning.jpg' alt='Warning!'>
                        </div>
                        <div id="ie-cont-text" >
                            <div id="ie-text-bold">
                                You are using an outdated browser
                            </div>
                            <div id="ie-text">
                                For a better experience using this site, please upgrade to a modern web browser.
                            </div>
                        </div>
                        <div id="ie-cont-brows" >
                            <a href='http://www.firefox.com' target='_blank'><img src='images/ie-warn/ie-warning-firefox.jpg' alt='Download Firefox'></a>
                            <a href='http://www.opera.com/download/' target='_blank'><img src='images/ie-warn/ie-warning-opera.jpg' alt='Download Opera'></a>
                            <a href='http://www.apple.com/safari/download/' target='_blank'><img src='images/ie-warn/ie-warning-safari.jpg' alt='Download Safari'></a>
                            <a href='http://www.google.com/chrome' target='_blank'><img src='images/ie-warn/ie-warning-chrome.jpg' alt='Download Google Chrome'></a>
                        </div>
                    </div>
                </div>
                <![endif]-->
                
                <!-- HEADER 1 FONT WHITE TRANSPARENT -->
        <div class="header-black-bg"></div> <!-- NEED FOR TRANSPARENT HEADER ON MOBILE -->
                <header id="nav" class="header header-1 header-black">
                  <div class="header-wrapper">
                    <div class="container-m-30 clearfix">
                      <div class="logo-row">
                      
                        <!-- LOGO --> 
                        <div class="logo-container-2">
                <div class="logo-2">
                  <a href="elementary/index.html" class="clearfix">
                    <img src="elementary/img/logo-white.png" class="logo-img" alt="Logo">
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
                @include('layoutsweb.topbar')
                    <!-- END main-menu-container -->
                    
                    <!-- SEARCH READ DOCUMENTATION -->
                    <ul class="cd-header-buttons">
                        <li><a class="cd-search-trigger" href="elementary/#cd-search"><span></span></a></li>
                    </ul> <!-- cd-header-buttons -->
                    <div id="cd-search" class="cd-search">
                        <form class="form-search" id="searchForm" action="page-search-results.html" method="get">
                            <input type="text" value="" name="q" id="q" placeholder="Search...">
                        </form>
                    </div>
                    
                  </div>
                  <!-- END header-wrapper -->
                  
                </header>
       
        <!-- SLIDER Revo Hero 4 -->
        <div class="relative">

            <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_280_1_wrapper" style="margin:0px auto;background-color:#101010;padding:0px;margin-top:0px;margin-bottom:0px;">
                <!-- START REVOLUTION SLIDER 5.1.4 fullwidth mode -->
                <div class="rev_slider fullwidthabanner" data-version="5.1.4" id="rev_slider_280_1" style="display:none;">
                    <ul>

                        <!-- SLIDE  -->
                        <li data-index="rs-673" data-transition="zoomout" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-rotate="0" data-saveperformance="off" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="elementary/img/1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption font-poppins font-white tp-resizeme rs-parallaxlevel-6" id="slide-8981-layer-1" style="z-index: 8; white-space: nowrap;"
                            data-fontsize="['20','24','24','24']" 
                            data-fontweight="100" 
                            data-height="none" 
                            data-lineheight="['74','74','74','74']" 
                            data-responsive_offset="on" 
                            data-splitin="none" 
                            data-splitout="none" 
                            data-start="350" 
                            data-transform_idle="o:1;"
                         
                                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" 
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                            data-whitespace="nowrap" 
                            data-width="none" 
                            data-x="['center','center','center','center']" 
                            data-hoffset="['0','0','0',0']" 
                            data-y="['center','center','center','center']" 
                            data-voffset="['-70','-90','-70','-55']">
                             FestProyecto es un repositorio de la Corporación Unificada nacional (CUN)
                            </div> 

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption font-poppins font-white tp-resizeme rs-parallaxlevel-6" id="slide-8981-layer-2" style="z-index: 8; white-space: nowrap;"
                            data-fontsize="['70','50','80','50']" 
                            data-fontweight="100" 
                            data-height="none" 
                            data-lineheight="['120','130','110','95']" 
                            data-responsive_offset="on" 
                            data-splitin="none" 
                            data-splitout="none" 
                            data-start="550" 
                            data-transform_idle="o:1;"
                         
                                     data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                     data-mask_in="x:0px;y:0px;" 
                                     data-mask_out="x:inherit;y:inherit;"
                            data-whitespace="nowrap" 
                            data-width="none" 
                            data-x="['center','center','center','center']" 
                            data-hoffset="['0','0','0',0']" 
                            data-y="['center','center','center','center']" 
                            data-voffset="['0','0','0',0']">
                              Inicia sesión
                            </div>
                             
                            <!-- LAYER NR. 3 -->
                 <!-- 
           <div class="tp-caption font-white tp-resizeme rs-parallaxlevel-6" id="slide-898-layer-3" style="z-index: 8; white-space: nowrap;"
                            data-fontsize="['60','60','60','60']" 
                            data-fontweight="600" 
                            data-height="none" 
                            data-lineheight="['112','92','90','90']" 
                            data-responsive_offset="on" 
                            data-splitin="none" 
                            data-splitout="none" 
                            data-start="1000" 
                            data-transform_idle="o:1;" 
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                            data-transform_out="y:[100%];s:1000;s:1000;" 
                            data-mask_in="x:0px;y:0px;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                            data-whitespace="nowrap" 
                            data-width="none" 
                            data-x="['center','center','center','center']" 
                            data-hoffset="['0','0','0','0']" 
                            data-y="['center','center','center','center']"
                            data-voffset="['120','120','100',80']" >
                              <a class="popup-youtube " href="elementary/https://www.youtube.com/watch?v=0gv7OC9L2s8">                 <span class="icon icon-music-play-button"></span></a>
                            </div>
                 -->

                        </li>
                            
                    </ul>
                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                </div>
            </div>
            <!-- END REVOLUTION SLIDER -->
          
        </div>
                
        <!-- FEATURES 22 FORM -->
       @yield('content')


                <!-- BACK TO TOP -->
                <p id="back-top">
          <a href="elementary/#top" title="Back to Top"><span class="icon icon-arrows-up"></span></a>
        </p>
        
            </div><!-- End BG -->   
        </div><!-- End wrap --> 
            
<!-- JS begin -->

        <!-- jQuery  -->
        <script type="text/javascript" src="elementary/js/jquery.min.js"></script>

        <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="elementary/js/bootstrap.min.js"></script>     

        <!-- MAGNIFIC POPUP -->
        <script src='js/jquery.magnific-popup.min.js'></script>
    
    <!-- PORTFOLIO SCRIPTS -->
    <script type="text/javascript" src="elementary/js/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="elementary/js/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="elementary/js/masonry.pkgd.min.js"></script>
    
    <!-- APPEAR -->    
    <script type="text/javascript" src="elementary/js/jquery.appear.js"></script>
    
    <!-- OWL CAROUSEL -->    
    <script type="text/javascript" src="elementary/js/owl.carousel.min.js"></script>
    
    <!-- JQUERY TWEETS -->
        <script src="elementary/js/twitter/jquery.tweet.js"></script> 
    
    <!-- MAIN SCRIPT -->
        <script src="elementary/js/main.js"></script>
        
        <!-- REVOSLIDER SCRIPTS  -->
    <script src="elementary/revo-slider/js/jquery.themepunch.tools.min.js" type="text/javascript">
    </script>
    <script src="elementary/revo-slider/js/jquery.themepunch.revolution.min.js" type="text/javascript">
    </script>
    
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
      The following part can be removed on Server for On Demand Loading) -->
    <script src="elementary/revo-slider/js/extensions/revolution.extension.actions.min.js" type="text/javascript"></script>
    <script src="elementary/revo-slider/js/extensions/revolution.extension.carousel.min.js" type="text/javascript"></script>
    <script src="elementary/revo-slider/js/extensions/revolution.extension.kenburn.min.js" type="text/javascript"></script>
    <script src="elementary/revo-slider/js/extensions/revolution.extension.layeranimation.min.js" type="text/javascript">
    </script>
    <script src="elementary/revo-slider/js/extensions/revolution.extension.migration.min.js" type="text/javascript"></script>
    <script src="elementary/revo-slider/js/extensions/revolution.extension.navigation.min.js" type="text/javascript"></script>
    <script src="elementary/revo-slider/js/extensions/revolution.extension.parallax.min.js" type="text/javascript"></script>
    <script src="elementary/revo-slider/js/extensions/revolution.extension.slideanims.min.js" type="text/javascript"></script>
    <script src="elementary/revo-slider/js/extensions/revolution.extension.video.min.js" type="text/javascript"></script>
      
    <!-- SLIDER REVOLUTION INITIALIZATION  -->
    <script type="text/javascript">
      jQuery(document).ready(function() {
          
        jQuery("#rev_slider_280_1").show().revolution({
          sliderType: "hero",
          jsFileLocation: "revo-slider/js/",
          sliderLayout: "fullwidth",
          dottedOverlay: "none",
          delay: 9000,
          responsiveLevels: [1240, 1024, 778, 480],
          visibilityLevels: [1240, 1024, 778, 480],
          gridwidth: [1240, 1024, 778, 480],
          gridheight: [640, 550, 550, 550],
          lazyType: "none",
          parallax: {
            type: "off",
            origo: "slidercenter",
            speed: 1000,
            levels: [0],
            type: "scroll",
            disable_onmobile: "on"
          },
          shadow: 0,
          spinner: "spinner2",
          autoHeight: "off",
          fullScreenAutoWidth: "off",
          fullScreenAlignForce: "off",
          fullScreenOffsetContainer: "",
          fullScreenOffset: "",
          disableProgressBar: "on",
          hideThumbsOnMobile: "off",
          hideSliderAtLimit: 0,
          hideCaptionAtLimit: 0,
          hideAllCaptionAtLilmit: 0,
          debugMode: false,
          fallbacks: {
            simplifyAll: "off",
            disableFocusListener: false,
          }
        });
       
      }); /*ready*/
    </script>
  
<!-- JS end --> 
    
    </body>
</html>     