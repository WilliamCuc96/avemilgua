<?php

global $id; $fecha; $hora; $alarmas; $eventos; $traffic_mb; $flows; $pckets;
global $dif_alarmas; $dif_eventos; $usuario_alta; $fecha_alta; $perfil; $institucion;

//Inicialización de Variables locales
$id = '';
$fecha = '';
$hora = '';
$alarmas = '';
$eventos = '';
$traffic_mb = '';
$flows = '';
$pckets = '';
$dif_alarmas = '';
$dif_eventos = '';
$usuario_alta = '';
$fecha_alta = '';
$perfil = '';
$institucion = '';
$s_where = '';

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

if ($alarmas) {
  $s_where = $s_where . " and b.dif_alarmas > 0";
} elseif ($eventos) {
  $s_where = $s_where . " and b.dif_eventos > 0";
} elseif ($traffic_mb) {
  $s_where = $s_where . " and b.traffic_mb > (select p.traffic_mb from ap_perfil p where p.id = b.perfil)";
} elseif ($flows) {
  $s_where = $s_where . " and b.flows > (select f.flows from ap_perfil f where f.id = b.perfil)";
}

    // Consulta SQL
    // echo " [Where]" . $s_where . "[FIN]";

    $sql1 = "SELECT b.id,
                    b.fecha,
                    b.hora,
                    b.fechat,
                    b.horat,
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
                    b.institucion,
                    (select i.nombre from ap_instituciones i where i.id = b.institucion) as ninstitucion,
                    (select c.nombre from ap_perfil c where c.id = b.perfil) as ncondominio
                FROM cy_indicadores b
		WHERE (day(b.fecha) = day(now()) and month(b.fecha) = month(now()) and year(b.fecha) = year(now())) " . $s_where . " ";
    /*
    if ($_SESSION['usuario_nivel'] != 1) {
	$sql1 = $sql1 . "	AND b.institucion = '" . $_SESSION['usuario_institucion'] . "' ";
    };
    */
//	$sql1 = $sql1 . "  order by b.id +0";
    //	echo "<br>[SQL] ".$sql. " [Fin SQL]";
    $resp1 = mysql_query($sql1);

    ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><i class="fa fa-gift"></i> Listado de Incidencias</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
<?php
if (!$resp1) { // Error en la ejecución del query
    echo "<div class='alert alert-block alert-danger fade in'>
                <a class='close' data-dismiss='alert' href='#' aria-hidden='true'>&times;</a>
                <p><h4><i class='fa fa-exclamation-circle'></i> Atención</h4> No pudo ejecutarse satisfactoriamente la consulta: (".$sql1.") en la BD: " . mysql_error() . "</p>
          </div>";
        //exit;
} elseif (mysql_num_rows($resp1) == 0) { // búsqueda satisfactoria, 0 registros encontrados
    echo "<div class='alert alert-block alert-warning fade in'>
                <a class='close' data-dismiss='alert' href='#' aria-hidden='true'>&times;</a>
                <p><h4><i class='fa fa-exclamation-circle'></i> Atención</h4> No se encontraron registros en su búsqueda!</p>
          </div>";
} else {
    echo "<div class='alert alert-block alert-success fade in'>
                <a class='close' data-dismiss='alert' href='#' aria-hidden='true'>&times;</a>
                <p><h4><i class='fa fa-check-square-o'></i> ".mysql_num_rows($resp1)." Registros encontrados</h4> Búsqueda satisfactoria, seleccione el registro que desea gestionar por medio del ícono  (<i class='fa fa-pencil'></i>) </p>
            </div>";
?>

<div class="panel panel-primary">
                <div class="panel-heading">
                    Listado de Bancos para pagos
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-responsive table-striped table-bordered table-hover" id="dt-usuarios">
                            <thead>
                                <tr>
                                    <th>Cliente</th>
                                    <th class="">Fecha</th>
                                    <th class="">Hora</th>
                                    <th class="">Dif. Alarmas</th>
                                    <th class=''>Dif. Eventos</th>
                                    <th class="hidden-xs hidden-sm">Traffic mb/s</th>
                                    <th class="hidden-xs hidden-sm">Flows</th>
                                    <th class="hidden-xs hidden-sm">Pckets</th>
                                    <!--
                                    <th class=""  align='center' nowrap><i class="fa fa-cogs"></i></th>
                                  -->
                                </tr>
                            </thead>
                            <tbody>
<!-- / (Peledahe) -->


                        <?php
                            while($row=mysql_fetch_assoc($resp1)){
                                print "<tr class='gradeA'>";
                                print "  <td>".utf8_encode($row['ncondominio'])."</td>";
                                print "  <td>".utf8_encode($row['fecha'])."</td>";
                                print "  <td>".utf8_encode($row['hora'])."</td>";
                                print "  <td>".utf8_encode($row['dif_alarmas'])."</td>";
                                print "  <td>".utf8_encode($row['dif_eventos'])."</td>";
                                print "  <td class='hidden-xs hidden-sm'>".utf8_encode($row['traffic_mb'])."</td>";
                                print "  <td class='hidden-xs hidden-sm'>".utf8_encode($row['flows'])."</td>";
                                print "  <td class='hidden-xs hidden-sm'>".utf8_encode($row['pckets'])."</td>";
                                /*
                                print "  <td class='center' align='center'>
                                            <a href='index.php?p=sistema/bancos_edit.php&id=".$row['id']."' title='Editar Banco' ><button class='btn btn-xs btn-default'><i class='fa fa-pencil'></i></button></a>
                                            <a href='index.php?p=sistema/bancos_gestion.php&id=".$row['id']."&btn=Borrar' title='Borrar Banco' ><button class='btn btn-xs btn-default'><i class='fa fa-times'></i></button></a>
                                         </td>";
                                */
                                print "</tr>";
                            };
                        ?>
                        <!-- /Inicia Final (Peledahe) -->
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                    <div class="well well-sm">
                        <h4><i class="fa fa-info-circle"></i> Instrucciones</h4>
                        <ul>
                            <li>En la parte superior puede buscar un registro ingresando una porcion de texto.</li>
                            <li>Haga click en el icono <i class="fa fa-list-alt"></i> para ver el listado de elementos de perfiles de la institución seleccionada.</li>
                            <li>Haga click en el icono <i class="fa fa-pencil"></i> para editar el registro seleccionado.</li>
                            <li>Haga click en el icono <i class="fa fa-times"></i> para borrar el registro seleccionado.</li>
                            <li>Si el registro no está en el listado y desea ingresar uno nuevo, haga click en el boton siguiente.</li>
                        </ul>
                        <a class="btn btn-warning btn-xs btn-block" target="" href="index.php?p=proceso/indicadores_edit.php">Ingresar un nuevo registro</a>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
<?php } ?>
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->

<?php include_once 'panel/i_foot.php'; ?>

<!-- DataTables JavaScript -->
<script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
<script src="../bower_components/datatables-plugins/api/dataTables.fixedHeader.js" type="text/javascript"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
$(document).ready(function() {
    $('#dt-usuarios').DataTable({
        responsive: true,
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros por página",
            "zeroRecords": "Lo sentimos - no se encontraros registros",
            "info": "Mostrando página _PAGE_ de _PAGES_",
            "search": "Filtrar:",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(filtro de un total de _MAX_ registros)",
            paginate: {
                first:      "Inicio",
                previous:   "Anterior",
                next:       "Siguiente",
                last:       "Fin"
            },
        }
    });

});

$(document).ready(function() {
    var t1 = $('#dt-usuarios').eq(0).DataTable();
    new $.fn.dataTable.FixedHeader( t1, {
        bottom: true
    } );

 //   var t2 = $('table.display').eq(1).DataTable();
 //   new $.fn.dataTable.FixedHeader( t2, {
 //       bottom: true
 //   } );
} );
</script>
