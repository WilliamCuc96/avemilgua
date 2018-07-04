<?php
 
    //Definición de Variables locales
    global $idtipo; $nombre; $institucion;

    // Asignación de valores de Variables
    $idtipo     	= isset_or('idtipo', '0');
    $nombre  		= isset_or('nombre', '');
    $institucion  	= isset_or('institucion', '');
    $btn 		= isset_or('btn', '');
    $resp 		= 0;
    
    if ($idtipo || $nombre) {
        switch ($btn) {
            case "Insertar":
                $sql1 = "INSERT INTO ap_tipo_catalogos (
                            idtipo,
                            nombre,
                            institucion
                        ) VALUES (
                            '".$idtipo."',
                            '".utf8_decode($nombre)."',
                            '".$institucion."'
                        )";
                break;
            case "Actualizar":  // Modificar
                $sql1 = " UPDATE ap_tipo_catalogos SET
                                nombre = '".utf8_decode($nombre)."',
                                institucion = '".$institucion."'
                          WHERE idtipo = '".$idtipo."'
                    ";
                break;

            case "Borrar":
                $sql1 = "DELETE FROM ap_tipo_catalogos WHERE idtipo = '".$idtipo."'";
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
                        <a href="index.php?p=sistema/tipocatalogos_list.php" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Listado de Tipos de Catálogo</a>
                        <a href="index.php?p=sistema/catalogos_.php&tipo_catalogo=<?php echo $tt_id; ?>&tipo_catalogo=<?php echo $tipo_catalogo; ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Nuevo Item del Catálogo Actual</a>
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