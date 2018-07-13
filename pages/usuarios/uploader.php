<?php
$archivo = new upload($_FILES['archivo']); // Recibir la imagen

$nuevo_nombre = "nombre_de_prueba";

if($archivo->uploaded) { // Subir la imagen a la libreria
    
    // Redimencionar la imagen para acoplarla mejor al sistema
    $archivo->dir_auto_chmod = true;
    //$archivo->png_compression = 9;
    $archivo->file_new_name_body   = $nuevo_nombre; // El nombre que le vas a poner

    //$archivo->image_resize         = true;
    //$archivo->image_x              = 150;
    //$archivo->image_ratio_y        = true;

    $archivo->process('vendalo.com/uploads/logo'); // Carpeta a la que se subira la imagen

    if($archivo->processed)  // Subir la imagen a la carpeta
      $archivo->clean(); // Limpiar el registro de la variable para la imagen
    else
      echo 'error : ' . $archivo->error; // Error

}
?>