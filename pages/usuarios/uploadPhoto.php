<?php
include_once 'class_upload.php';

$url_p= "https://".$_SERVER['HTTP_HOST']."/"."av/";
$temporal = $_REQUEST['temporal'];//trae la url de la imagein editada, donde la guarda el editor (no sirve)
$imgDelete = $_REQUEST['img'];

// echo $image_old;
$tmpfname = tempnam("/tmp", "UL_IMAGE");//$tmpfname = nombre del archivo temporal donde vamos a descargar la imagen editada
$img = file_get_contents($temporal); //$img = es la variable donde descargamos la imagen desde la url $temporal
file_put_contents($tmpfname, $img); // guardamos la imagen en la ruta $tmpfname
// echo $tmpfname;
$nuevo_nombre = uniqid();
// echo "   ".$nuevo_nombre;
$imagen2 = new upload($tmpfname);
// echo "funciona classe";
$imagen2->dir_auto_chmod = true;
$imagen2->image_convert = 'png';
$imagen2->image_greyscale = true;
$imagen2->file_new_name_ext = 'png';
$imagen2->png_compression = 9;
$imagen2->file_new_name_body   = $nuevo_nombre."_crop";

//manejando el brillo y el tamano
//$imagen2->image_brightness = 100;
$imagen2->image_resize         = true;
$imagen2->image_x              = 200;
$imagen2->image_y              = 200;
$imagen2->image_ratio_y        = false;

$image_blog = $imagen2;
$image_blog->process('../../../av/img/usuarios/');
if($image_blog->processed) {
  try {
    unlink("../../".$imgDelete);
  } catch (\Exception $e) {
    unlink("../".$imgDelete);
  }
    $img_b = $url_p . "img/usuarios/" . $nuevo_nombre . "_crop.png";
    $val = 1;
    echo $img_b;
}else {
  echo "error";
}
?>
