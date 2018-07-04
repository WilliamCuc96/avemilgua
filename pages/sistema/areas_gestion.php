<?php

    //Definición de Variables locales
    global $id; $codigo; $fecha; $razon; $estatus; $condominio; $institucion; $valor; $esfijo; $productoid;
    
    //Inicialización de Variables locales
    $id = '';
    $institucion = '';
    $condominio = '';
    $nombre = '';
    $lugar = '';
    $capacidad = '';
    $caracteristicas = '';
    $observaciones = '';
    $color = '';
    $colortexto = '';
    $estatus = '';
    $valor = '';
    $esfijo = '';
    $productoid = '';
    
    $btn = '';
    
     
    
    // Asigna valores que vienen en el requert
    if (!$id) { $id  = isset_or('id', ''); };
    if (!$institucion) { $institucion  = isset_or('institucion', ''); };
    if (!$condominio) { $condominio  = isset_or('condominio', ''); }; 
    if (!$nombre) { $nombre  = isset_or('nombre', ''); };
    if (!$lugar) { $lugar  = isset_or('lugar', ''); };
    if (!$capacidad) { $capacidad  = isset_or('capacidad', ''); };
    if (!$caracteristicas) { $caracteristicas  = isset_or('caracteristicas', '0'); };
    if (!$observaciones) { $observaciones  = isset_or('observaciones', '0'); };
    if (!$color) { $color  = isset_or('color', '0'); };
    if (!$colortexto) { $colortexto  = isset_or('colortexto', '0'); };
    if (!$estatus) { $estatus  = isset_or('estatus', '0'); };
    if (!$valor) { $valor  = isset_or('valor', '0'); };
    if (!$esfijo) { $esfijo  = isset_or('esfijo', '0'); };
    if (!$productoid) { $productoid  = isset_or('productoid', '0'); };
    
    $btn 			= isset_or('btn', '');
    $resp 			= 0;
    
    if ($id || $nombre) {
	    switch ($btn) {
	        case "Insertar":
	            $sql1 = "INSERT INTO ig_areas (
                                                        id,
                                                        institucion, 
                                                        condominio, 
                                                        nombre,
                                                        lugar, 
                                                        capacidad, 
                                                        caracteristicas,
                                                        observaciones,
                                                        color,
                                                        colortexto,
                                                        estatus,
                                                        valor,
                                                        esfijo,
                                                        productoid
						) VALUES (
                                                    '".$id."',
						    '".$institucion."',
                                                    '".$condominio."',
                                                    '".utf8_decode($nombre)."',
                                                    '".utf8_decode($lugar)."', 
                                                    '".utf8_decode($capacidad)."',
                                                    '".utf8_decode($caracteristicas)."',
                                                    '".utf8_decode($observaciones)."',
                                                    '".utf8_decode($color)."',
                                                    '".utf8_decode($colortexto)."',
                                                    '".$estatus."',
                                                    '".$valor."',
                                                    '".$esfijo."',
                                                    '".$productoid."'
						)";
	            break;
	        case "Actualizar":  // Modificar
	            $sql1 = " UPDATE ig_areas SET
                                institucion = '" . utf8_decode($institucion) . "',  
                                condominio = '" . utf8_decode($condominio) . "',
                                nombre = '" .utf8_decode($nombre) . "',
                                lugar  = '" .utf8_decode($lugar) . "', 
                                capacidad = '" .utf8_decode($capacidad) . "',
                                caracteristicas = '" .utf8_decode($caracteristicas) . "',
                                observaciones = '" .utf8_decode($observaciones) . "',
                                color = '" .utf8_decode($color) . "',
                                colortexto = '" .utf8_decode($colortexto) . "',
                                estatus = '" .utf8_decode($estatus) . "',
                                valor = '" .$valor . "',
                                esfijo = '" .utf8_decode($esfijo) . "',
                                productoid = '" .utf8_decode($productoid) . "'
                                     WHERE id = '".$id."'                                                            
					    ";
	            break;

	        case "Borrar":
	            $sql1 = "DELETE from ig_areas where id = '" . $id . "'";		
	            			
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
                <h1 class="page-header"><i class="fa fa-wrench"></i> Gestión de Tipos de Catálogo</h1>
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
                        <a href="index.php?p=sistema/areas_list.php" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Regresar listado de Áreas Sociales</a>
                        
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