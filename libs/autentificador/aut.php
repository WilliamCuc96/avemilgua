<?php // No almacenar en el cache del navegador esta pagina.
   require("aut_verifica.inc.php");
   header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
   header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
   header("Cache-Control: no-cache, must-revalidate");
   header("Pragma: no-cache");
   
   $com_nivel 		= $_SESSION['usuario_nivel'];
   $com_usuario 	= $_SESSION['usuario_login'];
   $com_ip 		= $_SERVER["REMOTE_ADDR"];    // ip del cliente
?>