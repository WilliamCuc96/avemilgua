<?php

    //Definición de Variables locales
    global $id; $tipo_catalogo; $institucion; $nombre; $comodin; $nombretipo;
    
    //Inicialización de Variables locales
    $idtipo = "";
    $id = "";
    $tipo_catalogo = "";
    $institucion = "";
    $nombre = "";
    $comodin = ""; 
    $nombretipo = "";
    
    // Asigna valores que vienen en el requert
    if (!$id) { $id  = isset_or('id', '0'); };  
    if (!$tipo_catalogo) { $tipo_catalogo  = isset_or('tipo_catalogo', '0'); };
    if (!$institucion) { $institucion  = isset_or('institucion', $_SESSION['usuario_institucion']); };
    if (!$nombre) { $nombre  = isset_or('nombre', ''); };
    if (!$comodin) { $comodin  = isset_or('comodin', ''); };
    
    $btn 			= isset_or('btn', '');
    $resp 			= 0;
    
    if ($id || $nombre) {
        switch ($btn) {
            case "Insertar":
                $sql1 = "INSERT INTO ap_catalogos (
                            id,
                            tipo_catalogo,
                            institucion,
                            nombre,
                            comodin
                        ) VALUES (
                            '".$id."',
                            '".$tipo_catalogo."',
                            '".$institucion."',
                            '".utf8_decode($nombre)."',
                            '".utf8_decode($comodin)."'
                        )";
                break;
            case "Actualizar":  // Modificar
                $sql1 = " UPDATE ap_catalogos SET		
                                nombre = '".utf8_decode($nombre)."',
                                comodin = '".utf8_decode($comodin)."'
                          WHERE id = '".$id."'
                            AND tipo_catalogo = '".$tipo_catalogo."' 	
                            AND institucion = '".$institucion."'
                    ";
                break;

            case "Borrar":
                $sql1 = "DELETE FROM ap_catalogos WHERE id = '".$id."'
                            AND tipo_catalogo = '".$tipo_catalogo."' 	
                            AND institucion = '".$institucion."'";
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
                        <a href="index.php?p=sistema/catalogos_list.php&idtipo=<?php echo $tipo_catalogo;?>&institucion=<?php echo $institucion; ?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Regresar al Catalogo</a>
                        <a href="index.php?p=sistema/tipocatalogos_list.php" class="btn btn-success"><i class="fa fa-arrow-up"></i> Tipos de Catálogos</a>
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