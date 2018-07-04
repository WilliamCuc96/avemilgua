<?php

    //Definición de Variables locales
    global $id; $fecha; $hora; $alarmas; $eventos; $traffic_mb; $flows; $pckets;
    global $dif_alarmas; $dif_eventos; $usuario_alta; $fecha_alta; $perfil; $institucion;

    //Inicialización de Variables locales
    $id = '';
    $fecha = '';
    $hora = '';
    $alarmas = '';
    $eventos = '';
    $traffic_mb = '';
    $flows = '';
    $pckets = '';
    $dif_alarmas = '';
    $dif_eventos = '';
    $usuario_alta = '';
    $fecha_alta = '';
    $perfil = '';
    $institucion = '';

    // Asignar el valor que viene en el request a variables
    if (!$id) { $id  = isset_or('id', '0'); };
    if (!$fecha) { $fecha  = isset_or('fecha', ''); };
    if (!$hora) { $hora  = isset_or('hora', ''); };
    if (!$alarmas) { $alarmas  = isset_or('alarmas', '0'); };
    if (!$eventos) { $eventos  = isset_or('eventos', '0'); };
    if (!$traffic_mb) { $traffic_mb  = isset_or('traffic_mb', '0'); };
    if (!$flows) { $flows  = isset_or('flows', '0'); };
    if (!$pckets) { $pckets = isset_or('pckets', '0'); };
    if (!$dif_alarmas) { $dif_alarmas  = isset_or('dif_alarmas', '0'); };
    if (!$dif_eventos) { $dif_eventos  = isset_or('dif_eventos', '0'); };
    if (!$usuario_alta) { $usuario_alta  = isset_or('usuario_alta', '0'); };
    if (!$fecha_alta) { $fecha_alta  = isset_or('fecha_alta', '0'); };
    if (!$perfil) { $perfil  = isset_or('perfil', '0'); };
    if (!$institucion) { $institucion  = isset_or('institucion', '0'); };


    //Programacion de Funcionalidad para mostrar datos de la pagina
    // Toma el valor de lo enviado por el boton precionado en el formulario
    $btn = '';
    if (!$btn) { $btn  = isset_or('btn', ''); };


    $btn = isset_or('btn', '');
    $resp = 0;

  if ($id || $perfil) {
	switch ($btn) {
            case "Insertar":
                $sql1 = "INSERT INTO cy_indicadores (
                            id,
                            fecha,
                            hora,
                            alarmas,
                            eventos,
                            traffic_mb,
                            flows,
                            pckets,
                            dif_alarmas,
                            dif_eventos,
                            usuario_alta,
                            fecha_alta,
                            perfil,
                            institucion
			) VALUES (
                            '".$id."',
                            '".$fecha."',
                            '".$hora."',
                            '".$alarmas."',
                            '".$eventos."',
                            '".$traffic_mb."',
                            '".$flows."',
                            '".$pckets."',
                            '".$dif_alarmas."',
                            '".$dif_eventos."',
                            '".$usuario_alta."',
                            '".$fecha_alta."',
                            '".$perfil."',
                            '".$institucion."'
                        )";
	        break;
            case "Actualizar":  // Modificar
                $sql1 = " UPDATE cy_indicadores SET
                                fecha = '".$fecha."',
                                hora = '".$hora."',
                                alarmas = '".$alarmas."',
                                eventos = '".$eventos."',
                                traffic_mb = '".$traffic_mb."',
                                flows = '".$flows."',
                                pckets = '".$pckets."',
                                dif_alarmas = '".$dif_alarmas."',
                                dif_eventos = '".$dif_eventos."',
                                usuario_alta = '".$usuario_alta."',
                                fecha_alta = '".$fecha_alta."',
                                perfil = '".$perfil."',
                                institucion = '".$institucion."'
                            WHERE id = '".$id."'
			";
	        break;
            case "Borrar":
	        $sql1 = "DELETE FROM cy_indicadores WHERE id = '".$id."'";
	        break;
    	} // End switch

	if (mysql_query($sql1)){
            $tt_id=mysql_insert_id(); // retorna el ultimo id creado
            $mensaje1 = '<button type="button" class="btn btn-success btn-circle btn-xl"><i class="fa fa-check"></i></button>';
            $mensaje2 = utf8_encode('Su gestion fue exitosa');
            $mensaje3 = utf8_encode('Gracias por usar nuestro servicio!');
        } else {
            $mensaje1 = '<button type="button" class="btn btn-danger btn-circle btn-xl"><i class="fa fa-times"></i></button>';
            $mensaje2 = utf8_encode('Error de base de datos');
            $mensaje3 = utf8_encode('Su gestion no pudo ser realizada, intentelo de nuevo!');
        }

    } else {

    	$mensaje1 = '<button type="button" class="btn btn-danger btn-circle btn-xl"><i class="fa fa-times"></i></button>';
    	$mensaje2 = 'Error de datos';
	$mensaje3 = 'No se trasladaron datos para su gestión, intentelo de nuevo!';

    }; // End if
?>

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><i class="fa fa-wrench"></i> Gestión de Indicadores</h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-md-12 text-center">
                    <?php echo $mensaje1; ?>
            </div>
            <div class="col-md-12 text-center">
                <div class="">
                    <h3><?php echo $mensaje2; ?></h3>
                    <p>
                        <?php echo $mensaje3; ?>
                    </p>
                    <div class="btn-group">
                      <!--  <a href="index.php?p=proceso/indicadores_edit.php&perfil=<?php echo $perfil; ?>" class="btn btn-warning"><i class="fa fa-plus-circle"></i> Ingresar nuevo indicador</a>-->
                        <a href="index.php?p=proceso/indicadores_go.php&perfil=<?php echo $perfil; ?>" class="btn btn-warning"><i class="fa fa-plus-circle"></i> Ingresar nuevo indicador</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

<?php include_once 'panel/i_foot.php'; ?>
