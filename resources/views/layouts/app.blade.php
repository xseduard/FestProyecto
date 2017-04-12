<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="UTF-8">
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

    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    {!! Html::style('/bower_components/admin-lte/bootstrap/css/bootstrap.min.css') !!}
    <!-- Font Awesome Icons -->
    {!! Html::style('/bower_components/components-font-awesome/css/font-awesome.min.css') !!}
    <!-- Ionicons -->
    {!! Html::style('/bower_components/ionicons/css/ionicons.min.css') !!}
    <!-- Theme style -->
    {!! Html::style('/bower_components/admin-lte/dist/css/AdminLTE.css') !!}
    <!-- AdminLTE Skins.
    -->
    {!! Html::style('/bower_components/admin-lte/dist/css/skins/_all-skins.min.css') !!}

    {!! Html::style('../resources/assets/css/main.css') !!}

    {!! Html::style('/bower_components/radio-buttons/awesome-bootstrap-checkbox.css') !!}

    <link rel="stylesheet" href="bower_components/sweetalert/dist/sweetalert.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
     @yield('customcss')
</head>
<body class="skin-purple">
<div class="wrapper">

    <!-- Header -->
    @include('layouts.header')

    <!-- Sidebar -->
    @if (Auth::guest())
                        
@else
    @include('layouts.sidebar')
@endif
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{ $page_title or null }}
                <small>{{ $page_description or null }}</small>
            </h1>
            <!-- You can dynamically generate breadcrumbs here -->
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Nivel</a></li>
                <li class="active">Aqui</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content" >
            <!-- Your Page Content Here -->
            <div class="row"> 
             <div class="col-lg-12">
                @yield('content-ppal')
                @yield('content')
            </div>
            
            </div>
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <!-- Footer -->
    @include('layouts.footer')

</div><!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.3 -->
{!! Html::script('bower_components/admin-lte/plugins/jQuery/jQuery-2.1.4.min.js') !!}
<!-- Bootstrap 3.3.2 JS -->
{!! Html::script('bower_components/admin-lte/bootstrap/js/bootstrap.min.js') !!}
<!-- AdminLTE App -->
{!! Html::script('bower_components/admin-lte/dist/js/app.min.js') !!}
<!-- sweetalert -->
{!! Html::script('bower_components/sweetalert/dist/sweetalert.min.js') !!}
{!! Html::script('/js/main.js') !!}
{!! Html::script('../resources/assets/js/main.js') !!}

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience -->
       @yield('customjs')
</body>
</html>