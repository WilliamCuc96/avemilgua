<!-- Page Content -->

<?php
global $usuario1Total; $usuario2Total; $usuario3Total; $usuario4Total; $nombre; $apellido;

$usuario1Total = 0;
$usuario2Total = 0;
$usuario3Total = 0;
$usuario4Total = 0;
$nombre;
$apellido;

$sql1 = "SELECT a.id,
                (SELECT COUNT(user_registro) FROM av_datos_personales WHERE user_registro = 10) as conteo1
        FROM ap_usuarios a";
$resp1 = mysql_query($sql1);
while($row=mysql_fetch_assoc($resp1)){
    $usuario1Total = $row['conteo1'];
}
$sql2 = "SELECT a.id,
                (SELECT COUNT(user_registro) FROM av_datos_personales WHERE user_registro = 11) as conteo2
        FROM ap_usuarios a";
$resp2 = mysql_query($sql2);
while($row2=mysql_fetch_assoc($resp2)){
    $usuario2Total = $row2['conteo2'];
}
$sql3 = "SELECT a.id,
                (SELECT COUNT(user_registro) FROM av_datos_personales WHERE user_registro = 12) as conteo3
        FROM ap_usuarios a";
$resp3 = mysql_query($sql3);
while($row3=mysql_fetch_assoc($resp3)){
    $usuario3Total = $row3['conteo3'];
}
$sql4 = "SELECT a.id,
                (SELECT COUNT(user_registro) FROM av_datos_personales WHERE user_registro = 13) as conteo4
        FROM ap_usuarios a";
$resp4 = mysql_query($sql4);
while($row4=mysql_fetch_assoc($resp4)){
    $usuario4Total = $row4['conteo4'];
}
?>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"> Gestión de Datos de Veteranos Militares</h1>
            </div>
            <div class="row">
        <div class="col-lg-4 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-user fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $usuario1Total; ?></div>
                            <div>Shenny Pixtún</div>
                        </div>
                    </div>
                </div>
                <a>
                    <div class="panel-footer">
                        <span class="pull-left">Usuarios Ingresados</span>
                        <span class="pull-right"></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-user fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $usuario2Total; ?></div>
                            <div>Heidy 	Noi</div>
                        </div>
                    </div>
                </div>
                <a>
                    <div class="panel-footer">
                        <span class="pull-left">Usuarios Ingresados</span>
                        <span class="pull-right"></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-user fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $usuario4Total; ?></div>
                            <div>Karla 	Suriano</div>
                        </div>
                    </div>
                </div>
                <a>
                    <div class="panel-footer">
                        <span class="pull-left">Usuarios Ingresados</span>
                        <span class="pull-right"></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-12">
                <div class="jumbotron panel-green">
                    <h1>Bienvenido!</h1>
                    <p>A continuación encontrá una serie de formularios y listados que le permitirán administrar la información de AVEMILGUA.</p>
                    <p><a href="index.php?p=usuarios/veteranos_busc.php" class="btn btn-primary btn-lg" role="button">Búsqueda Personalizada</a></p>

                </div>
            </div>
            <div class="col-lg-12">
                <div class="col-lg-4">
                  <h2><i class="fas fa-user-plus"></i> Nuevo Veterano</h2>
                   <p>Por medio de esta opción puede agregar directamente un veterano, si posee los permisos necesarios. </p>
                   <?php if ($_SESSION['usuario_nivel'] <= 2 OR $_SESSION['usuario_nivel'] == 4) { ?>
                   <p><a class="btn" href="index.php?p=usuarios/av_usuarios_edit.php#">Ir al formulario &raquo;</a></p>
                   <?php }; ?>
                </div>
                <div class="col-lg-4">
                  <h2><i class="fas fa-search"></i> Buscar Veteranos</h2>
                   <p>Ingrese a esta opción para generar listados de beneficiarios utilizando un formulario de búsquedas con varios criterios. </p>

                   <p><a class="btn" href="index.php?p=usuarios/veteranos_busc.php">Ir al formulario &raquo;</a></p>
               
                </div>
                <div class="col-lg-4">
                  <h2><i class="fas fa-users"></i> Usuarios</h2>
                  <p>Administre los permisos de usuarios existentes o cree nuevos usuarios.</p>
                  <?php if ($_SESSION['usuario_nivel'] <= 2) { ?>
                  <p><a class="btn" href="index.php?p=usuarios/usuarios_list.php">Ir al listado &raquo;</a></p>
                  <?php }; ?>
                </div>
            </div>
        </div>
        <hr>
        <!-- /.row -->
        
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

<?php include_once 'panel/i_foot.php'; ?>