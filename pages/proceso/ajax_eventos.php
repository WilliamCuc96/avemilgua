<?php
    global $setpagejq; $ajaxpath;
    global $tipo; $query; $conectar; $alquileres; $mantos;
    global $eventos; $peventos; $dif_eventos; $difd_eventos; $perfil; $institucion;

    $ajaxpath = "../";

    $eventos = 0;
    $perfil = 0;

    include_once("../../libs/basicas/config.php");

    // usamos la sesion de nombre definido.
    session_name($usuarios_sesion);
    // Iniciamos el uso de sesiones
    session_start();
    // Conexion a la base de datos
    $conectar = conectar();

    $eventos    = isset_or('eventos', 0);
    $perfil     = isset_or('perfil', 0);

    $SQL = "SELECT eventos, dif_eventos FROM cy_indicadores
            WHERE perfil = '".$perfil."'
            ORDER BY id DESC LIMIT 1 ";

    // $query = mysql_query($SQL) or die( "Error en $SQL: " . mysql_error() );
    $query = mysql_query($SQL) or die( "0" );

    while($rs = mysql_fetch_array($query)){
        $dif_eventos = $eventos - $rs['eventos'];
        $difd_eventos = $dif_eventos - $rs['dif_eventos'];

        print $eventos . "|" . $rs['eventos'] . "|" . $dif_eventos;
    }
?>
