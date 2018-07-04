<?php
    //Definición de Variables locales
    global $id; $nombre; $pais; $logo; $logo_aplicacion; $logo_impresion; $tipo; $url; 
    global $email; $direccion; $telefono; $estatus; $nit; $contacto; $patrono_igss;
    
    //Inicialización de Variables locales
    $id = '';
    $nombre = ''; 
    $pais = ''; 
    $logo = ''; 
    $logo_aplicacion = ''; 
    $logo_impresion = ''; 
    $tipo = ''; 
    $url = ''; 
    $email = ''; 
    $direccion = ''; 
    $telefono = ''; 
    $estatus = ''; 
    $nit = ''; 
    $contacto = '';
    $patrono_igss = '';
    
    // Asignar el valor que viene en el request a variables
    if (!$id) { $id  = isset_or('id', '0'); };  
    if (!$nombre) { $nombre  = isset_or('nombre', ''); }; 
    if (!$pais) { $pais  = isset_or('pais', '0'); }; 
    if (!$logo) { $logo  = isset_or('logo', ''); }; 
    if (!$logo_aplicacion) { $logo_aplicacion  = isset_or('logo_aplicacion', ''); }; 
    if (!$logo_impresion) { $logo_impresion  = isset_or('logo_impresion', ''); }; 
    if (!$tipo) { $tipo  = isset_or('tipo', '0'); }; 
    if (!$url) { $url  = isset_or('url', ''); }; 
    if (!$email) { $email  = isset_or('email', ''); }; 
    if (!$direccion) { $direccion  = isset_or('direccion', ''); }; 
    if (!$telefono) { $telefono  = isset_or('telefono', ''); }; 
    if (!$estatus) { $estatus  = isset_or('estatus', '0'); }; 
    if (!$nit) { $nit  = isset_or('nit', ''); }; 
    if (!$contacto) { $contacto  = isset_or('contacto', ''); };
    if (!$patrono_igss) { $patrono_igss  = isset_or('patrono_igss', ''); };
        
    $btn = isset_or('btn', '');
    $resp = 0;
    
  if ($id || $nombre) {
	switch ($btn) {
            case "Insertar":
                $sql1 = "INSERT INTO ap_instituciones (
                            id,
                            nombre, 
                            pais, 
                            logo, 
                            logo_aplicacion, 
                            logo_impresion, 
                            tipo, 
                            url, 
                            email, 
                            direccion, 
                            telefono, 
                            estatus, 
                            nit, 
                            contacto,
                            patrono_igss
			) VALUES (
                            '".$id."',
                            '".utf8_decode($nombre)."', 
                            '".utf8_decode($pais)."', 
                            '".utf8_decode($logo)."', 
                            '".utf8_decode($logo_aplicacion)."', 
                            '".utf8_decode($logo_impresion)."', 
                            '".$tipo."', 
                            '".utf8_decode($url)."', 
                            '".utf8_decode($email)."', 
                            '".utf8_decode($direccion)."', 
                            '".utf8_decode($telefono)."', 
                            '".$estatus."', 
                            '".utf8_decode($nit)."', 
                            '".utf8_decode($contacto)."',
                            '".$patrono_igss."'
                        )";
	        break;
            case "Actualizar":  // Modificar
                $sql1 = " UPDATE ap_instituciones SET
                                nombre = '".utf8_decode($nombre)."', 
                                pais = '".utf8_decode($pais)."', 
                                logo = '".utf8_decode($logo)."', 
                                logo_aplicacion = '".utf8_decode($logo_aplicacion)."', 
                                logo_impresion = '".utf8_decode($logo_impresion)."', 
                                tipo = '".utf8_decode($tipo)."', 
                                url = '".utf8_decode($url)."', 
                                email = '".utf8_decode($email)."', 
                                direccion = '".utf8_decode($direccion)."', 
                                telefono = '".utf8_decode($telefono)."', 
                                estatus = '".utf8_decode($estatus)."', 
                                nit = '".utf8_decode($nit)."', 
                                contacto = '".utf8_decode($contacto)."',
                                patrono_igss = '".utf8_decode($patrono_igss)."'
                            WHERE id = '".$id."'
			";
	        break;
            case "Borrar":
	        $sql1 = "DELETE FROM ap_instituciones WHERE id = '".$id."'";
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
                        <a href="index.php?p=sistema/instituciones_list.php" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Instituciones</a>
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
              

