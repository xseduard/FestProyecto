<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo e(isset($page_title) ? $page_title : "FestProyecto Dashboard"); ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <?php echo Html::style('/bower_components/admin-lte/bootstrap/css/bootstrap.min.css'); ?>

    <!-- Font Awesome Icons -->
    <?php echo Html::style('/bower_components/components-font-awesome/css/font-awesome.min.css'); ?>

    <!-- Ionicons -->
    <?php echo Html::style('/bower_components/ionicons/css/ionicons.min.css'); ?>

    <!-- Theme style -->
    <?php echo Html::style('/bower_components/admin-lte/dist/css/AdminLTE.css'); ?>

    <!-- AdminLTE Skins.
    -->
    <?php echo Html::style('/bower_components/admin-lte/dist/css/skins/skin-green.min.css'); ?>


    <?php echo Html::style('../resources/assets/css/main.css'); ?>


    <?php echo Html::style('/bower_components/radio-buttons/awesome-bootstrap-checkbox.css'); ?>


    <link rel="stylesheet" href="bower_components/sweetalert/dist/sweetalert.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
     <?php echo $__env->yieldContent('customcss'); ?>
</head>
<body class="skin-green">
<div class="wrapper">

    <!-- Header -->
    <?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!-- Sidebar -->
    <?php if(Auth::guest()): ?>
                        
<?php else: ?>
    <?php echo $__env->make('layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <?php echo e(isset($page_title) ? $page_title : null); ?>

                <small><?php echo e(isset($page_description) ? $page_description : null); ?></small>
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
                <?php echo $__env->yieldContent('content-ppal'); ?>
             </div>
                      
            <div class="col-lg-9">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
             <div class="col-lg-3">
                <?php echo $__env->yieldContent('content-right'); ?>
            </div>
            </div>
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <!-- Footer -->
    <?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</div><!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.3 -->
<?php echo Html::script('bower_components/admin-lte/plugins/jQuery/jQuery-2.1.4.min.js'); ?>

<!-- Bootstrap 3.3.2 JS -->
<?php echo Html::script('bower_components/admin-lte/bootstrap/js/bootstrap.min.js'); ?>

<!-- AdminLTE App -->
<?php echo Html::script('bower_components/admin-lte/dist/js/app.min.js'); ?>

<!-- sweetalert -->
<?php echo Html::script('bower_components/sweetalert/dist/sweetalert.min.js'); ?>

<?php echo Html::script('/js/main.js'); ?>

<?php echo Html::script('../resources/assets/js/main.js'); ?>


<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience -->
       <?php echo $__env->yieldContent('customjs'); ?>
</body>
</html>