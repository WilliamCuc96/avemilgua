<!-- PHP -->
<?php

include_once('../class.upload.php');

//Definición de Variables locales *
    // av_datos_personales
    global $id; $codigo; $nombre; $nombre2; $apellido; $apellido2; $apellido3; $dpi; $genero; $fecha_nacimiento; $vecindad; $estado_civil; $profesion; $direccion; $telefono; $correo; $lugar_nacimiento; $nit; $beneficiario; $foto; //$nacionalidad;

    // av_datos_servicios
    global $grado_militar; $compania; $puesto; $fecha_alta; $fecha_baja; $motivo_baja; $computo_servicios; $sueldo_mensual; $zona_militar; $img_edited; $last_id;


//Inicialización de Variables locales *
    $last_id = '';
    $mensaje1 = '';
    $mensaje2 = '';
    $mensaje3 = '';
    $mensaje4 = 'Para generar un PDF es necesario agregar una imagen en la información del usuario';
    // av_datos_personales
    $id = '';
    $codigo = '';
    $nombre = '';
    $nombre2 = '';
    $apellido = '';
    $apellido2 = '';
    $apellido3 = '';
    $dpi = '';
    $foto ='';
    $fecha_vencimiento_carnet = date("Y-m-d H:i:s");
    $nuevafecha = strtotime ( '+2 year' , strtotime ( $fecha_vencimiento_carnet ) ) ;
    $nuevafecha = date("Y-m-d H:i:s" , $nuevafecha );
    //$nacionalidad = '';
    $genero = '';
    $beneficiario = '';
    $fecha_nacimiento = '';
    $lugar_nacimiento = '';
    $vecindad = '';
    $estado_civil = '';
    $profesion = '';
    $direccion = '';
    $telefono = '';
    $correo = '';
    $nit = '';

    // av_datos_servicios
    $grado_militar = '';
    $compania = '';
    $puesto = '';
    $fecha_alta = '';
    $fecha_baja = '';
    $motivo_baja = '';
    $computo_servicios = '';
    $sueldo_mensual = '';
    $zona_militar = '';
    $img_edited = '';

    // Asignar el valor que viene en el request a variables *
    if (!$id) { $id  = isset_or('id', '0'); };
    if (!$codigo) { $codigo  = isset_or('codigo', ''); };
    if (!$nombre) { $nombre = isset_or('nombre', ''); };
    if (!$nombre2) { $nombre2 = isset_or('nombre2', ''); };
    if (!$apellido) { $apellido = isset_or('apellido', ''); };
    if (!$apellido2) { $apellido2 = isset_or('apellido2', ''); };
    if (!$apellido3) { $apellido3 = isset_or('apellido3', ''); };
    if (!$dpi) { $dpi = isset_or('dpi', ''); };
    if (!$foto) { $foto = isset_or('foto', ''); };
    if (!$fecha_vencimiento_carnet) { $fecha_vencimiento_carnet = isset_or('fecha_vencimiento_carnet', ''); };
    //if (!$nacionalidad) { $nacionalidad = isset_or('nacionalidad', ''); };
    if (!$genero) { $genero = isset_or('genero', ''); };
    if (!$beneficiario) { $beneficiario = isset_or('beneficiario', ''); };
    if (!$fecha_nacimiento) { $fecha_nacimiento = isset_or('fecha_nacimiento', ''); };
    if (!$lugar_nacimiento) { $lugar_nacimiento = isset_or('lugar_nacimiento', ''); };
    if (!$vecindad) { $vecindad = isset_or('vecindad', ''); };
    if (!$estado_civil) { $estado_civil = isset_or('estado_civil', ''); };
    if (!$profesion) { $profesion = isset_or('profesion', ''); };
    if (!$direccion) { $direccion = isset_or('direccion', ''); };
    if (!$telefono) { $telefono = isset_or('telefono', ''); };
    if (!$correo) { $correo = isset_or('correo', ''); };
    if (!$nit) { $nit = isset_or('nit', ''); };

    if (!$grado_militar) { $grado_militar = isset_or('grado_militar', ''); };
    if (!$compania) { $compania = isset_or('compania', ''); };
    if (!$puesto) { $puesto = isset_or('puesto', ''); };
    if (!$fecha_alta) { $fecha_alta = isset_or('fecha_alta', ''); };
    if (!$fecha_baja) { $fecha_baja = isset_or('fecha_baja', ''); };
    if (!$motivo_baja) { $motivo_baja = isset_or('motivo_baja', ''); };
    if (!$computo_servicios) { $computo_servicios = isset_or('computo_servicios', ''); };
    if (!$sueldo_mensual) { $sueldo_mensual = isset_or('sueldo_mensual', ''); };
    if (!$zona_militar) { $zona_militar = isset_or('zona_militar', ''); };
    if (!$img_edited) { $img_edited = isset_or('image_aviary', ''); };


    $new_name = "carne_".$id;
    // subirFoto($new_name);


    if (!$btn) { $btn = isset_or('btn', ''); };

    //Programacion de Funcionalidad para mostrar datos de la pagina*

    $btn            = isset_or('btn', '');
    $resp           = 0;


    function success_msg() {
        global $mensaje1, $mensaje2, $mensaje3;
        $mensaje1 = '<button type="button" class="btn btn-success btn-circle btn-xl"><i class="fa fa-check"></i></button>';
        $mensaje2 = $sql1;
        $mensaje3 = utf8_encode('Gracias por usar nuestro servicio!');
    }

    function error_msg() {
        global $mensaje1, $mensaje2, $mensaje3;
        $mensaje1 = '<button type="button" class="btn btn-danger btn-circle btn-xl"><i class="fa fa-times"></i></button>';
        $mensaje2 = utf8_encode('Error de base de datos');
        $mensaje3 = utf8_encode('Su gestion no pudo ser realizada, intentelo de nuevo!');
        //$mensaje3 = utf8_encode($sql1);
    }

switch ($btn) {
        case "Insertar":
            $sql1 = "INSERT INTO av_datos_personales (codigo, nombre, nombre2,
                    apellido, apellido2, apellido3, dpi, genero, beneficiario,
                    fecha_nacimiento, lugar_nacimiento, vecindad, estado_civil,
                    profesion, direccion, telefono, correo, nit, foto) VALUES (
                    '".utf8_decode($codigo)."', '".utf8_decode($nombre)."',
                    '".utf8_decode($nombre2)."', '".utf8_decode($apellido)."',
                    '".utf8_decode($apellido2)."', '".utf8_decode($apellido3)."',
                    '".$dpi."', '".$genero."', '".$beneficiario."',
                    '".$fecha_nacimiento."', '".$lugar_nacimiento."', '".$vecindad."',
                    '".$estado_civil."', '".$profesion."',
                    '".utf8_decode($direccion)."', '".utf8_decode($telefono)."',
                    '".utf8_decode($correo)."', '".utf8_decode($nit)."', '".utf8_decode($img_edited)."');";
            if (mysql_query($sql1)) {
                $last_id = mysql_insert_id();

            $sql2 = "INSERT INTO av_datos_servicios (id, grado_militar,
                    compania, puesto, fecha_alta, fecha_baja, motivo_baja,
                    computo_servicios, sueldo_mensual, zona_militar) VALUES ('".$last_id."',
                    '".utf8_decode($grado_militar)."', '".utf8_decode($compania)."',
                    '".utf8_decode($puesto)."', '".utf8_decode($fecha_alta)."',
                    '".utf8_decode($fecha_baja)."', '".utf8_decode($motivo_baja)."',
                    '".utf8_decode($computo_servicios)."', '".$sueldo_mensual."',
                    '".utf8_decode($zona_militar)."');";
                if (mysql_query($sql2)) {
                    success_msg();
                } else {
                    error_msg();
                }
              } else {
                  error_msg();
              }
            break;

        case "Actualizar":
            $sql1 = "UPDATE av_datos_personales SET
                    codigo = '".utf8_decode($codigo)."',
                    nombre ='".utf8_decode($nombre)."',
                    nombre2 = '".utf8_decode($nombre2)."',
                    apellido = '".utf8_decode($apellido)."',
                    apellido2 = '".utf8_decode($apellido2)."',
                    apellido3 = '".utf8_decode($apellido3)."',
                    dpi = '".$dpi."', nacionalidad = '".utf8_decode($nacionalidad)."',
                    genero = '".$genero."',
                    fecha_nacimiento = '".$fecha_nacimiento."',
                    lugar_nacimiento = '".utf8_decode($lugar_nacimiento)."',
                    vecindad = '".utf8_decode($vecindad)."',
                    estado_civil = '".$estado_civil."',
                    profesion = '".$profesion."',
                    direccion = '".utf8_decode($direccion)."',
                    telefono = '".utf8_decode($telefono)."',
                    correo =  '".utf8_decode($correo)."',
                    nit = '".utf8_decode($nit)."',
                    foto = '".utf8_decode($img_edited)."'
                    WHERE id = '".$id."'";
                    if (mysql_query($sql1)) {
             $sql2 = "UPDATE av_datos_servicios SET
                    grado_militar =  '".utf8_decode($grado_militar)."',
                    compania = '".utf8_decode($compania)."',
                    puesto = '".utf8_decode($puesto)."',
                    fecha_alta =  '".utf8_decode($fecha_alta)."',
                    fecha_baja = '".utf8_decode($fecha_baja)."',
                    motivo_baja = '".utf8_decode($motivo_baja)."',
                    computo_servicios = '".utf8_decode($computo_servicios)."',
                    sueldo_mensual = '".$sueldo_mensual."',
                    zona_militar = '".utf8_decode($zona_militar)."'
                    WHERE id = '".$id."'";
                    if (mysql_query($sql2)) {
                        success_msg();
                    } else {
                        error_msg();
                    }
                  } else {
                      error_msg();
                  }
             break;
        case "Borrar":
        if (mysql_query($sql1)) {
            $sql1 = "DELETE FROM av_datos_personales WHERE id = '".$id."'";
            $sql2 = "DELETE FROM av_datos_servicios WHERE id = '".$id."'";
            if (mysql_query($sql2)) {
                success_msg();
            } else {
                error_msg();
            }
          } else {
              error_msg();
          }

            break;
    }

    function subirFoto($nfoto){
        $foto = new upload($_FILES['foto']); // Recibir la imagen

        if($foto->uploaded) { // Subir la imagen a la libreria

            // Redimencionar la imagen para acoplarla mejor al sistema
            $foto->dir_auto_chmod = true;
            $foto->image_convert = 'png';
            $foto->file_new_name_ext = 'png';
            $foto->png_compression = 9;
            $foto->file_new_name_body   = $nfoto; // El nombre que le vas a poner

            $foto->image_resize         = true;
            $foto->image_x              = 1130;
            $foto->image_y              = 1210;
            $foto->image_ratio_y        = false;

            $foto->process('../img/usuarios'); // Carpeta a la que se subira la imagen

            if($foto->processed)  // Subir la imagen a la carpeta
                $foto->clean(); // Limpiar el registro de la variable para la imagen
            else
                echo 'error : ' . $foto->error; // Error

        }
    }


?>

<?php
//query for PDF
if(!$id){
$id = $last_id;
}
$sqlpdf = "SELECT codigo,
                nombre,
                nombre2,
                apellido,
                apellido2,
                apellido3,
                dpi,
                foto
        FROM av_datos_personales
        WHERE id = ".$id;
        $data = mysql_query($sqlpdf);
        $data = mysql_fetch_assoc($data);

 ?>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><i class="fa fa-ambulance"></i> Gestión de Veteranos</h1>
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
                        <a href="../pdf/carnet/carnet1.php?nombre=<?php echo $data['nombre']; ?>&nombre2=<?php echo $data['nombre2']; ?>&apellido=<?php echo $data['apellido']; ?>&apellido2=<?php echo $data['apellido2']; ?>&dpi=<?php echo $data['dpi']; ?>&codigo=<?php echo $data['codigo']; ?>&foto=<?php echo $data['foto']; ?>" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i> Generar PDF 1</a>
                    </div>
                    <div class="btn-group">
                        <a href="../pdf/carnet/carnet2.php?nombre=<?php echo $data['nombre']; ?>&nombre2=<?php echo $data['nombre2']; ?>&apellido=<?php echo $data['apellido']; ?>&apellido2=<?php echo $data['apellido2']; ?>&dpi=<?php echo $data['dpi']; ?>&codigo=<?php echo $data['codigo']; ?>&foto=<?php echo $data['foto']; ?>" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i> Generar PDF 2</a>
                    </div>
                    <div class="btn-group">
                        <a href="../pdf/carnet/carnet3.php?nombre=<?php echo $data['nombre']; ?>&nombre2=<?php echo $data['nombre2']; ?>&apellido=<?php echo $data['apellido']; ?>&apellido2=<?php echo $data['apellido2']; ?>&dpi=<?php echo $data['dpi']; ?>&codigo=<?php echo $data['codigo']; ?>&foto=<?php echo $data['foto']; ?>" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i> Generar PDF 3</a>
                    </div>
                    <div class="btn-group">
                        <a href="../pdf/carnet/carnet4.php?nombre=<?php echo $data['nombre']; ?>&nombre2=<?php echo $data['nombre2']; ?>&apellido=<?php echo $data['apellido']; ?>&apellido2=<?php echo $data['apellido2']; ?>&dpi=<?php echo $data['dpi']; ?>&codigo=<?php echo $data['codigo']; ?>&foto=<?php echo $data['foto']; ?>" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i> Generar PDF 4</a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <div class="">
                    <h3></h3>
                    <div class="btn-group">
                        <a href="index.php?p=usuarios/av_usuarios_list.php" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Listado de Veteranos</a>
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
