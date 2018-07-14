<?php 
	$carpeta = "archivos/";
	opendir($carpeta);
	$destino = $carpeta.$FILES['nombre_archivo']['name'];
	copy($FILES['nombre_archivo']['tmp_name'],$destino);
	$nombre_archivo=$_FILES['nombre_archivo']['name'];
?>