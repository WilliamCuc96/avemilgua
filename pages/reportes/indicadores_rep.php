<?php
    date_default_timezone_set("America/Guatemala");
    global $setpagejq; $ajaxpath;
    $ajaxpath  = "../";
    include_once("../../libs/basicas/config.php");
    $conectar  = conectar();

    $fechaunix = date ( "YmdHis" );
    $fecha_ini = isset_or('fecha_ini', ''); ;
    $fecha_fin = isset_or('fecha_fin', ''); ;
    $codigo    = isset_or('codigo', '');
    $perfil    = isset_or('perfil', '');

    $dias      = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sabado");
    $meses     = array("","Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

    //echo $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
    //Salida: Viernes 24 de Febrero del 2012

    // usamos la sesion de nombre definido.
    session_name($usuarios_sesion);
    // Iniciamos el uso de sesiones
    session_start();

    // determnina el url
    $protocol = strpos(strtolower($_SERVER['SERVER_PROTOCOL']),'https')
                    === FALSE ? 'http' : 'https';

    $host     = $_SERVER['HTTP_HOST'];
    $currentHost = $protocol . '://' . $host ;

    if ($host=="localhost") {
        $currentUrl = $currentHost . "/cyberseg/pages/";
    } else {
        $currentUrl = $currentHost . "/pages/";
    }

    //Definición de Variables locales
    global $htmlinicio; $htmlfin; $disponible;
    global $id; $fecha; $hora; $alarmas; $eventos; $traffic_mb; $flows; $pckets;
    global $dif_alarmas; $dif_eventos; $usuario_alta; $fecha_alta; $perfil; $institucion;

    //Inicialización de Variables locales
    $id = '';
    $fecha = '';
    $hora = '';
    $alarmas = 0;
    $eventos = 0;
    $traffic_mb = 0;
    $flows = 0;
    $pckets = 0;
    $dif_alarmas = 0;
    $dif_eventos = 0;
    $usuario_alta = '';
    $fecha_alta = '';
    $perfil = '';
    $institucion = '';

    // Asignar el valor que viene en el request a variables
    if (!$id) { $id  = isset_or('id', '0'); };
    if (!$fecha) { $fecha  = isset_or('fecha', ''); };
    if (!$hora) { $hora  = isset_or('hora', ''); };
    if (!$alarmas) { $alarmas  = isset_or('alarmas', '0'); };
    if (!$eventos) { $eventos  = isset_or('eventos', '0'); };
    if (!$traffic_mb) { $traffic_mb  = isset_or('traffic_mb', '0'); };
    if (!$flows) { $flows  = isset_or('flows', '0'); };
    if (!$pckets) { $pckets = isset_or('pckets', '0'); };
    if (!$dif_alarmas) { $dif_alarmas  = isset_or('dif_alarmas', '0'); };
    if (!$dif_eventos) { $dif_eventos  = isset_or('dif_eventos', '0'); };
    if (!$usuario_alta) { $usuario_alta  = isset_or('usuario_alta', '0'); };
    if (!$fecha_alta) { $fecha_alta  = isset_or('fecha_alta', '0'); };
    if (!$perfil) { $perfil  = isset_or('perfil', '0'); };
    if (!$institucion) { $institucion  = isset_or('institucion', '0'); };

    $eptotalon = 0;
    $cargos = 0;
    $pagos = 0;
    $saldo = 0;

    //Programacion de Funcionalidad para mostrar datos de la pagina /soundex (compara sonido)
    $var_where1 = ' ';
    //  $var_where1 = $var_where1 . " AND e.estatus > 0 ";

    // Condiciones del campo de Search pequeño
    if ($codigoc) {
        $var_where1 = $var_where1 . " AND UPPER(c.codigo) LIKE UPPER('%" . $codigoc . "%') "
                                  . " OR UPPER(c.cliente) LIKE UPPER('%" . $codigoc . "%') "
                                  . " OR UPPER(c.nit) LIKE UPPER('%" . $codigoc . "%') "
                                 // . " OR CAST(c.codcasa as VARCHAR(50)) LIKE '" . $codigoc . "' "
                                  . " OR UPPER(c.nombre) LIKE UPPER('%" . $codigoc . "%') "
                                  . " OR UPPER(c.nombrecomercial) LIKE UPPER('%" . $codigoc . "%') "
                                  . " OR UPPER(c.npropietario) LIKE UPPER('%" . $codigoc . "%') "  ;
    };


    if ($institucion) {
        $var_where1 = $var_where1 . " AND b.institucion = '" . $institucion . "' ";
    };
    if ($perfil) {
        $var_where1 = $var_where1 . " AND b.perfil = '" . $perfil . "' ";
    };

    // Consulta SQL
    // echo " [Where]" . $s_where . "[FIN]";
    $sql1 = "SELECT b.id,
                            b.fecha,
                            b.hora,
                            b.alarmas,
                            b.eventos,
                            b.traffic_mb,
                            b.flows,
                            b.pckets,
                            b.dif_alarmas,
                            b.dif_eventos,
                            b.usuario_alta,
                            b.fecha_alta,
                            b.perfil,
                            (select p.nombre from ap_perfil p where p.id = b.perfil) as cliente,
                            b.institucion
			FROM cy_indicadores b
                        WHERE b.fecha BETWEEN '".$fecha_ini."' AND '".$fecha_fin."'
			" . $var_where1 . " ";
    if ($_SESSION['usuario_nivel'] != 1) {
		$sql1 = $sql1 . " AND b.institucion = '" . $_SESSION['usuario_institucion'] . "' ";
    };

	$sql1 = $sql1 . "  order by b.fecha, b.hora ";
    //	echo "<br>[SQL] ".$sql. " [Fin SQL]";

    // viene de estadiasticas
    if ($alarmas) {
        $sql1 = " SELECT 	b.id,
                  		b.fecha,
                          b.hora,
                          b.alarmas,
                          b.eventos,
                          b.traffic_mb,
                          b.flows,
                          b.pckets,
                          b.dif_alarmas,
                          b.dif_eventos,
                          b.usuario_alta,
                          b.fecha_alta,
                          b.perfil,
                          (select p.nombre from ap_perfil p where p.id = b.perfil) as cliente,
                          b.institucion
                  FROM 	cy_indicadores b
                  WHERE 	month(b.fecha) = month(now()) AND year(b.fecha) = year(now())
                  and b.dif_alarmas > 0
                  order by b.fecha, b.hora ";
    };
    if ($eventos) {
        $sql1 = "SELECT 	b.id,
                      		b.fecha,
                              b.hora,
                              b.alarmas,
                              b.eventos,
                              b.traffic_mb,
                              b.flows,
                              b.pckets,
                              b.dif_alarmas,
                              b.dif_eventos,
                              b.usuario_alta,
                              b.fecha_alta,
                              b.perfil,
                              (select p.nombre from ap_perfil p where p.id = b.perfil) as cliente,
                              b.institucion
                      FROM 	cy_indicadores b
                      WHERE 	month(b.fecha) = month(now()) AND year(b.fecha) = year(now())
                      and b.dif_eventos > 0
                      order by b.fecha, b.hora";
    };
    if ($traffic_mb) {
        $sql1 = "SELECT 	b.id,
                      		b.fecha,
                              b.hora,
                              b.alarmas,
                              b.eventos,
                              b.traffic_mb,
                              b.flows,
                              b.pckets,
                              b.dif_alarmas,
                              b.dif_eventos,
                              b.usuario_alta,
                              b.fecha_alta,
                              b.perfil,
                              (select p.nombre from ap_perfil p where p.id = b.perfil) as cliente,
                              b.institucion
                      FROM 	cy_indicadores b
                      WHERE 	month(b.fecha) = month(now()) AND year(b.fecha) = year(now())
                      and b.traffic_mb > (select p.traffic_mb from ap_perfil p where p.id = b.perfil)
                      order by b.fecha, b.hora";
    };
    if ($flows) {
        $sql1 = "SELECT 	b.id,
                      		b.fecha,
                          b.hora,
                          b.alarmas,
                          b.eventos,
                          b.traffic_mb,
                          b.flows,
                          b.pckets,
                          b.dif_alarmas,
                          b.dif_eventos,
                          b.usuario_alta,
                          b.fecha_alta,
                          b.perfil,
                          (select p.nombre from ap_perfil p where p.id = b.perfil) as cliente,
                          b.institucion
                  FROM 	cy_indicadores b
                  WHERE 	month(b.fecha) = month(now()) AND year(b.fecha) = year(now())
                  and b.flows > (select f.flows from ap_perfil f where f.id = b.perfil)
                  order by b.fecha, b.hora";
    };

    //    echo '---------------------------------------------------------- Aca voy '.$perfil. ' - '.$sql1;
    //exit;
    $resp1 = mysql_query($sql1);


?>
<?php
if (!$resp1) { // Error en la ejecución del query

    $errmsg = "No pudo ejecutarse satisfactoriamente la consulta en la BD";

    $resp2 = $currentUrl."index.php?p=panel/error.php&errmsg=".$errmsg."";
       // echo $resp2;
       // exit;
    redirect($resp2);

} elseif (mysql_num_rows($resp1) == 0) { // búsqueda satisfactoria, 0 registros encontrados

    $errmsg = "No se encontraron registros en su búsqueda!";

    $resp2 = $currentUrl."index.php?p=panel/error.php&errmsg=".$errmsg."";
       // echo $resp2;
       // exit;
    redirect($resp2);

} else {
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition:  filename=\"REP-".$fechaunix.".xls\";");
    //setlocale(LC_TIME,"es_ES");
    setlocale(LC_TIME, 'es_GT.UTF-8');
?>
<html>
<body>
  <table id="rounded-corner" summary="Reporte de Indicadores">
        <tfoot>
            <tr>
                <td colspan="37" align="center" class="rounded-foot-left"><strong>Indicadores al  </strong><em><span style="color:green;"><?php echo date( "Y-m-d H:i:s" ) ?></span></em></td>
                <td class="rounded-foot-right">&nbsp;</td>
            </tr>
        </tfoot>
        <thead>
            <tr>
                <th scope="col" class="rounded">Dia</th>
                <th scope="col" class="rounded">Fecha</th>
                <th scope="col" class="rounded">Hora</th>
                <th scope="col" class="rounded"></th>
                <th scope="col" class="rounded">Alarmas</th>
                <th scope="col" class="rounded">Eventos</th>
                <th scope="col" class="rounded">Traffic mb/s</th>
                <th scope="col" class="rounded">Flows</th>
                <th scope="col" class="rounded">Pckets</th>
                <th scope="col" class="rounded">Dif Alarmas</th>
                <th scope="col" class="rounded">Dif Eventos</th>
                <th scope="col" class="rounded">Mes</th>
                <th scope="col" class="rounded">Perfil</th>
                <th scope="col" class="rounded">Cliente</th>
        </thead>
        <tbody>
        <?php
            while($row=mysql_fetch_assoc($resp1)){
                print '<tr>';
                $eptotalon = $eptotalon + $row['saldo'];
                $newDate = date("d/m/Y", strtotime($row['fecha']));
                //print "  <td nowrap='nowrap'>".date("l", strtotime($row['fecha']))."</td>";
                print "  <td nowrap='nowrap'>".$dias[date("w", strtotime($row['fecha']))]."</td>";
                print "  <td nowrap='nowrap'>'".$newDate."</td>";
                print "  <td nowrap='nowrap'>'".date("H:i", strtotime($row['hora']))."</td>";
                print "  <td nowrap='nowrap'>".date("G", strtotime($row['hora']))."</td>";
                print "  <td nowrap='nowrap'>".$row['alarmas']."</td>";
                print "  <td nowrap='nowrap'>".$row['eventos']."</td>";
                print "  <td nowrap='nowrap'>".$row['traffic_mb']."</td>";
                print "  <td nowrap='nowrap'>".$row['flows']."</td>";
                print "  <td nowrap='nowrap'>".$row['pckets']."</td>";
                print "  <td nowrap='nowrap'>".$row['dif_alarmas']."</td>";
                print "  <td nowrap='nowrap'>".$row['dif_eventos']."</td>";
                print "  <td nowrap='nowrap'>".date("m", strtotime($row['fecha'])).'-'.$meses[date("n", strtotime($row['fecha']))].'-'.date("Y", strtotime($row['fecha']))."</td>";
                print "  <td nowrap='nowrap'>".$row['perfil']."</td>";
                print "  <td nowrap='nowrap'>".$row['cliente']."</td>";
                print "</tr>";
            }
            mysql_free_result($resp1);
	?>
        </tbody>
    </table>
</body>
</html>
<?php  }; ?>
