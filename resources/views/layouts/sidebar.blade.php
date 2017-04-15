<!-- Left side column. contains the sidebar -->


<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar", id="navegacion">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">

             <img src="
            @if (Auth::user()->role=='administrador')
                {{asset('/bower_components/admin-lte/dist/img/userADMIN.jpg')}}
            @else
                {{asset('/bower_components/admin-lte/dist/img/user4-128x128.jpg')}}
            @endif
               " class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p> {{ Auth::user()->nombres }}</p>
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
            
          

            <li class="treeview active">
                <a href="#"><span>Ajustes Generales</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">                        
                        <li ruta="departamentos"><a href="{{ url('/departamentos') }}"><span>Departamentos</span></a></li>
                        <li ruta="municipios"><a href="{{ url('/municipios') }}"><span>Municipios</span></a></li>                        
                        <li ruta="areas"><a href="{{ url('/areas') }}"><span>Facultades (Áreas)</span></a></li>              
                        <li ruta="programas"><a href="{{ url('/programas') }}"><span>programas</span></a></li>   
                        <li ruta="regionals"><a href="{{ url('/regionals') }}"><span>Regionales</span></a></li>   
                        <li ruta="sedes"><a href="{{ url('/sedes') }}"><span>Sedes</span></a></li> 
                        <li ruta="estados"><a href="{{ url('/estados') }}"><span>Estados</span></a></li> 
                        <li ruta="lineaInvestigacions"><a href="{{ url('/lineaInvestigacions') }}"><span>Lineas de investigación</span></a></li> 
                         <li ruta="grupoInvestigacions"><a href="{{ url('/grupoInvestigacions') }}"><span>Grupo de investigación</span></a></li>
                         <li ruta="grupoJurados"><a href="{{ url('/grupoJurados') }}"><span>Comité de Jurados</span></a></li>
                         <li ruta="jurados"><a href="{{ url('/jurados') }}"><span>Jurados</span></a></li>
                         <li ruta="eventoExpos"><a href="{{ url('/eventoExpos') }}"><span>Evento Expo</span></a></li>
                         <li ruta="estudiantes"><a href="{{ url('/estudiantes') }}"><span>Estudiantes</span></a></li>
                         <li ruta="semilleros"><a href="{{ url('/semilleros') }}"><span>Semilleros</span></a></li>
                         <li ruta="proyectos"><a href="{{ url('/proyectos') }}"><span>Proyectos</span></a></li>
                         <li ruta="notas"><a href="{{ url('/notas') }}"><span>Notas</span></a></li>


                         

                                               
                </ul>
            </li>

            <li class="treeview">
                <a href="#"><span>Menu anterior</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                   
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
                </ul>
            </li>



            <li ruta="admin"><a href="{{ url('/admin') }}"><span>Admin</span></a></li>
            <li ruta="forma"><a href="{{ url('/forma') }}"><span>Formas</span></a></li>
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
