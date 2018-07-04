<?php

global $id; $perfil; $inicio_fecha; $inicio_hora; $duracion; $protocolo; $ip_origen; $puerto_origen;
global $direccion; $ip_destino; $puerto_destino; $packets; $bytes; $flows; $thora; $tfecha;

//Inicialización de Variables locales
$tfecha = '';
$thora = '';
$perfil = '';
$s_where = '';

// Asignar el valor que viene en el request a variables
if (!$tfecha) { $tfecha  = isset_or('tfecha', ''); };
if (!$thora) { $thora  = isset_or('thora', ''); };
if (!$perfil) { $perfil  = isset_or('perfil', '0'); };

    $sql1 = "SELECT
                  b.id,
                  b.perfil,
                  b.inicio_fecha,
                  b.inicio_hora,
                  b.duracion,
                  b.protocolo,
                  b.ip_origen,
                  b.puerto_origen,
                  b.direccion,
                  b.ip_destino,
                  b.puerto_destino,
                  b.packets,
                  b.bytes,
                  b.flows,
                  b.thora,
                  b.tfecha
                FROM cy_topten b
    WHERE b.thora = '".$thora."' AND b.tfecha = '".$tfecha."' AND b.perfil = '".$perfil."' ";

    $resp1 = mysql_query($sql1);

?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><i class="fa fa-gift"></i> Listado Top10</h1>
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
                    Listado Top 10
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-responsive table-striped table-bordered table-hover" id="dt-usuarios">
                            <thead>
                                <tr>
                                    <th>Perfil</th>
                                    <th class="">Fecha</th>
                                    <th class="">Hora</th>
                                    <th class="">Duración</th>
                                    <th class=''>Protocolo</th>
                                    <th class="hidden-xs hidden-sm">IP Origen</th>
                                    <th class="">Pto</th>
                                    <th class="">Dir</th>
                                    <th class=''>IP Destino</th>
                                    <th class=''>Pto</th>
                                    <th class=''>Pckets</th>
                                    <th class=''>Bytes</th>
                                    <th class="hidden-xs hidden-sm">Flows</th>
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
                                print "  <td>".utf8_encode($row['perfil'])."</td>";
                                print "  <td>".utf8_encode($row['inicio_fecha'])."</td>";
                                print "  <td>".utf8_encode($row['inicio_hora'])."</td>";
                                print "  <td>".utf8_encode($row['duracion'])."</td>";
                                print "  <td>".utf8_encode($row['protocolo'])."</td>";
                                print "  <td>".utf8_encode($row['ip_origen'])."</td>";
                                print "  <td>".utf8_encode($row['puerto_origen'])."</td>";
                                print "  <td>".utf8_encode($row['direccion'])."</td>";
                                print "  <td>".utf8_encode($row['ip_destino'])."</td>";
                                print "  <td>".utf8_encode($row['puerto_destino'])."</td>";
                                print "  <td class='hidden-xs hidden-sm'>".utf8_encode($row['packets'])."</td>";
                                print "  <td class='hidden-xs hidden-sm'>".utf8_encode($row['bytes'])."</td>";
                                print "  <td class='hidden-xs hidden-sm'>".utf8_encode($row['flows'])."</td>";

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
