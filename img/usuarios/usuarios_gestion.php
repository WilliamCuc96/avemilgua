<?php

    //Definición de Variables locales
    global $id; $nick; $password; $nombre; $apellido; $email; $celular; $cargo; $permiso; $institucion; $condominio;
    global $foto; $nacimiento; $genero; $dpi; $nit; $direccion; $tipoper; $codigo; $calendario1; $calendario2;
    global $observaciones; $actividad; $estatus; $nombre2; $apellido2; $apellido3; $igss; $irtra; $licencia; $licencia_tipo; $contrato;
    global $estado_civil; $conyugue; $unidad; $seccion; $salario_base; $bono_incentivo; $bono_14;

    //Inicialización de Variables locales
    $id = '';
    $nick = '';
    $password = '';
    $nombre = '';
    $apellido = '';
    $email = '';
    $celular = '';
    $cargo = '';
    $permiso = '';
    $institucion = '';
    $condominio = '';
    $foto = '';
    $nacimiento = '';
    $genero = '';
    $dpi = '';
    $nit = '';
    $direccion = '';
    $tipoper = '';
    $codigo = '';
    $calendario1 = '';
    $calendario2 = '';
    $observaciones = '';
    $actividad = '';
    $estatus = '';
    $nombre2 = '';
    $apellido2 = '';
    $apellido3 = '';
    $igss = '';
    $irtra = '';
    $licencia = '';
    $licencia_tipo = '';
    $contrato = '';
    $estado_civil = '';
    $conyugue = '';
    $unidad = '';
    $seccion = '';
    $salario_base = '';
    $bono_incentivo = '';
    $bono_14 = '';

    $btn = '';

    // Asignar el valor que viene en el request a variables
    if (!$id) { $id  = isset_or('id', '0'); };
    if (!$nick) { $nick  = isset_or('nick', ''); };
    if (!$password) { $password  = isset_or('password', ''); };
    if (!$nombre) { $nombre  = isset_or('nombre', ''); };
    if (!$apellido) { $apellido  = isset_or('apellido', ''); };
    if (!$email) { $email  = isset_or('email', ''); };
    if (!$celular) { $celular  = isset_or('celular', ''); };
    if (!$cargo) { $cargo  = isset_or('cargo', ''); };
    if (!$permiso) { $permiso  = isset_or('permiso', '0'); };
    if (!$institucion) { $institucion  = isset_or('institucion', '0'); };
    if (!$condominio) { $condominio  = isset_or('condominio', '0'); };
    if (!$foto) { $foto  = isset_or('foto', ''); };
    if (!$nacimiento) { $nacimiento  = isset_or('nacimiento', ''); };
    if (!$genero) { $genero  = isset_or('genero', ''); };
    if (!$dpi) { $dpi  = isset_or('dpi', ''); };
    if (!$nit) { $nit  = isset_or('nit', ''); };
    if (!$direccion) { $direccion  = isset_or('direccion', ''); };
    if (!$tipoper) { $tipoper  = isset_or('tipoper', '0'); };
    if (!$codigo) { $codigo  = isset_or('codigo', ''); };
    if (!$calendario1) { $calendario1  = isset_or('calendario1', ''); };
    if (!$calendario2) { $calendario2  = isset_or('calendario2', ''); };
    if (!$observaciones) { $observaciones  = isset_or('observaciones', ''); };
    if (!$actividad) { $actividad  = isset_or('actividad', '0'); };
    if (!$estatus) { $estatus  = isset_or('estatus', '0'); };
    if (!$nombre2) { $nombre2 = isset_or('nombre2', '0'); };
    if (!$apellido2) { $apellido2 = isset_or('apellido2', '0'); };
    if (!$apellido3) { $apellido3 = isset_or('apellido3', '0'); };
    if (!$igss) { $igss = isset_or('igss', '0'); };
    if (!$irtra) { $irtra = isset_or('irtra', '0'); };
    if (!$licencia) { $licencia = isset_or('licencia', '0'); };
    if (!$licencia_tipo) { $licencia_tipo = isset_or('licencia_tipo', '0'); };
    if (!$contrato) { $contrato = isset_or('contrato', ''); };
    if (!$estado_civil) { $estado_civil = isset_or('estado_civil', ''); };
    if (!$conyugue) { $conyugue = isset_or('conyugue', ''); };
    if (!$unidad) { $unidad = isset_or('unidad', ''); };
    if (!$seccion) { $seccion = isset_or('seccion', ''); };
    if (!$salario_base) { $salario_base = isset_or('salario_base', ''); };
    if (!$bono_incentivo) { $bono_incentivo = isset_or('bono_incentivo', ''); };
    if (!$bono_14) { $bono_14 = isset_or('bono_14', ''); };

    if (!$btn) { $btn = isset_or('btn', ''); };

    //Programacion de Funcionalidad para mostrar datos de la pagina

    $btn 			= isset_or('btn', '');
    $resp 			= 0;

//    if ($idtipo) {
	    switch ($btn) {
	        case "Insertar":
	            $sql1 = "INSERT INTO ap_usuarios (
						    id,
						    nick,
						    password,
						    nombre,
						    apellido,
						    email,
						    celular,
						    cargo,
						    permiso,
						    institucion,
                                                    condominios,
						    foto,
						    nacimiento,
						    genero,
						    dpi,
						    nit,
						    direccion,
						    tipoper,
						    codigo,
						    calendario1,
						    calendario2,
						    observaciones,
						    actividad,
						    estatus,
                                                    nombre2,
                                                    apellido2,
                                                    apellido3,
                                                    igss,
                                                    irtra,
                                                    licencia,
                                                    licencia_tipo,
                                                    contrato,
                                                    estado_civil,
                                                    conyugue,
                                                    unidad,
                                                    seccion,
                                                    salario_base,
                                                    bono_incentivo,
                                                    bono_14
						) VALUES (
						    '".$id."',
						    '".utf8_decode($nick)."',
						    '".utf8_decode($password)."',
						    '".utf8_decode($nombre)."',
						    '".utf8_decode($apellido)."',
						    '".utf8_decode($email)."',
						    '".utf8_decode($celular)."',
						    '".utf8_decode($cargo)."',
						    '".$permiso."',
						    '".$institucion."',
                                                    '".$condominio."',
						    '".utf8_decode($foto)."',
						    '".$nacimiento."',
						    '".$genero."',
						    '".$dpi."',
						    '".$nit."',
						    '".utf8_decode($direccion)."',
						    '".$tipoper."',
						    '".utf8_decode($codigo)."',
						    '".utf8_decode($calendario1)."',
						    '".utf8_decode($calendario2)."',
						    '".utf8_decode($observaciones)."',
						    '".$actividad."',
						    '".$estatus."',
                                                    '".utf8_decode($nombre2)."',
                                                    '".utf8_decode($apellido2)."',
                                                    '".utf8_decode($apellido3)."',
                                                    '".$igss."',
                                                    '".$irtra."',
                                                    '".$licencia."',
                                                    '".$licencia_tipo."',
                                                    '".utf8_decode($contrato)."',
                                                    '".$estado_civil."',
                                                    '".utf8_decode($conyugue)."',
                                                    '".$unidad."',
                                                    '".$seccion."',
                                                    '".$salario_base."',
                                                    '".$bono_incentivo."',
                                                    '".$bono_14."'
						)";
	            break;
	        case "Actualizar":  // Modificar
	            $sql1 = " UPDATE ap_usuarios SET
                                                    nick = '".utf8_decode($nick)."',
						    password = '".utf8_decode($password)."',
						    nombre = '".utf8_decode($nombre)."',
						    apellido = '".utf8_decode($apellido)."',
                                                    nombre2 = '".utf8_decode($nombre2)."',
						    apellido2 = '".utf8_decode($apellido2)."',
                                                    apellido3 = '".utf8_decode($apellido3)."',
						    email = '".utf8_decode($email)."',
						    celular = '".utf8_decode($celular)."',
						    cargo = '".utf8_decode($cargo)."',
						    permiso = '".$permiso."',
						    institucion = '".$institucion."',
                                                    condominios = '".$condominio."',
						    foto = '".utf8_decode($foto)."',
						    nacimiento = '".$nacimiento."',
						    genero = '".$genero."',
						    dpi = '".$dpi."',
						    nit = '".$nit."',
						    direccion = '".utf8_decode($direccion)."',
						    tipoper = '".$tipoper."',
						    codigo = '".utf8_decode($codigo)."',
						    calendario1 = '".utf8_decode($calendario1)."',
						    calendario2 = '".utf8_decode($calendario2)."',
						    observaciones = '".utf8_decode($observaciones)."',
						    actividad = '".$actividad."',
						    estatus = '".$estatus."',
                                                    igss = '".$igss."',
                                                    irtra = '".$irtra."',
                                                    licencia = '".$licencia."',
                                                    licencia_tipo = '".$licencia_tipo."',
                                                    contrato = '".$contrato."',
                                                    estado_civil = '".$estado_civil."',
                                                    conyugue = '".$conyugue."',
                                                    unidad = '".$unidad."',
                                                    seccion = '".$seccion."',
                                                    salario_base = '".$salario_base."',
                                                    bono_incentivo = '".$bono_incentivo."',
                                                    bono_14 = '".$bono_14."'
						  WHERE id = '".$id."'
					    ";
	            break;

	        case "Borrar":
	            $sql1 = "DELETE FROM ap_usuarios WHERE id = '".$id."'";
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

?>
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><i class="fa fa-ambulance"></i> Gestión de Usuarios</h1>
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
                        <a href="index.php?p=usuarios/usuarios_list.php" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Listado de Usuarios</a>
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