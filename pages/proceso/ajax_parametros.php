<?php
    global $setpagejq; $ajaxpath;
    global $tipo; $query; $conectar; $alquileres; $mantos;
    global $alarmas; $perfil; $institucion;

    $ajaxpath = "../";

    $alarmas = '';
    $perfil = '';

    include_once("../../libs/basicas/config.php");

    // usamos la sesion de nombre definido.
    session_name($usuarios_sesion);
    // Iniciamos el uso de sesiones
    session_start();
    // Conexion a la base de datos
    $conectar = conectar();

    $alarmas    = isset_or('alarmas', '');
    $perfil     = isset_or('perfil', '');

    $SQL = "SELECT
                    p.alarmas as palarmas,
                    p.eventos as peventos,
                    p.traffic_mb as ptraffic_mb,
                    p.flows as pflows,
                    p.pckets as ppckets,
                    p.telefono_docs,
                    p.email_docs
                FROM ap_perfil p
                WHERE p.id = " . $perfil . "
                ORDER BY p.id +0";

    // $query = mysql_query($SQL) or die( "Error en $SQL: " . mysql_error() );
    $query = mysql_query($SQL) or die( "0" );

    while($rs = mysql_fetch_array($query)){
        print $rs['palarmas'] . "|" . $rs['peventos'] . "|" . $rs['ptraffic_mb'] . "|" . $rs['pflows'] . "|" . $rs['ppckets'] . "|" . $rs['telefono_docs'] . "|" . $rs['email_docs'] ;
    }
?>
