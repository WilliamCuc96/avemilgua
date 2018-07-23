<div class="navbar-default sidebar bg-danger" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <!--
            <li class="sidebar-search">
                <form method="POST" >
                    <div class="input-group custom-search-form">
                        <input class="text" name="p" type="hidden" value="proceso/indicadores_list.php"/>
                        <input name="codigoc" value="" type="text" class="form-control" placeholder="Buscar...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
            </li>
            -->
            <!-- <li><a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Tablero de Administración</a></li> -->
            <li>
                <a href="index.php?p=usuarios/av_usuarios_edit.php"><i class = "fa fa-user-plus fa-fw"></i> Inscripción de Veterano</a>
            </li>
            <li>
              <a><i class = "fa fa-plus-circle fa-fw"></i> Veteranos<span class="fa arrow"></span></a>
              <ul class="nav nav-second-level">
                <li><a href="index.php?p=usuarios/veteranos_busc.php"><i class = "fa fa-search-plus fa-fw"></i> Búsqueda Personalizada</a></li>
                <li><a href="index.php?p=usuarios/av_usuarios_list.php"><i class = "fa fa-list fa-fw"></i> Lista de Veteranos</a></li>
              </ul>
            </li>
            <li>
              <a><i class = "fa fa-plus-circle fa-fw"></i> Descuentos IPM<span class="fa arrow"></span></a>
              <ul class="nav nav-second-level">
                <li><a href="index.php?p=usuarios/av_ipm_edit.php"><i class = "fa fa-user-plus fa-fw"></i> Nuevo Donante </a></li>
                <li><a href="index.php?p=usuarios/av_ipm_list.php"><i class = "fa fa-list fa-fw"></i> Lista de Donantes </a></li>
              </ul>
            </li>
            <?php if ($_SESSION['usuario_nivel'] == 1 OR $_SESSION['usuario_nivel'] == 4) { ?>

            <?php }; ?>

            <?php if ($_SESSION['usuario_nivel'] == 1 OR $_SESSION['usuario_nivel'] == 2 OR $_SESSION['usuario_nivel'] == 4) { ?>
            <!--
            <li>
                <a href="#"><i class="fa fa-briefcase fa-fw"></i> Administración<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="index.php?p=proceso/indicadores_go.php">Ingreso de Indicadores</a></li>
                    <li><a href="index.php?p=proceso/subirarchivo_go.php">Subir Archivo</a></li>
                </ul>

            </li>
            -->
            <?php }; ?>

            <!-- <li>
                <a href="#"><i class="fa fa-file-excel-o fa-fw"></i> Reportes (.XLS)<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">

                    <?php if ($_SESSION['usuario_nivel'] == 1) { ?>

                    <?php }; ?>
                    <?php if ($_SESSION['usuario_nivel'] <= 2) { ?>

                    <?php }; ?>
                    <?php if ($_SESSION['usuario_nivel'] <= 3) { ?>

                    <?php }; ?>
                    <?php if ($_SESSION['usuario_nivel'] <= 4) { ?>
                    <?php }; ?>
                    <?php if ($_SESSION['usuario_nivel'] <= 5) { ?>
                        <li><a href="index.php?p=reportes/indicadores_go.php">Indicadores</a></li>
                        <li><a href="index.php?p=reportes/topten_go.php">Top 10</a></li> -->
                        <!--
                        <li><a href="index.php?p=soporte/sql_gestion.php&sqltext=select * from cy_topten">Top 10</a></li>
                        -->
                    <?php }; ?>
                <!-- </ul>
            </li> -->

            <?php if ($_SESSION['usuario_nivel'] != 3) { ?>
            <li>
                <a href="#"><i class="fa fa-cogs fa-fw"></i> Sistema<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <?php if ($_SESSION['usuario_nivel'] == 1) { ?>
                        <li><a href="index.php?p=sistema/unidades_list.php">Unidades</a></li>
                        <li><a href="index.php?p=sistema/instituciones_list.php">Instituciones</a></li>

                    <?php }; ?>
                    <?php if ($_SESSION['usuario_nivel'] <= 2) { ?>
                        <li><a href="index.php?p=sistema/tipocatalogos_list.php">Catálogos</a></li>

                    <?php }; ?>
                    <?php if ($_SESSION['usuario_nivel'] == 3) { ?>
                    <?php }; ?>
                    <?php if ($_SESSION['usuario_nivel'] == 4) { ?>

                    <?php }; ?>
                    <?php if ($_SESSION['usuario_nivel'] <= 5) { ?>
                        <li><a href="index.php?p=sistema/perfiles_list.php">Perfiles de Aplicación</a></li>
                    <?php }; ?>
                    <?php if ($_SESSION['usuario_nivel'] <= 1) { ?>
                        <li>
                            <a href="#"><i class="fa fa-database"></i> Gestion de datos<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li><a href="#">Base de Datos</a></li>
                                <li><a href="index.php?p=soporte/sql_go.php">Ejecución de Querys</a></li>
                            </ul>

                            <!-- /.nav-third-level -->

                        </li>

                    <?php }; ?>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <?php }; ?>
            <li>
                <a href="#"><i class="fa fa-users fa-fw"></i> Usuarios<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <?php if ($_SESSION['usuario_nivel'] <= 2) { ?>
                        <li><a href="index.php?p=usuarios/usuarios_edit.php">Nuevo Usuario</a></li>
                        <li><a href="index.php?p=usuarios/usuarios_list.php">Lista de Usuarios</a></li>
                    <?php }; ?>
                        <?php if ($_SESSION['usuario_nivel'] == 4) { ?>
                        <li><a href="index.php?p=usuarios/usuarios_edit.php">Nuevo Usuario</a></li>
                        <li><a href="index.php?p=usuarios/usuarios_list.php">Usuarios</a></li>
                    <?php }; ?>
                    <?php if ($_SESSION['usuario_nivel'] <= 5) { ?>
                        <li><a href="index.php?p=usuarios/cambiar_passw.php">Cambiar Contraseña</a></li>
                    <?php }; ?>
                    <?php if ($_SESSION['usuario_nivel'] == 1) { ?>
                        <li><a href="index.php?p=sistema/catalogos_list.php&idtipo=2">Niveles de Usuario</a></li>
                    <?php }; ?>
                </ul>


                <!-- /.nav-second-level -->
            </li>

            <!-- ---------------------------------------------EXTRA AVEMILGUA---------------------------------- --><?php if ($_SESSION['usuario_nivel'] <= 5) { ?>

            <?php }; ?>
            <!-- ---------------------------------------------EXTRA AVEMILGUA---------------------------------- -->

            <!-- <li><a href="index.php?p=soporte/reportarfalla_go.php"><i class="fa fa-ambulance fa-fw"></i> Solicitud de Soporte</a></li> -->


            <li class="sidebar-search">
                <center>

                    <small class="text-primary"><i class="fa fa-copyright"></i> 2015 - Desarrollado por: </small><img src="../img/logo/titonsoftpq.png" height="" alt="Desarrollado por titonsoft.com" />
                </center>
                <!-- /input-group -->
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
