<!DOCTYPE html>
<!--

	Theme Name: Elementy
	Description: HTML/CSS 
	Author: Abcgomel 
	Designed & Coded by Abcgomel
	
-->

<html>
 	<head>
		<title>{{ $page_title or "FestProyecto Dashboard" }}</title>
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

		<meta charset=utf-8 >
		<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
		<meta name="robots" content="index, follow" > 
		<meta name="keywords" content="HTML5 Template" > 
		<meta name="description" content="Elementy - Responsive HTML5 Template" > 
		<meta name="author" content="Vladimir Azarushkin">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="theme-color" content="#2a2b2f">
    
@yield('customcss')
  		
<!-- CSS -->
    <!--  GOOGLE FONT -->	
    {!! Html::style('http://fonts.googleapis.com/css?family=Poppins:400,600,300%7COpen+Sans:400,300,700') !!}
      
    <!-- REVOSLIDER CSS SETTINGS -->
    
    <!-- REVOLUTION STYLE SHEETS -->
    {!! Html::style('elementary/revo-slider/css/settings-custom.css') !!}
    
    <!--  BOOTSTRAP -->
    {!! Html::style('elementary/css/bootstrap.min.css') !!}
	
    <!-- ICONS ELEGANT FONT & FONT AWESOME & LINEA ICONS  -->	
    {!! Html::style('elementary/css/icons-fonts.css') !!}	
		
    <!--  CSS THEME -->	
    {!! Html::style('elementary/css/style.css') !!}	
		
    <!-- ANIMATE -->
    {!! Html::style('elementary/css/animate.min.css') !!}	
	
		
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
				
				<!-- HEADER 1 FONT BLACK NO TRANSPARENT NO MOBILE TRANSPARENT -->
				<!-- Header -->
    @include('layoutsweb.header')
      
        <!-- SLIDER Revo Hero 4 -->
    @include('layoutsweb.revoblog')
        
        <!-- COTENT CONTAINER -->
        <div class="container p-140-cont">
          <div class="row">
            

    @yield('content')

          </div>
          
          <!-- PAGINATION -->
          <div class="row mt-0">
            <nav class="blog-pag">
              <ul class="pagination pag2 m-0">
              <li><a href="#"><i class="fa fa-angle-left"></i><span class="sr-only">Previous</span></a></li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i><span class="sr-only">Next</span></a></li>
              </ul>
            </nav>
          </div>
          
        </div>
	        
        
        <!-- NEWS LETTER -->
        <div class="page-section nl-cont">
          <div class="container">
            <div class="col-sm-8">
            	<h2 class="section-title2 font-light pr-0 nl-title">Newsletter</h2>
            </div>
            <div class="col-sm-4">
            	<div class="relative" >
            	  <div id="mc_embed_signup" class="nl-form-container clearfix">
            	    <form action="http://abcgomel.us9.list-manage.com/subscribe/post-json?u=ba37086d08bdc9f56f3592af0&amp;id=e38247f7cc&amp;c=?" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="newsletterform validate" target="_blank" novalidate>   <!-- EDIT THIS ACTION URL (add "post-json?u" instead of "post?u" and appended "&amp;c=?" to the end of this URL) -->
            	      <input type="email" value="" name="EMAIL" class="email nl-email-input" id="mce-EMAIL" placeholder="Email address" required>
            	      <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
            	      <div style="position: absolute; left: -5000px;"><input type="text" name="b_ba37086d08bdc9f56f3592af0_e38247f7cc" tabindex="-1" value=""></div>
            	          
            	      <button id="mc-embedded-subscribe" class="nl2-btn" type="submit" name="subscribe">
            	            <span class="icon icon-arrows-slim-right"></span>
            	          </button>
            	    </form>
            	    <div id="notification_container"  ></div>
            	  </div>
            	</div>
            </div>
          </div>
        </div>
  
        <!-- FOOTER 4 BLACK WITH TWITTER FEED -->
       @include('layoutsweb.footer')
        
				<!-- BACK TO TOP -->
				<p id="back-top">
          <a href="elementary/#top" title="Back to Top"><span class="icon icon-arrows-up"></span></a>
        </p>
        
			</div><!-- End BG -->	
		</div><!-- End wrap -->	
			
<!-- JS begin -->

		<!-- jQuery  -->
    {!! Html::script('') !!}
		{!! Html::script('elementary/js/jquery.min.js') !!}

		<!-- Include all compiled plugins (below), or include individual files as needed -->
    {!! Html::script('elementary/js/bootstrap.min.js') !!}

		<!-- MAGNIFIC POPUP -->
		{!! Html::script('elementary/js/jquery.magnific-popup.min.js') !!}
    
    <!-- PORTFOLIO SCRIPTS -->
    {!! Html::script('elementary/js/isotope.pkgd.min.js') !!}
    {!! Html::script('elementary/js/imagesloaded.pkgd.min.js') !!}
    {!! Html::script('elementary/js/masonry.pkgd.min.js') !!}
    
    <!-- APPEAR -->    
    {!! Html::script('elementary/js/jquery.appear.js') !!}
    
    <!-- OWL CAROUSEL -->    
    {!! Html::script('elementary/js/owl.carousel.min.js') !!}
    
    <!-- JQUERY TWEETS -->
		{!! Html::script('elementary/js/twitter/jquery.tweet.js') !!}
    
    <!-- MAIN SCRIPT -->
		{!! Html::script('elementary/js/main.js') !!}
		
		<!-- REVOSLIDER SCRIPTS  -->
    {!! Html::script('elementary/revo-slider/js/jquery.themepunch.tools.min.js') !!}
    
    {!! Html::script('elementary/revo-slider/js/jquery.themepunch.revolution.min.js') !!}
    
    
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
      The following part can be removed on Server for On Demand Loading) -->
    {!! Html::script('elementary/revo-slider/js/extensions/revolution.extension.actions.min.js') !!}
    {!! Html::script('elementary/revo-slider/js/extensions/revolution.extension.carousel.min.js') !!}
    {!! Html::script('elementary/revo-slider/js/extensions/revolution.extension.kenburn.min.js') !!}
    {!! Html::script('elementary/revo-slider/js/extensions/revolution.extension.layeranimation.min.js') !!}
  
    {!! Html::script('elementary/revo-slider/js/extensions/revolution.extension.migration.min.js') !!}
    {!! Html::script('elementary/revo-slider/js/extensions/revolution.extension.navigation.min.js') !!}
    {!! Html::script('elementary/revo-slider/js/extensions/revolution.extension.parallax.min.js') !!}
    {!! Html::script('elementary/revo-slider/js/extensions/revolution.extension.slideanims.min.js') !!}
    {!! Html::script('elementary/revo-slider/js/extensions/revolution.extension.video.min.js') !!}

    @yield('customjs')
      
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
          gridheight: [500, 450, 400, 400],
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