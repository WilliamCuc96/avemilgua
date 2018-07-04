<?php

    //Definición de Variables locales
    global $id; $institucion; $nombre; $nombre_corto;
    
    //Inicialización de Variables locales
    $id = '';
    $institucion = ''; 
    $nombre = ''; 
    $nombre_corto = ''; 
    
    $btn = '';
    
    // Asignar el valor que viene en el request a variables
    if (!$id) { $id  = isset_or('id', '0'); };  
    if (!$institucion) { $institucion  = isset_or('institucion', '0'); };
    if (!$nombre) { $nombre  = isset_or('nombre', ''); }; 
    if (!$nombre_corto) { $nombre_corto  = isset_or('nombre_corto', ''); }; 
    
    if (!$btn) { $btn  = isset_or('btn', ''); }; 
    
    $btn = isset_or('btn', '');
    $resp = 0;
    
  if ($id || $nombre) {
	switch ($btn) {
            case "Insertar":
                $sql1 = "INSERT INTO ap_unidad (
                            id,
                            institucion,
                            nombre, 
                            nombre_corto
			) VALUES (
                            '".$id."',
                            '".$institucion."',
                            '".utf8_decode($nombre)."', 
                            '".utf8_decode($nombre_corto)."'
                        )";
	        break;
            case "Actualizar":  // Modificar
                $sql1 = " UPDATE ap_unidad SET
                                institucion = '".$institucion."',
                                nombre = '".utf8_decode($nombre)."', 
                                nombre_corto = '".utf8_decode($nombre_corto)."'
                            WHERE id = '".$id."'
			";
	        break;
            case "Borrar":
	        $sql1 = "DELETE FROM ap_unidad WHERE id = '".$id."'";
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
                <h1 class="page-header"><i class="fa fa-wrench"></i> Gestión de Unidades</h1>
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
                        <a href="index.php?p=sistema/unidades_list.php" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Listado de Unidades</a>
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