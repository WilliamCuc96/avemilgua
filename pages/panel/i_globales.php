<?php
setlocale(LC_TIME, "es_GT");


/* 
 * Variables Globales presentes o de utilidad en todas las paginas
 * Conect a la base de datos
 * Función de generacion de Log de tranzacciones
 */
//echo '--- Globales<br>';
    // Definición de Variables
    global $prefijo_path; $titulo_pag;	// Path de Directorios
    global $var_where1; $var_where2; $resp; $resp1; $resp2; $resp3; $sql1; $sql2; $sql3; $sql4; $row1; $row2; $row3; $row;
    global $conectar; $tt_id; $entorno; $mensaje1; $mensaje2; $mensaje3; $btn; $plbreadcrumb; $pltitulo; $pldescripcion;
    global $setpagejq; $ninstitucion; $plvalidarinst; $plvalidarinst2;
    global $idUsuarioL; $nickUsuarioL; $emailUsuarioL; $nombreUsuarioL; 
    global $ap_cuenta_mail; $ap_pass_mail; $ap_correo_mail; $ap_nombre_mail; $ap_forma_mail; $ap_smtpauth_mail; 
    global $ap_servidor_mail; $ap_puerto_mail; $ap_error_mail; $ap_wordwrap_mail; $ap_ishtml_mail; 
    global $ap_nombre_ct; $ap_nombre_lg; $ap_ico; $ap_logo_login; $ap_logo_interno; $ap_alt_logo; $ap_estiloCSS;  $ap_estilo_login; $ap_estilo_panel;
    
    $plvalidarinst = "";
    $plvalidarinst2 = "";
    
     // Coneccion de la Base de Datos
    $conectar = conectar();
    
    // Función de Log de transacciones
    //echo 'Usuario Nick: <b>' . $_SESSION['usuario_nick'] . '</b><br>';
    //echo 'URL: <b>' . $_SERVER['REQUEST_URI'] . '</b><br>';

?>