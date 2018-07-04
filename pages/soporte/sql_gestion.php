<?php 

$sqltext    = htmlspecialchars($_REQUEST['sqltext']);
$btn        = htmlspecialchars($_REQUEST['btn']);

$mensaje1 = 'Resultado de su Query';
$mensaje2 = '...';
$mensaje3 = '';
//------
$query=$sqltext;
//$result=mysql_query($query) or die($mensaje3 = "Query ($query) sucks!");
$result=mysql_query($query);

if (!$result) {
    $mensaje3 = $mensaje3 . "<div class='alert alert-block alert-danger fade in'>
                <a class='close' data-dismiss='alert' href='#' aria-hidden='true'>&times;</a>
                <p><h4><i class='fa fa-exclamation-circle'></i> Atenci&oacute;n</h4> No pudo ejecutarse satisfactoriamente la consulta: (".$sql1.") en la BD: " . mysql_error() . "</p>
          </div>";
} elseif (mysql_num_rows($result) == 0) { // búsqueda satisfactoria, 0 registros encontrados
    $mensaje3 = $mensaje3 . "<div class='alert alert-block alert-warning fade in'>
                <a class='close' data-dismiss='alert' href='#' aria-hidden='true'>&times;</a>
                <p><h4><i class='fa fa-exclamation-circle'></i> Atenci&oacute;n</h4> Esta consulta no gener&oacute; registros!</p>
                
          </div>";
} else {

$fields=mysql_num_fields($result);

$mensaje3 = $mensaje3 . '<div class="panel panel-primary">
                <div class="panel-heading">
                    <i class="fa fa-database"></i>  Formato autom&aacute;tico, verse en PC.
                </div>
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-responsive  table-condensed table-bordered table-hover" id="dt-usuarios">
                            <thead>
                                <tr>';
for ($i=0; $i < mysql_num_fields($result); $i++) //Table Header
{ $mensaje3 = $mensaje3 .  "<th>".mysql_field_name($result, $i)."</th>"; }
$mensaje3 = $mensaje3 .  "</tr>
                            </thead>
                            <tbody>";
while ($row = mysql_fetch_row($result)) { //Table body
$mensaje3 = $mensaje3 .  "<tr>";
    for ($f=0; $f < $fields; $f++) {
    $mensaje3 = $mensaje3 .  "<td>$row[$f]</td>"; }
$mensaje3 = $mensaje3 .  "</tr>\n";}
$mensaje3 = $mensaje3 .  "</tbody>
                        </table>
                    </div>
                </div>
            </div>";
}
?>

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><i class="fa fa-database"></i>  Resultado de Query!</h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-md-12">
                    <?php echo utf8_encode($mensaje3); ?>
            </div>
            
            <center>
            <div class="btn-group" >
                <a class="btn btn-primary" target="" href="index.php?p=soporte/sql_go.php"><i class="fa fa-database"></i> Nueva consulta</a>
            </div>
                <br><br>
            </center>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
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
