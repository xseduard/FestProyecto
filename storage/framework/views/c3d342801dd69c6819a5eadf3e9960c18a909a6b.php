<!-- Left side column. contains the sidebar -->


<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar", id="navegacion">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo e(asset("/bower_components/admin-lte/dist/img/userADMIN.jpg")); ?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p> <?php echo e(Auth::user()->name); ?></p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> En linea</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Buscar..."/>
<span class="input-group-btn">
  <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
</span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">MENU</li>
            <!-- Optionally, you can add icons to the links -->
            <li ruta="home"><a href="<?php echo e(url('/home')); ?>"><span>Inicio</span></a></li>
            <li ruta="proyectoInvestigacions"><a href="<?php echo e(url('/proyectoInvestigacions')); ?>"><span>Proyecto Investigaciòn</span></a></li>
            <li ruta="nodos"><a href="<?php echo e(url('/nodos')); ?>"><span>Departamentos</span></a></li>
            <li ruta="pais"><a href="<?php echo e(url('/pais')); ?>"><span>Pais</span></a></li>
            <li ruta="universidades"><a href="<?php echo e(url('/universidades')); ?>"><span>Universidades</span></a></li>
            <li ruta="semilleros"><a href="<?php echo e(url('/semilleros')); ?>"><span>Semilleros</span></a></li>
            <li ruta="eStudiantes"><a href="<?php echo e(url('/eStudiantes')); ?>"><span>Estudiantes</span></a></li>
            <li ruta="nivelformacions"><a href="<?php echo e(url('/nivelformacions')); ?>"><span>Nivel Formacion</span></a></li>
            <li ruta="asignaturas"><a href="<?php echo e(url('/asignaturas')); ?>"><span>Asignaturas</span></a></li>
            <li ruta="areainvestigacions"><a href="<?php echo e(url('/areainvestigacions')); ?>"><span>Area de investigacion</span></a></li>
            <li ruta="subareas"><a href="<?php echo e(url('/subareas')); ?>"><span>Subareas</span></a></li>
            
            <li ruta="academicos"><a href="<?php echo e(url('/academicos')); ?>"><span>Academicos</span></a></li>

            <li ruta="programas"><a href="<?php echo e(url('/programas')); ?>"><span>Programas</span></a></li>
            <li ruta="docentes"><a href="<?php echo e(url('/docentes')); ?>"><span>Docentes</span></a></li>
            <li ruta="doncencias"><a href="<?php echo e(url('/doncencias')); ?>"><span>doncencias</span></a></li>
            <li ruta="estudiantes"><a href="<?php echo e(url('/estudiantes')); ?>"><span>Estudiantes</span></a></li>
            <li ruta="eventoCs"><a href="<?php echo e(url('/eventoCs')); ?>"><span>Enventos</span></a></li>
            <li ruta="grupoInvestigacions"><a href="<?php echo e(url('/grupoInvestigacions')); ?>"><span>Grupos de investigación</span></a></li>
            <li ruta="lineaIs"><a href="<?php echo e(url('/lineaIs')); ?>"><span>Lineas de investigación</span></a></li>
            <li ruta="ponencias"><a href="<?php echo e(url('/ponencias')); ?>"><span>Ponencias</span></a></li>
            <li ruta="productoGrupos"><a href="<?php echo e(url('/productoGrupos')); ?>"><span>Productos de grupo</span></a></li>
            <li ruta="programas"><a href="<?php echo e(url('/programas')); ?>"><span>Programas</span></a></li>
            <li ruta="proyectoAulas"><a href="<?php echo e(url('/proyectoAulas')); ?>"><span>Proyecto de aulas</span></a></li>
            <li ruta="proyectos"><a href="<?php echo e(url('/proyectos')); ?>"><span>Proyectos</span></a></li>
            <li ruta="semilleros"><a href="<?php echo e(url('/semilleros')); ?>"><span>Semilleros</span></a></li>
            <li ruta="trabajoGrados"><a href="<?php echo e(url('/trabajoGrados')); ?>"><span>Trabajos de Grado</span></a></li>

            <li class="treeview">
                <a href="#"><span>Tablas relacionales</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li ruta="rArbitras"><a href="<?php echo e(url('/rArbitras')); ?>"><span>Arbitra</span></a></li>
                    <li ruta="rCoordinas"><a href="<?php echo e(url('/rCoordinas')); ?>"><span>Coordina</span></a></li>
                    <li ruta="rCoordinasems"><a href="<?php echo e(url('/rCoordinasems')); ?>"><span>Coordinasem</span></a></li>
                    <li ruta="rDesarrollas"><a href="<?php echo e(url('/rDesarrollas')); ?>"><span>Desarrolla</span></a></li>
                    <li ruta="rEstudias"><a href="<?php echo e(url('/rEstudias')); ?>"><span>Estudia</span></a></li>
                    <li ruta="rIntegras"><a href="<?php echo e(url('/rIntegras')); ?>"><span>Integra</span></a></li>
                    <li ruta="rOfreces"><a href="<?php echo e(url('/rOfreces')); ?>"><span>Ofrece</span></a></li>
                    <li ruta="rRealizas"><a href="<?php echo e(url('/rRealizas')); ?>"><span>Realiza</span></a></li>
                    <li ruta="rSuscribes"><a href="<?php echo e(url('/rSuscribes')); ?>"><span>Suscribe</span></a></li>
                </ul>
            </li>

            



            <li ruta="admin"><a href="<?php echo e(url('/admin')); ?>"><span>Admin</span></a></li>
            <li ruta="forma"><a href="<?php echo e(url('/forma')); ?>"><span>Formas</span></a></li>
            <li ruta="pruebaespecials"><a href="<?php echo e(url('/pruebaespecials')); ?>"><span>Pruebas</span></a></li>
            <li ruta="unopruebas"><a href="<?php echo e(url('/unopruebas')); ?>"><span>Pruebas 2</span></a></li>
           <!-- <li class="active"><a href="#"><span>Link Activo</span></a></li>
            
            <li class="treeview">
                <a href="#"><span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Link in level 2</a></li>
                    <li><a href="#">Link in level 2</a></li>
                </ul>
            </li>
            -->
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
