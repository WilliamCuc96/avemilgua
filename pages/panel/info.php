<?php
global $treservaciones; $toficinas_virtuales; $tsocios; $tmorosos; $totalon2; $hhh;

$treservaciones = 0;
$toficinas_virtuales = 0;
$tsocios = 0;
$tmorosos = 0;
$hhh = '';

$sql1 = "select
        (SELECT count(h.dif_eventos) FROM cy_indicadores h WHERE h.fecha = CURDATE() and h.dif_eventos > 0) as oficinas_virtuales ,
        (SELECT count(k.dif_alarmas) FROM cy_indicadores k WHERE k.fecha = CURDATE() and k.dif_alarmas > 0)  as reservaciones,
        (SELECT count(i.traffic_mb) FROM cy_indicadores i WHERE i.fecha = CURDATE() and i.traffic_mb > (select p.traffic_mb from ap_perfil p where p.id = i.perfil)) as socios,
        (SELECT count(j.traffic_mb) FROM cy_indicadores j WHERE j.fecha = CURDATE() and j.flows > (select f.flows from ap_perfil f where f.id = j.perfil)) as morosos";

/*
$sql1 = "select
        (SELECT count(i.dif_eventos) FROM cy_indicadores i WHERE ((day(b.fecha) = day(now()) and month(b.fecha) = month(now()) and year(b.fecha) = year(now())) and dif_eventos > 0) as oficinas_virtuales ,
        (SELECT count(i.dif_alarmas) FROM cy_indicadores i WHERE ((day(b.fecha) = day(now()) and month(b.fecha) = month(now()) and year(b.fecha) = year(now())) and dif_alarmas > 0)  as reservaciones,
        (SELECT count(i.traffic_mb) FROM cy_indicadores i WHERE ((day(b.fecha) = day(now()) and month(b.fecha) = month(now()) and year(b.fecha) = year(now())) and i.traffic_mb > (select p.traffic_mb from ap_perfil p where p.id = i.perfil)) as socios,
        (SELECT count(j.traffic_mb) FROM cy_indicadores j WHERE ((day(b.fecha) = day(now()) and month(b.fecha) = month(now()) and year(b.fecha) = year(now())) and j.flows > (select f.flows from ap_perfil f where f.id = j.perfil)) as morosos";
*/
$resp1 = mysql_query($sql1);
while($row=mysql_fetch_assoc($resp1)){
    $treservaciones = $row['reservaciones'];
    $toficinas_virtuales = $row['oficinas_virtuales'];
    $tsocios = $row['socios'];
    $tmorosos = $row['morosos'];
}
?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><i class="fa fa-dashboard fa-fw"></i> Tablero Administrativo</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-bullhorn fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $treservaciones; ?></div>
                            <div>Alarmas!</div>
                        </div>
                    </div>
                </div>
                <!--
                <a href="reportes/indicadores_rep.php?alarmas=<?php echo $treservaciones; ?>">
                -->
                  <a href="index.php?p=proceso/indicadores_list.php&alarmas=<?php echo $treservaciones; ?>">
                    <div class="panel-footer">
                        <span class="pull-left">Ver Detalles</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-bug fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $toficinas_virtuales; ?></div>
                            <div>Eventos!</div>
                        </div>
                    </div>
                </div>
                <a href="index.php?p=proceso/indicadores_list.php&eventos=<?php echo $toficinas_virtuales; ?>">
                    <div class="panel-footer">
                        <span class="pull-left">Ver Detalles</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-road fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $tsocios; ?></div>
                            <div>Tráfico!</div>
                        </div>
                    </div>
                </div>
                <a href="index.php?p=proceso/indicadores_list.php&traffic_mb=<?php echo $tsocios; ?>">
                    <div class="panel-footer">
                        <span class="pull-left">Ver Detalles</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-stack-overflow fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $tmorosos; ?></div>
                            <div>Flows!</div>
                        </div>
                    </div>
                </div>
                <a href="index.php?p=proceso/indicadores_list.php&flows=<?php echo $tmorosos; ?>">
                    <div class="panel-footer">
                        <span class="pull-left">Ver Detalles</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <div class="row">

<?php if ($_SESSION['usuario_nivel'] <= 3) { ?>
        <div class="col-lg-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Indices de Seguridad del Mes
                </div>
                <div class="panel-body">
                    <div id="morris-line-chart"></div>
                 <!--   <a href="#" class="btn btn-info btn-block">Total Egresos; Q <?php echo number_format($totalon2,2,'.',','); ?></a> -->
                </div>
            </div>
        </div>
<?php
// Datos para grafico de linea
//Reemplaza <script src="../js/morris-data1.js"></script>

$sql1 = "select g.destino,
            (select c.comodin from ap_catalogos c where c.tipo_catalogo = 32 and g.destino = c.id) as ndestino,
            sum(g.valor) valor
        from ig_gasto g
        where year(g.fecha_documento) = year(now())
        and month(g.fecha_documento) >= month(now())-1
        group by g.destino
        order by ndestino;";

//$resp1 = mysql_query($sql1);
$totalon2 = 0;
while($row=mysql_fetch_assoc($resp1)){
    extract($row);
    $data1 .= '{ label: "'.utf8_encode($ndestino).'", value: '.round($valor).' },'.PHP_EOL;
    $totalon2 = $totalon2 + $valor;
}
//$data1 = $data1 . '{ label: "Varios", value: 0 }'; // Primera Fila

$hhh = "<script>
    $(function() {

        Morris.Donut({
          element: 'morris-donut-chart',
          data: [$data1],
          colors: [
                        'blue','red','green','orange','purple'
                    ],
            resize: true
        });
      });
      </script>";

?>

        <!--
        <div class="col-lg-4">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <i class="fa fa-pie-chart fa-fw"></i> Top 10 de Eventos
                </div>
                <div class="panel-body">
                    <div id="morris-donut-chart"></div>
                    <a href="#" class="btn btn-danger btn-block">Total Evetos <?php echo number_format($totalon2,0,'.',','); ?></a>
                </div>

            </div>

        </div>
      -->
<?php } ?>
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->

<!-- Ventana-modal -->
<div class="modal fade" id="events-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <!--
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" aria-label="Close">&times;</button>
                -->
                <h4 class="modal-title"><i class="fa fa-calendar-o"></i> Descripción del Evento</h4>
            </div>
            <div class="modal-body" style="height: 500px">
            </div>
            <!--
            <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            -->
        </div>
    </div>
</div>
<!-- /Ventana-modal -->

<?php include_once 'panel/i_foot.php'; ?>
<!-- Morris Charts JavaScript -->
<script src="../bower_components/bootstrap-calendar/js/app.js" type="text/javascript"></script>
<?php if ($_SESSION['usuario_nivel'] <= 3) { ?>
<script src="../bower_components/raphael/raphael-min.js"></script>
<script src="../bower_components/morrisjs/morris.min.js"></script>

<!--
<script src="../js/morris-data1.js"></script>
-->
<?php
// Datos para grafico de linea
//Reemplaza <script src="../js/morris-data1.js"></script>
$sql1 = "select concat(i.fecha,' ',hour(i.hora),':00:00') as m, i.fecha as ff,
       (SELECT count(j.dif_eventos) FROM cy_indicadores j WHERE hour(j.hora) = hour(i.hora) and j.dif_eventos > 0) as b,
       (SELECT count(k.dif_alarmas) FROM cy_indicadores k WHERE hour(k.hora) = hour(i.hora) and k.dif_alarmas > 0) as d,
       (SELECT count(l.traffic_mb) FROM cy_indicadores l WHERE hour(l.hora) = hour(i.hora) and l.traffic_mb > (select p.traffic_mb from ap_perfil p where p.id = l.perfil)) as a,
       (SELECT count(m.flows) FROM cy_indicadores m WHERE hour(m.hora) = hour(i.hora) and m.flows > (select f.flows from ap_perfil f where f.id = m.perfil)) as c
from cy_indicadores i
where  i.fecha = CURDATE()
group by hour(i.hora)";

$resp1 = mysql_query($sql1);

while($row=mysql_fetch_assoc($resp1)){
    extract($row);
    $data .= "{ m: '".$m."', a: ".round($a).", b: ".round($b).", c: ".round($c).", d: ".round($d)." },".PHP_EOL;
}
//$hoy = date("Y-m-");
//$data = $data . "{ m: '".$hoy."01"."', a: 0, b: 0, c: 0, d: 0}"; // Primera Fila
$ini = date("Y-m-d")." 00:00:01";
$data = $data . "{ m: '".$ini."', a: 0, b: 0, c: 0, d: 0}"; // Primera Fila

echo "<script>
    $(function() {

        Morris.Line({
          element: 'morris-line-chart',
          data: [$data],
          xkey: 'm',
          ykeys: ['a', 'b', 'c', 'd'],
          labels: ['Trafico', 'Eventos', 'Flows', 'Alarmas'],
          pointSize: 2,
          fillOpacity: 0.6,
          lineColors:['blue','red','green','orange'],
          resize: true
        });
      });
      </script>";
 echo $hhh;
?>
<?php } ?>

<!-- Finaliza Area Scripts Locales -->
