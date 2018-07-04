<?php

    
    //Definición de Variables locales
    global $id; $nombre; $nombre_corto; $tipo; $precio; $estatus; $institucion; $fecha_precio; $usuario_precio; $precio_fijo;  $condominio; $moneda;
    global $incluyecorte; $descripcion_lg;
    
    //Inicialización de Variables locales
    $id = '';
    $nombre = ''; 
    $nombre_corto = ''; 
    $tipo = ''; 
    $precio = ''; 
    $estatus = ''; 
    $institucion = ''; 
    $condominio = '';
    $moneda = '';
    $fecha_precio = ''; 
    $usuario_precio = ''; 
    $precio_fijo = '';
    $incluyecorte = ''; 
    $descripcion_lg = '';
    
    // Asignar el valor que viene en el request a variables
    if (!$id) { $id  = isset_or('id', '0'); };
    if (!$nombre) { $nombre  = isset_or('nombre', ''); }; 
    if (!$nombre_corto) { $nombre_corto  = isset_or('nombre_corto', ''); }; 
    if (!$tipo) { $tipo  = isset_or('tipo', '0'); }; 
    if (!$estatus) { $estatus  = isset_or('estatus', '0'); }; 
    //if (!$usuario_precio) { $usuario_precio  = isset_or('usuario_precio', ''); }; 
    $usuario_precio = $_SESSION['usuario_login'];
    if (!$precio_fijo) { $precio_fijo  = isset_or('precio_fijo', '0'); }; 
    if (!$institucion) { $institucion  = isset_or('institucion', '0'); }; 
    if (!$condominio) { $condominio  = isset_or('condominio', '0'); };
    if (!$moneda) { $moneda  = isset_or('moneda', '0'); };
    if (!$precio) { $precio  = isset_or('precio', '0'); }; 
    if (!$fecha_precio) { $fecha_precio  = isset_or('fecha_precio', ''); };
    if (!$incluyecorte) { $incluyecorte  = isset_or('incluyecorte', ''); };
    if (!$descripcion_lg) { $descripcion_lg  = isset_or('descripcion_lg', ''); };
    
    // Toma el valor de lo enviado por el boton precionado en el formulario
    $btn = '';
    if (!$btn) { $btn  = isset_or('btn', ''); };
    
        
    $btn = isset_or('btn', '');
    $resp = 0;
    
  if ($id || $nombre) {
	switch ($btn) {
            case "Insertar":
                $sql1 = "INSERT INTO ig_productos (
                            id,
                            nombre, 
                            nombre_corto,
                            tipo, 
                            precio, 
                            estatus,
                            institucion, 
                            condominio,
                            moneda,
                            fecha_precio, 
                            usuario_precio, 
                            precio_fijo,
                            incluyecorte, 
                            descripcion_lg
			) VALUES (
                            '".$id."',
                            '".utf8_decode($nombre)."', 
                            '".utf8_decode($nombre_corto)."', 
                            '".$tipo."', 
                            '".$precio."', 
                            '".$estatus."', 
                            '".$institucion."', 
                            '".$condominio."',
                            '".$moneda."',
                            NOW(), 
                            '".utf8_decode($usuario_precio)."', 
                            '".$precio_fijo."',
                            '".$incluyecorte."',
                            '".$descripcion_lg."'
                        )";
	        break;
            case "Actualizar":  // Modificar
                $sql1 = " UPDATE ig_productos SET
                                nombre = '".utf8_decode($nombre)."', 
                                nombre_corto = '".utf8_decode($nombre_corto)."',
                                tipo = '".$tipo."', 
                                precio = '".$precio."', 
                                estatus = '".$estatus."',
                                institucion = '".$institucion."',
                                condominio = '".$condominio."',
                                moneda = '".$moneda."',
                                fecha_precio = NOW(),
                                usuario_precio = '".$usuario_precio."',
                                precio_fijo = '".$precio_fijo."',
                                incluyecorte = '".$incluyecorte."',
                                descripcion_lg = '".$descripcion_lg."'
                            WHERE id = '".$id."'
			";
	        break;
            case "Borrar":
	        $sql1 = "DELETE FROM ig_productos WHERE id = '".$id."'";
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
        
    	$mensaje1 = '<button type="button" class="btn btn-danger btn-circle btn-xl"><i class="fa fa-check"></i></button>';
    	$mensaje2 = 'Error de datos';
	$mensaje3 = 'No se trasladaron datos para su gestión, intentelo de nuevo!';
        
    }; // End if
?>

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><i class="fa fa-wrench"></i> Gestión de Productos y Servicios</h1>
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
                        <a href="index.php?p=sistema/productos_list.php" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Regresar listado de Productos y Servicios</a>
                        
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