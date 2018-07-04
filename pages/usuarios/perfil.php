<?php

    //Definición de Variables locales
    //global $id;
    global $nick; $password; $password2; $institucion; $mensaje1; $mensaje2; $mensaje3;
    
?>
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><i class="fa fa-users"></i> <?php echo utf8_encode($_SESSION['usuario_nombre']) ?> (<?php echo $_SESSION['usuario_id'] ?>)</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <i class="fa fa-users"></i> Información del Usuario
                    </div>
                    <div class="panel-body">


            <div class="panel-body">
                <div id="card" class="row">
                    <div class="col-md-3 headshot">
                        <img src="../upload/<?php echo $_SESSION['usuario_foto']; ?>" alt="" height="200" width="200"/>
                        <br><i class="fa fa-picture-o"></i> <?php echo $_SESSION['usuario_foto']; ?>
                    </div>
                    <div class="col-md-8">
                        <table class="table table-hover">
                            <tbody>
                                  <tr>					
                                        <td><i class="fa fa-certificate"></i> D.P.I.</td>
                                        <td id="card-name"><?php echo $_SESSION['usuario_dpi'] ?></td>
                                  </tr>
                                  <tr>					
                                        <td><i class="fa fa-certificate"></i> N.I.T.</td>
                                        <td id="card-name"><?php echo $_SESSION['usuario_nit'] ?></td>
                                  </tr>
                                  <tr>					
                                        <td><i class="fa fa-user"></i> Nombre</td>
                                        <td id="card-name"><?php echo utf8_encode($_SESSION['usuario_nombre']) ?></td>
                                  </tr>
                                  <tr>
                                        <td><i class="fa fa-gift"></i> Nacimiento</td>
                                        <td><?php echo $_SESSION['usuario_nacimiento'] ?></td>
                                  </tr>
                                  <tr>
                                        <td><i class="fa <?php if ($_SESSION['usuario_genero']=='F') echo 'fa-female'; else echo 'fa-male'; ?>"></i> Género</td>
                                        <td><?php if ($_SESSION['usuario_genero']=='F') echo 'Femenino'; elseif ($_SESSION['usuario_genero']=='M') echo 'Masculino'; else echo 'No indicado'; ?></td>
                                  </tr>
                                  <tr>
                                        <td><i class="fa fa-home"></i> Dirección</td>
                                        <td><?php echo utf8_encode($_SESSION['usuario_direccion']) ?></td>
                                  </tr>
                                  <tr>
                                        <td><i class="fa fa-phone"></i> Teléfono</td>
                                        <td><a href="tel:<?php echo $_SESSION['usuario_celular'] ?>" target="_blank" data-skin="default"><?php echo $_SESSION['usuario_celular'] ?></a></td>
                                  </tr>
                                  <tr>
                                        <td nowrap><i class="fa fa-envelope"></i> Email y Usuario</td>
                                        <td><a href="mailto:<?php echo $_SESSION['usuario_login'] ?>" target="_blank" data-skin="default"><?php echo $_SESSION['usuario_login'] ?></a></td>
                                  </tr>
                                  <tr>
                                        <td><i class="fa fa-envelope-o"></i> Email Alterno</td>
                                        <td><a href="mailto:<?php echo $_SESSION['usuario_email'] ?>" target="_blank" data-skin="default"><?php echo $_SESSION['usuario_email'] ?></a></td>
                                  </tr>
                                  <tr>
                                        <td><i class="fa fa-asterisk"></i> Contraseña</td>
                                        <td><?php echo md5($_SESSION['usuario_password']) ?></td>
                                  </tr>
                                  <!--
                                  <tr>
                                        <td><i class="fa fa-calendar"></i> Calendario 1</td>
                                        <td><?php echo $_SESSION['usuario_calendario1'] ?></td>
                                  </tr>
                                  <tr>
                                        <td><i class="fa fa-calendar"></i> Calendario 2</td>
                                        <td><?php echo $_SESSION['usuario_calendario2'] ?></td>
                                  </tr>
                                  -->
                                  <tr>
                                        <td nowrap><i class="fa fa-shield"></i> Permiso y Estatus</td>
                                        <td><?php echo $_SESSION['usuario_nivel'] ?> - <?php echo $_SESSION['usuario_estatus'] ?></td>
                                  </tr>
                                  <tr>
                                        <td><i class="fa fa-building-o"></i> Institución</td>
                                        <td><?php echo utf8_encode($_SESSION['usuario_ninstitucion']); ?> (<?php echo $_SESSION['usuario_institucion']; ?> - <?php echo $_SESSION['usuario_condominios']; ?>)</td>
                                  </tr>
                                  <tr>
                                        <td><i class="fa fa-suitcase"></i> Cargo y Tipo</td>
                                        <td><?php echo $_SESSION['usuario_cargo']; ?> (<?php echo $_SESSION['usuario_tipoper']; ?>)</td>
                                  </tr>
                                  <tr>
                                        <td><i class="fa fa-chain"></i> URL</td>
                                        <td><a href="<?php echo $_SESSION['usuario_urlinstitucion']; ?>" target="_blank" data-skin="default"><?php echo $_SESSION['usuario_urlinstitucion']; ?></a></td>
                                  </tr>
                                  <tr>
                                        <td><i class="fa fa-picture-o"></i> Logo Aplicación</td>
                                        <td><?php echo $_SESSION['usuario_logo_aplicacion'] ?></td>
                                  </tr>
                                  <tr>
                                        <td><i class="fa fa-picture-o"></i> Logo Impresión</td>
                                        <td><?php echo $_SESSION['usuario_logo_impresion'] ?></td>
                                  </tr>

                                  <tr>
                                        <td><i class="fa fa-laptop"></i> IP Cliente</td>
                                        <td><?php echo $_SERVER["REMOTE_ADDR"] ?></td>
                                  </tr>
                                  <tr>
                                        <td><i class="fa fa-code"></i> Página actual</td>
                                        <td><?php echo $_SERVER['PHP_SELF'] ?></td>
                                  </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

<!-- /PERFIL -->

                    </div>
                    <div class="panel-footer">
                        Información en variables de sesión
                    </div>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

<?php include_once 'panel/i_foot.php'; ?>