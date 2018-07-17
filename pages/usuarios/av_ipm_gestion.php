<!-- PHP -->
<?php
//Definición de Variables locales *
    global $id; $nombre; $nombre2; $apellido; $apellido2; $apellido3; $grado_militar; $numero_catalogo; $dpi; $direccion; $municipio; $correo; $telefono; $cantidad;

//Inicialización de Variables locales *
    $mensaje1 = '';
    $mensaje2 = '';
    $mensaje3 = '';

    $id = '';
    $nombre = '';
    $nombre2 = '';
    $apellido = '';
    $apellido2 = '';
    $apellido3 = '';
    $grado_militar = '';
    $numero_catalogo = '';
    $dpi = '';
    $direccion = '';
    $municipio = '';
    $correo = '';
    $telefono = '';
    $cantidad = '';

    // Asignar el valor que viene en el request a variables *
    if (!$id) { $id  = isset_or('id', '0'); };
    if (!$nombre) { $nombre = isset_or('nombre', ''); };
    if (!$nombre2) { $nombre2 = isset_or('nombre2', ''); };
    if (!$apellido) { $apellido = isset_or('apellido', ''); };
    if (!$apellido2) { $apellido2 = isset_or('apellido2', ''); };
    if (!$apellido3) { $apellido3 = isset_or('apellido3', ''); };
    if (!$grado_militar) { $grado_militar = isset_or('grado_militar', ''); };
    if (!$numero_catalogo) { $numero_catalogo = isset_or('numero_catalogo', ''); };
    if (!$dpi) { $dpi = isset_or('dpi', ''); };
    if (!$direccion) { $direccion = isset_or('direccion', ''); };
    if (!$municipio) { $municipio = isset_or('municipio', ''); };
    if (!$correo) { $correo = isset_or('correo', ''); };
    if (!$telefono) { $telefono = isset_or('telefono', ''); };
    if (!$cantidad) { $cantidad = isset_or('cantidad', ''); };

    if (!$btn) { $btn = isset_or('btn', ''); };

    //Programacion de Funcionalidad para mostrar datos de la pagina*

    $btn            = isset_or('btn', '');
    $resp           = 0;

    function success_msg() {
        global $mensaje1, $mensaje2, $mensaje3;
        $mensaje1 = '<button type="button" class="btn btn-success btn-circle btn-xl"><i class="fa fa-check"></i></button>';
        $mensaje2 = utf8_encode('Su gestion fue exitosa');
        $mensaje3 = utf8_encode('Gracias por usar nuestro servicio!');
    }

    function error_msg() {
        global $mensaje1, $mensaje2, $mensaje3;
        $mensaje1 = '<button type="button" class="btn btn-danger btn-circle btn-xl"><i class="fa fa-times"></i></button>';
        $mensaje2 = utf8_encode('Error de base de datos');
        $mensaje3 = utf8_encode('Su gestion no pudo ser realizada, intentelo de nuevo!');
    }

    switch ($btn) {
        case "Insertar":
            $sql1 = "INSERT INTO av_datos_ipm (id, nombre, nombre2, apellido,
                    apellido2, apellido3, grado_militar, numero_catalogo ,dpi,
                    direccion, municipio, correo, telefono, cantidad) VALUES (
                    '".$id."','".utf8_decode($nombre)."','".utf8_decode($nombre2)."',
                    '".utf8_decode($apellido)."', '".utf8_decode($apellido2)."',
                    '".utf8_decode($apellido3)."', '".utf8_decode($grado_militar)."',
                    '".utf8_decode($numero_catalogo)."', '".$dpi."', '".utf8_decode($direccion)."',
                    '".$municipio."', '".utf8_decode($correo)."', '".utf8_decode($telefono)."',
                    '".$cantidad."');";
            break;
        case "Actualizar":
            $sql1 = "UPDATE av_datos_ipm SET
                    nombre ='".utf8_decode($nombre)."',
                    nombre2 = '".utf8_decode($nombre2)."',
                    apellido = '".utf8_decode($apellido)."',
                    apellido2 = '".utf8_decode($apellido2)."',
                    apellido3 = '".utf8_decode($apellido3)."',
                    grado_militar =  '".utf8_decode($grado_militar)."',
                    numero_catalogo =  '".utf8_decode($numero_catalogo)."',
                    dpi = '".$dpi."',
                    direccion = '".utf8_decode($direccion)."',
                    municipio = '".utf8_decode($municipio)."',
                    correo =  '".utf8_decode($correo)."',
                    telefono = '".utf8_decode($telefono)."',
                    cantidad = '".$cantidad."'
                    WHERE id = '".$id."'";
             break;
        case "Borrar":
            $sql1 = "DELETE FROM av_datos_ipm WHERE id = '".$id."'";
            break;
    }

    if (mysql_query($sql1)) {
        success_msg();
    } else {
        error_msg();
    }

?>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><i class="fa fa-ambulance"></i> Gestión de Ingresados</h1>
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
                        <a href="index.php?p=usuarios/av_ipm_list.php" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Listado de Ingresados</a>
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
<!-- *: indica que es material/comentarios del cascaron inicial de webappbase -->