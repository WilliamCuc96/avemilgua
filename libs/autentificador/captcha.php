<?php
//  Captcha
//  Generación de Imagen Captcha PHP+GD+sesiones
//  by Perry Daniels
//  perry@insayd.com
//  v1.0  - 17/04/2009 Version inicial.
//
// Licencia GPL con estas extensiones:
// - Uselo con el fin que quiera (personal o lucrativo).
// - Si encuentra el codigo de utilidad y lo usas, mandeme un mail si lo desea.
// - Si mejora el codigo o encuentra errores, hagamelo saber el mail indicado.

include('../../libs/basicas/config.php');
session_name($usuarios_sesion);
session_start();
function randomText($length,$type=0) {
	switch ($type) {
		case 0: $pattern = "23456789abcdefghijkmnpqrstuvwxyz"; break;
		case 1: $pattern = "abcdefghijklmnopqrstuvwxyz"; break;
		case 2: $pattern = "1234567890"; break;
		case 3: $pattern = "23456789abcdefghijkmnpqrstuvwxyz+-*%&_"; break;
		case 4: $pattern = "abcdefghijkmnpqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ23456789+-/*%&_@"; break;
	}
	
	// Claves dificiles
	
	$max = strlen($pattern)-1;
	for($i=0;$i < $length;$i++) $key .= $pattern{mt_rand(0,$max)};
	return $key;
}

$_SESSION['tmptxt'] = randomText(5);

$maxx=100;
$maxy=30;
//$imagen=imagecreate($maxx, $maxy); //Crea la imagen en memoria desde la nada

$imagen = imagecreatefrompng("../../img/logo/captcha.png"); //Crea la imagen en memoria desde otra imagen
//$imagen = imagecreatefromgif("captcha.png"); //Crea la imagen en memoria desde otra imagen
//$colText = imagecolorallocate($captcha, 'fff', 'fff', 'fff');
$blanco = imagecolorallocate($imagen,255,255,255);
$amarillo_claro = imagecolorallocate($imagen,255,255,128);
$azul_marino = imagecolorallocate($imagen,0,0,255);
$negro = imagecolorallocate($imagen,0,0,0);
$otro = imagecolorallocate($imagen,210,50,45);
//imagestring($captcha, 5, 16, 7, $_SESSION['tmptxt'], $colText);  // (para 8 caracteres)
imagestring($imagen, 5, 30, 7, $_SESSION['tmptxt'], $otro);  // (para 5 caracteres)

header("Content-type: image/png");
//imagegif($imagen);
imagepng($imagen);
	//Eliminamos el espacio que ocupa la imagen en memoria
	//imagedestroy($imagen);

?>

