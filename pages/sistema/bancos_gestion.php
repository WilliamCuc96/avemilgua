<?php

    
    //Definición de Variables locales
    global $id; $nombre; $siglas; $cuenta; $tipo_cuenta; $contacto; $codigo; $telefono; $institucion; $email; $estatus;
    
    //Inicialización de Variables locales
    $id = '';
    $nombre = '';
    $siglas = ''; 
    $cuenta = ''; 
    $tipo_cuenta = ''; 
    $contacto = ''; 
    $codigo = ''; 
    $telefono = ''; 
    $institucion = ''; 
    $email = ''; 
    $estatus = '';
    
    // Asignar el valor que viene en el request a variables
    if (!$id) { $id  = isset_or('id', '0'); };
    if (!$nombre) { $nombre  = isset_or('nombre', ''); }; 
    if (!$siglas) { $siglas  = isset_or('siglas', '0'); }; 
    if (!$cuenta) { $cuenta  = isset_or('cuenta', '0'); }; 
    if (!$tipo_cuenta) { $tipo_cuenta  = isset_or('tipo_cuenta', '0'); }; 
    if (!$contacto) { $contacto  = isset_or('contacto', '0'); }; 
    if (!$codigo) { $codigo  = isset_or('codigo', '0'); }; 
    if (!$telefono) { $telefono  = isset_or('telefono', '0'); }; 
    if (!$institucion) { $institucion  = isset_or('institucion', '0'); }; 
    if (!$email) { $email  = isset_or('email', '0'); }; 
    if (!$estatus) { $estatus  = isset_or('estatus', '0'); };
    
        
    //Programacion de Funcionalidad para mostrar datos de la pagina
    // Toma el valor de lo enviado por el boton precionado en el formulario
    $btn = '';
    if (!$btn) { $btn  = isset_or('btn', ''); };

    
    $btn = isset_or('btn', '');
    $resp = 0;
    
  if ($id || $nombre) {
	switch ($btn) {
            case "Insertar":
                $sql1 = "INSERT INTO ig_bancos (
                            id,
                            nombre,
                            siglas, 
                            cuenta, 
                            tipo_cuenta, 
                            contacto, 
                            codigo, 
                            telefono, 
                            institucion, 
                            email,
                            estatus
			) VALUES (
                            '".$id."',
                            '".utf8_decode($nombre)."',
                            '".utf8_decode($siglas)."', 
                            '".utf8_decode($cuenta)."', 
                            '".$tipo_cuenta."', 
                            '".utf8_decode($contacto)."', 
                            '".utf8_decode($codigo)."', 
                            '".utf8_decode($telefono)."', 
                            '".$institucion."', 
                            '".utf8_decode($email)."', 
                            '".$estatus."'
                        )";
	        break;
            case "Actualizar":  // Modificar
                $sql1 = " UPDATE ig_bancos SET
                                nombre = '".utf8_decode($nombre)."', 
                                siglas = '".utf8_decode($siglas)."', 
                                cuenta = '".utf8_decode($cuenta)."', 
                                tipo_cuenta = '".$tipo_cuenta."', 
                                contacto = '".utf8_decode($contacto)."', 
                                codigo = '".utf8_decode($codigo)."', 
                                telefono = '".utf8_decode($telefono)."', 
                                institucion = '".$institucion."', 
                                email = '".utf8_decode($email)."', 
                                estatus = '".$estatus."'
                            WHERE id = '".$id."'
			";
	        break;
            case "Borrar":
	        $sql1 = "DELETE FROM ig_bancos WHERE id = '".$id."'";
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
                        <a href="index.php?p=sistema/bancos_list.php" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Regresar listado de Bancos</a>
                        
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