<!-- PHP -->
<?php
//Definición de Variables locales *
    // av_datos_personales
    global $id; $nombre; $nombre2; $apellido; $apellido2; $apellido3; $grado_militar; $numero_catalogo; $dpi; $direccion; $municipio; $correo; $telefono; $cantidad;


    /*$sql1 = "SELECT a.id,
                    a.nombre,
                    a.departamento_id,
                    a.departamento,
                    (SELECT COUNT(b.beneficiario) FROM av_datos_personales b WHERE b.beneficiario = 1 and b.lugar_nacimiento = a.id) as veterano,
                    (SELECT COUNT(b.beneficiario) FROM av_datos_personales b WHERE b.beneficiario <> 1 and b.lugar_nacimiento = a.id) as otro,
                    (SELECT COUNT(b.beneficiario) FROM av_datos_personales b WHERE b.lugar_nacimiento = a.id) as total,
                    (SELECT b.correo FROM av_datospersonales b WHERE )
                    a.correo,
                    a.telefono
            FROM ap_municipios a";

    $resp1 = mysql_query($sql1);*/
    $sql1 = "SELECT nombre, 
                    apellido, 
                    telefono, 
                    correo, 
                    (SELECT a.nombre FROM ap_municipios a WHERE a.id = lugar_nacimiento) as departamento 
            FROM av_datos_personales";

    $resp1 = mysql_query($sql1);

    
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><i class="fa fa-users"></i> Contacto de Veteranos</h1>
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
                                    <th>Nombre</th>
                                    <th class="hidden-xs hidden-sm">Telefono</th>
                                    <th class="hidden-xs hidden-sm">Correo</th>
                                    <th class="hidden-xs hidden-sm">Departamento</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- PHP -->
                                <?php
                                    header ("Content-type: text/csv");
                                    echo("<kits>");
                                    while($row=mysql_fetch_assoc($resp1)){
                                        print "<tr class=''>";
                                        print "  <td>".utf8_encode($row['nombre'])." ".utf8_encode($row['nombre2'])." ".utf8_encode($row['apellido'])." ".utf8_encode($row['apellido2'])."</td>";
                                        print "  <td class='hidden-xs hidden-sm'>".utf8_encode($row['telefono'])."</td>";
                                        print "  <td class='hidden-xs hidden-sm'>".utf8_encode($row['correo'])."</td>";
                                        print "  <td class='hidden-xs hidden-sm'>".utf8_encode($row['departamento'])."</td>";
                                        print "</tr>";
                                        echo("<kits>");
                                    }
                                    echo("<kits>");
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive
                    <div>
                        <form class="form-horizontal" href="../pages/usuarios/exportData.php" method="post" name="upload_excel" enctype="multipart/form-data">
                            <div class="form-group">
                                    <div class="col-md-12 col-md-offset-10">
                                        <input type="submit" name="Export" class="btn btn-success" value="export to excel"/>
                                    </div>
                            </div>                    
                        </form>
                                   
                    </div> Boton que manda a llamar el archivo que crea el CSV-->
                    <form method="post" action="../pages/usuarios/exportData.php">
                        <input type="submit" name="export" class="btn btn-success" value="Exportar CSV" />
                    </form>

                    <!--<div class="well well-sm">
                        <h4><i class="fa fa-info-circle"></i> Instrucciones</h4>
                        <ul>
                            <li>En la parte superior puede buscar un registro ingresando una porcion de texto.</li>
                            <li>Haga click en el icono <i class="fa fa-pencil"></i> para editar el registro seleccionado.</li>
                            <li>Haga click en el icono <i class="fa fa-times"></i> para eliminar el registro.</li>
                            <li>Si el registro no está en el listado y desea ingresar uno nuevo, haga click en el boton siguiente.</li>
                        </ul>
                        <a class="btn btn-warning btn-xs btn-block" target="" href="index.php?p=usuarios/av_ipm_edit.php">Ingresar nuevo donante</NAV></a>
                        <a class="btn btn-warning btn-xs btn-block" target="" href="index.php?p=usuarios/exportData.php">Descargar</NAV></a>
                    </div>-->

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

