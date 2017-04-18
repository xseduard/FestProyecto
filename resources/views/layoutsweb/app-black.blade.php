<!DOCTYPE html>

<html>
 	<head>
		<title>{{ $page_title or "FestProyecto Dashboard" }}</title>
    <link rel="apple-touch-icon" sizes="57x57" href="../apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon-16x16.png">
    <link rel="manifest" href="../manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

		<meta charset=utf-8 >
		<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
		<meta name="robots" content="index, follow" > 
		<meta name="keywords" content="HTML5 Template" > 
		<meta name="description" content="Elementy - Responsive HTML5 Template" > 
		<meta name="author" content="Vladimir Azarushkin">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="theme-color" content="#2a2b2f">
    
    @include('layoutsweb.styles')

    @yield('customcss')
		
	</head>
	<body>	
		  <!-- LOADER --> 
  <div id="loader-overflow">
    <div class="loader-cont">
      <div class="loader-inner pacman">
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
  </div>

		<div id="wrap" class="boxed ">
			<div class="grey-bg"> <!-- Grey BG  -->					
							
				<!-- HEADER 1 FONT BLACK NO TRANSPARENT NO MOBILE TRANSPARENT -->
				<!-- Header -->
        <!-- SLIDER Revo Hero 4 -->
    @yield('head')    
        
        <!-- COTENT CONTAINER -->
        <div class="container p-140-cont">
          <div class="row">         
            @yield('content')
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
    @include('layoutsweb.scripts')
    @yield('customjs')

	</body>
</html>		