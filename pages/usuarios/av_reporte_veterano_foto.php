<!-- PHP -->
<?php

//Definición de Variables locales *
    // av_datos_personales
    global $id; $nombre; $nombre2; $apellido; $apellido2; $apellido3; $grado_militar; $numero_catalogo; $dpi; $direccion; $municipio; $correo; $telefono; $cantidad;

    $sql1 = "SELECT a.id,
                    a.nombre,
                    a.departamento_id,
                    a.departamento,
                    (SELECT COUNT(b.beneficiario) FROM av_datos_personales b WHERE b.foto <> '' and b.lugar_nacimiento = a.id) as foto,
                    (SELECT COUNT(b.beneficiario) FROM av_datos_personales b WHERE b.foto = '' and b.lugar_nacimiento = a.id) as nofoto,
                    (SELECT COUNT(b.foto) FROM av_datos_personales b WHERE b.lugar_nacimiento = a.id) as total
            FROM ap_municipios a";

    $resp1 = mysql_query($sql1);
?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><i class="fa fa-users"></i> Reporte de Veteranos Por Departamento y Municipio</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">

<!-- PHP -->
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
                    Listado de Ingresados en el Sistema
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-responsive table-striped table-bordered table-hover" id="dt-usuarios">
                            <thead>
                                <tr>
                                    <!-- PENDIENTE ESTE CAMBIO -->
                                    <th>Departamento</th>
                                    <th class="hidden-xs hidden-sm">Municipio</th>
                                    <th class="hidden-xs hidden-sm">Con Foto</th>
                                    <th class="hidden-xs">Sin Foto</th>
                                </tr>
                            </thead>
                            <tbody>

<!-- PHP -->
<?php
    while($row=mysql_fetch_assoc($resp1)){
        print "<tr class=''>";
        print "  <td>".utf8_encode($row['nombre'])." ".utf8_encode($row['departamento'])." ".utf8_encode($row['apellido'])." ".utf8_encode($row['apellido2'])."</td>";
        print "  <td class='hidden-xs hidden-sm'>".utf8_encode($row['nombre'])."</td>";
        print "  <td class='hidden-xs hidden-sm'>".utf8_encode($row['foto'])."</td>";
        print "  <td class='hidden-xs'>".utf8_encode($row['nofoto'])."</td>";
        print "</tr>";
    }
?>
                                 </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->

                    <div class="well well-sm">
                        <h4><i class="fa fa-info-circle"></i> Instrucciones</h4>
                        <ul>
                            <li>En la parte superior puede buscar un registro ingresando una porcion de texto.</li>
                            <li>Haga click en el icono <i class="fa fa-pencil"></i> para editar el registro seleccionado.</li>
                            <li>Haga click en el icono <i class="fa fa-times"></i> para eliminar el registro.</li>
                            <li>Si el registro no está en el listado y desea ingresar uno nuevo, haga click en el boton siguiente.</li>
                        </ul>
                        <a class="btn btn-warning btn-xs btn-block" target="" href="index.php?p=usuarios/av_ipm_edit.php">Ingresar nuevo donante</NAV></a>
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
            "zeroRecords": "Lo sentimos - no se encontraron registros",
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
