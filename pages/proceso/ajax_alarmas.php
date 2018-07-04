<?php
    global $setpagejq; $ajaxpath;
    global $tipo; $query; $conectar; $alquileres; $mantos;
    global $alarmas; $palarmas; $dif_alarmas; $difd_alarmas; $perfil; $institucion;

    $ajaxpath = "../";

    $alarmas = 0;
    $perfil = 0;

    include_once("../../libs/basicas/config.php");

    // usamos la sesion de nombre definido.
    session_name($usuarios_sesion);
    // Iniciamos el uso de sesiones
    session_start();
    // Conexion a la base de datos
    $conectar = conectar();

    $alarmas    = isset_or('alarmas', 0);
    $perfil     = isset_or('perfil', 0);

    $SQL = "SELECT alarmas, dif_alarmas FROM cy_indicadores
            WHERE perfil = '".$perfil."'
            ORDER BY id DESC LIMIT 1 ";

    // $query = mysql_query($SQL) or die( "Error en $SQL: " . mysql_error() );
    $query = mysql_query($SQL) or die( "0" );

    while($rs = mysql_fetch_array($query)){
        $dif_alarmas = $alarmas - $rs['alarmas'];
      //  $difd_alarmas = $dif_alarmas - $rs['dif_alarmas'];

        print $alarmas . "|" . $rs['alarmas'] . "|" . $dif_alarmas;
    }

?>
