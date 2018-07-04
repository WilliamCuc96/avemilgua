<?php

    //Definición de Variables locales
    global $btn; $resp; $archivo; $tipo; $destino; $carpeta; $descripcion; $observaciones;
    global $objReader; $objPHPExcel; $objFecha; $perfil;
    
    //Inicialización de Variables locales
    $btn        = '';
    $resp       = 0;
    $perfil = '8';
    $archivo    = '';
    $tipo       = '';
    $destino    = '';
    $descripcion        = '';
    $observaciones      = '';
    //$carpeta    = '/var/www/html/cyberseg/upload/';
    $carpeta    = '../upload/';
    $objReader  = '';
    $objPHPExcel = '';
    $objFecha   = '';
    
    // Asigna valores que vienen en el requert
    if (!$btn) { $btn = isset_or('btn', ''); }
    if (!$perfil) { $perfil = isset_or('perfil', ''); }
    if (!$descripcion) { $descripcion = isset_or('descripcion', ''); }
    if (!$observaciones) { $observaciones = isset_or('observaciones', ''); }
    
    if ($btn == 'Upload') {
        
        $archivo = $_FILES['archivo']['name'];
        $tipo = $_FILES['archivo']['type'];
        $destino = $carpeta.'bak_'.$archivo;

        // Subir archivo
        if (move_uploaded_file($_FILES['archivo']['tmp_name'],$destino)) { 
            $mensaje1 = '<button type="button" class="btn btn-success btn-circle btn-xl"><i class="fa fa-check"></i></button>';
            $mensaje2 = utf8_encode('Archivo Cargado Con Éxito - '.$observaciones.' - '.$descripcion);
            $mensaje3 = utf8_encode('Gracias por usar nuestro servicio!'."<br />" . 
                        "Nombre: " . $_FILES["archivo"]["name"] . "<br />" .
                        "Tipo: " . $_FILES["archivo"]["type"] . "<br />" .
                        "Tamaño: " . ($_FILES["archivo"]["size"] / 1024) . " Kb<br />");      
            
            // Leer Archivo
            if (file_exists ($destino)){
                /** Clases necesarias para leer excel*/
                require_once('../libs/PHPExcel.php');
                require_once('../libs/PHPExcel/Reader/Excel2007.php');
                
                // Cargando la hoja de cálculo
                $objReader = new PHPExcel_Reader_Excel2007();
                $objPHPExcel = $objReader->load($destino);
                $objFecha = new PHPExcel_Shared_Date();

                // Asignar hoja de excel activa
                $objWorksheet = $objPHPExcel->setActiveSheetIndex(0);
                $rowtot = $objWorksheet->getHighestRow();  // ultima linea de la hoja
                
                // Llenamos el arreglo con los datos  del archivo xlsx

                for ($i=1;$i<=$rowtot;$i++){
                    $celda = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
                    if ($celda != 'Dia') {
                        $_DATOS_EXCEL[$i]['fechat'] = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
                        $_DATOS_EXCEL[$i]['horat'] = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
                        $_DATOS_EXCEL[$i]['alarmas']= $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
                        $_DATOS_EXCEL[$i]['eventos']= $objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();
                        $_DATOS_EXCEL[$i]['traffic_mb'] = $objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue();
                        $_DATOS_EXCEL[$i]['flows'] = $objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue();
                        $_DATOS_EXCEL[$i]['pckets'] = $objPHPExcel->getActiveSheet()->getCell('I'.$i)->getCalculatedValue();
                        $_DATOS_EXCEL[$i]['dif_alarmas'] = $objPHPExcel->getActiveSheet()->getCell('J'.$i)->getCalculatedValue();
                        $_DATOS_EXCEL[$i]['dif_eventos'] = $objPHPExcel->getActiveSheet()->getCell('J'.$i)->getCalculatedValue();
                       // $mensaje3 = $mensaje3 . ' - ' . $i . $_DATOS_EXCEL[$i]['fecha'] . ' - ';
                    }
                }
                
                // recorremos el arreglo multidimensional
                // para ir recuperando los datos obtenidos
                // del excel e ir insertandolos en la BD

                foreach($_DATOS_EXCEL as $campo => $valor){

                    $sql = "INSERT INTO cy_indicadores  (id, perfil, fechat, horat,alarmas, eventos, traffic_mb, flows, pckets, dif_alarmas, dif_eventos)  VALUES (NULL,".$perfil.",'";

                    foreach ($valor as $campo2 => $valor2){

                        $campo2 == "dif_eventos" ? $sql.= $valor2."');" : $sql.= $valor2."','";

                    }

                    $result = mysql_query($sql);

                    if (!$result){ 
                        $mensaje1 = '<button type="button" class="btn btn-danger btn-circle btn-xl"><i class="fa fa-times"></i></button>';
                        $mensaje2 = utf8_encode('Error al insertar el registro '.$sql);
                        $mensaje3 = utf8_encode('Su gestion no pudo ser realizada, intentelo de nuevo!');
                        $errores+=1;
                    } else {
                        $mensaje1 = '<button type="button" class="btn btn-success btn-circle btn-xl"><i class="fa fa-check"></i></button>';
                        $mensaje2 = utf8_encode('Su gestion fue exitosa ');
                     //   $mensaje3 = $mensaje3 . utf8_encode('Gracias por usar nuestro servicio!');
                    }

                }
                
            } else {
                $mensaje1 = '<button type="button" class="btn btn-danger btn-circle btn-xl"><i class="fa fa-times"></i></button>';
                $mensaje2 = utf8_encode('Error - No se encuentra el archivo'."<br />" . 
                            "Nombre: " . $_FILES["archivo"]["name"] . "<br />" .
                            "Tipo: " . $_FILES["archivo"]["type"] . "<br />" .
                            "Tamaño: " . ($_FILES["archivo"]["size"] / 1024) . " Kb<br />");
                $mensaje3 = utf8_encode('Su gestion no pudo ser realizada, intentelo de nuevo!');
            }
            
        } else {
            $mensaje1 = '<button type="button" class="btn btn-danger btn-circle btn-xl"><i class="fa fa-times"></i></button>';
            $mensaje2 = utf8_encode('Error Al Cargar el Archivo'."<br />" . 
                        "Nombre: " . $_FILES["archivo"]["name"] . "<br />" .
                        "Tipo: " . $_FILES["archivo"]["type"] . "<br />" .
                        "Tamaño: " . ($_FILES["archivo"]["size"] / 1024) . " Kb<br />");
            $mensaje3 = utf8_encode('Su gestion no pudo ser realizada, intentelo de nuevo!');
        }

    } else {
        
    	$mensaje1 = '<button type="button" class="btn btn-danger btn-circle btn-xl"><i class="fa fa-times"></i></button>';
    	$mensaje2 = 'Error de envío de datos en formulario';
	$mensaje3 = 'No se trasladaron datos para su gestión, intentelo de nuevo!';
        
    } // End if
?>
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><i class="fa fa-wrench"></i> Gestión de Carga de Archivos</h1>
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
                        <a href="index.php?p=proceso/subirarchivo_go.php" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Regresar a subir Archivo</a>
                        
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