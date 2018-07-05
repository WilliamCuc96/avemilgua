<?php
include_once 'class_upload.php';
echo 'hola';
$url_p= "http://".$_SERVER['HTTP_HOST']."/"."avemilgua/";
$temporal = $_REQUEST['temporal'];//trae la url de la imagein editada, donde la guarda el editor (no sirve)
$actual = $_REQUEST['actual'];//ruta de la primer image (hay que eliminarla)

$image_old = str_replace($url_p,'', $actual);
unlink($image_old);
echo $image_old;
$tmpfname = tempnam("/tmp", "UL_IMAGE");//$tmpfname = nombre del archivo temporal donde vamos a descargar la imagen editada
$img = file_get_contents($temporal); //$img = es la variable donde descargamos la imagen desde la url $temporal
file_put_contents($tmpfname, $img); // guardamos la imagen en la ruta $tmpfname
echo $tmpfname;
$nuevo_nombre = uniqid();
echo "   ".$nuevo_nombre;
$imagen2 = new upload($tmpfname);
echo "funciona classe";
$imagen2->dir_auto_chmod = true;
$imagen2->image_convert = 'png';
$imagen2->file_new_name_ext = 'png';
$imagen2->png_compression = 9;
$imagen2->file_new_name_body   = $nuevo_nombre."_crop24";
$image_blog = $imagen2;
$image_blog->process('../../../avemilgua/img/usuarios/');
if($image_blog->processed) {
    $img_b = $url_p . "img/usuarios/" . $nuevo_nombre . "_crop24.png";
    $val = 1;
    echo $img_b;
}else {
  echo "error";
}
?>
