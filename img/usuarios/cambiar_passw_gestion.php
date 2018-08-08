<?php
    
    //Definición de Variables locales
    global $nick; $password; $password2; $institucion; $mensaje1; $mensaje2; $mensaje3;
    
    // Asignación de valores de Variables
    $nick     		= isset_or('nick', $_SESSION['usuario_login']);
    $password  		= isset_or('password', '');
    $password2  	= isset_or('password2', '');// isset_or('fecha', date('Y-m-d'));
    $institucion	= $_SESSION['usuario_institucion'];    
    $btn 		= isset_or('btn', '');
    $resp 		= 0;
    
    if ($password == $password2) {
        switch ($btn) {
            case "Actualizar":  // Modificar
                $sql1 = " UPDATE ap_usuarios SET
                            password = '".$password."'
                            WHERE nick = '".$nick."'
                            AND institucion = '".$institucion."'
                        ";
                break;
    	} // End switch
    	
	    if (mysql_query($sql1)){
	        $tt_id=mysql_insert_id(); // retorna el ultimo id creado
	        $mensaje1 = '<button type="button" class="btn btn-success btn-circle btn-xl"><i class="fa fa-check"></i></button>';
	        $mensaje2 = 'Cambio de Contraseña exitosa';
	        $mensaje3 = 'Gracias por usar nuestro servicio!';
	    } else {
	    	$mensaje1 = '<button type="button" class="btn btn-danger btn-circle btn-xl"><i class="fa fa-times"></i></button>';
	    	$mensaje2 = 'Error inesperado';
	        $mensaje3 = 'La contraseña no pudo ser modificada, intentelo de nuevo!';
	        $resp = 0;
	    }
    	
    } else {
    	$sql1 = "Passwd no iguales";
    	$mensaje1 = '<button type="button" class="btn btn-danger btn-circle btn-xl"><i class="fa fa-times"></i></button>';
    	$mensaje2 = 'Las contraseñas no son iguales';
	$mensaje3 = 'La contraseña no pudo ser modificada, intentelo de nuevo!';
    }; // End if

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
                <a href="index.php?p=usuarios/cambiar_passw.php" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Cambiar Contraseña</a>
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