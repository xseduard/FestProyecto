<!-- Left side column. contains the sidebar -->


<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar", id="navegacion">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset("/bower_components/admin-lte/dist/img/userADMIN.jpg") }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p> {{ Auth::user()->name }}</p>
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
            <li ruta="home"><a href="{{ url('/home') }}"><span>Inicio</span></a></li>
            <li ruta="proyectoInvestigacions"><a href="{{ url('/proyectoInvestigacions') }}"><span>Proyecto Investigaciòn</span></a></li>
            <li ruta="nodos"><a href="{{ url('/nodos') }}"><span>Departamentos</span></a></li>
            <li ruta="pais"><a href="{{ url('/pais') }}"><span>Pais</span></a></li>
            <li ruta="universidades"><a href="{{ url('/universidades') }}"><span>Universidades</span></a></li>
            <li ruta="semilleros"><a href="{{ url('/semilleros') }}"><span>Semilleros</span></a></li>
            <li ruta="eStudiantes"><a href="{{ url('/eStudiantes') }}"><span>Estudiantes</span></a></li>
            <li ruta="nivelformacions"><a href="{{ url('/nivelformacions') }}"><span>Nivel Formacion</span></a></li>
            <li ruta="asignaturas"><a href="{{ url('/asignaturas') }}"><span>Asignaturas</span></a></li>
            <li ruta="areainvestigacions"><a href="{{ url('/areainvestigacions') }}"><span>Area de investigacion</span></a></li>
            <li ruta="subareas"><a href="{{ url('/subareas') }}"><span>Subareas</span></a></li>
            
            <li ruta="academicos"><a href="{{ url('/academicos') }}"><span>Academicos</span></a></li>

            <li ruta="programas"><a href="{{ url('/programas') }}"><span>Programas</span></a></li>
            <li ruta="docentes"><a href="{{ url('/docentes') }}"><span>Docentes</span></a></li>
            <li ruta="doncencias"><a href="{{ url('/doncencias') }}"><span>doncencias</span></a></li>
            <li ruta="estudiantes"><a href="{{ url('/estudiantes') }}"><span>Estudiantes</span></a></li>
            <li ruta="eventoCs"><a href="{{ url('/eventoCs') }}"><span>Enventos</span></a></li>
            <li ruta="grupoInvestigacions"><a href="{{ url('/grupoInvestigacions') }}"><span>Grupos de investigación</span></a></li>
            <li ruta="lineaIs"><a href="{{ url('/lineaIs') }}"><span>Lineas de investigación</span></a></li>
            <li ruta="ponencias"><a href="{{ url('/ponencias') }}"><span>Ponencias</span></a></li>
            <li ruta="productoGrupos"><a href="{{ url('/productoGrupos') }}"><span>Productos de grupo</span></a></li>
            <li ruta="programas"><a href="{{ url('/programas') }}"><span>Programas</span></a></li>
            <li ruta="proyectoAulas"><a href="{{ url('/proyectoAulas') }}"><span>Proyecto de aulas</span></a></li>
            <li ruta="proyectos"><a href="{{ url('/proyectos') }}"><span>Proyectos</span></a></li>
            <li ruta="semilleros"><a href="{{ url('/semilleros') }}"><span>Semilleros</span></a></li>
            <li ruta="trabajoGrados"><a href="{{ url('/trabajoGrados') }}"><span>Trabajos de Grado</span></a></li>

            <li class="treeview">
                <a href="#"><span>Tablas relacionales</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li ruta="rArbitras"><a href="{{ url('/rArbitras') }}"><span>Arbitra</span></a></li>
                    <li ruta="rCoordinas"><a href="{{ url('/rCoordinas') }}"><span>Coordina</span></a></li>
                    <li ruta="rCoordinasems"><a href="{{ url('/rCoordinasems') }}"><span>Coordinasem</span></a></li>
                    <li ruta="rDesarrollas"><a href="{{ url('/rDesarrollas') }}"><span>Desarrolla</span></a></li>
                    <li ruta="rEstudias"><a href="{{ url('/rEstudias') }}"><span>Estudia</span></a></li>
                    <li ruta="rIntegras"><a href="{{ url('/rIntegras') }}"><span>Integra</span></a></li>
                    <li ruta="rOfreces"><a href="{{ url('/rOfreces') }}"><span>Ofrece</span></a></li>
                    <li ruta="rRealizas"><a href="{{ url('/rRealizas') }}"><span>Realiza</span></a></li>
                    <li ruta="rSuscribes"><a href="{{ url('/rSuscribes') }}"><span>Suscribe</span></a></li>
                </ul>
            </li>

            



            <li ruta="admin"><a href="{{ url('/admin') }}"><span>Admin</span></a></li>
            <li ruta="forma"><a href="{{ url('/forma') }}"><span>Formas</span></a></li>
            <li ruta="pruebaespecials"><a href="{{ url('/pruebaespecials') }}"><span>Pruebas</span></a></li>
            <li ruta="unopruebas"><a href="{{ url('/unopruebas') }}"><span>Pruebas 2</span></a></li>
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
