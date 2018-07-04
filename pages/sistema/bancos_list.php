<?php

    //Definición de Variables locales
    global $id; $nombre; $siglas; $cuenta; $tipo_cuenta; $contacto; $codigo; $telefono; $institucion; $email; $estatus; $condominio;
    
    //Inicialización de Variables locales
    $id = '';
    $nombre = '';
    $siglas = ''; 
    $cuenta = ''; 
    $tipo_cuenta = ''; 
    $contacto = ''; 
    $codigo = ''; 
    $telefono = ''; 
    $institucion = ''; 
    $email = ''; 
    $estatus = ''; 
    $condominio = '';
    
    // Asignar el valor que viene en el request a variables
    if (!$id) { $id  = isset_or('id', '0'); };
    if (!$nombre) { $nombre  = isset_or('nombre', ''); }; 
    if (!$siglas) { $siglas  = isset_or('siglas', '0'); }; 
    if (!$cuenta) { $cuenta  = isset_or('cuenta', '0'); }; 
    if (!$tipo_cuenta) { $tipo_cuenta  = isset_or('tipo_cuenta', '0'); }; 
    if (!$contacto) { $contacto  = isset_or('contacto', '0'); }; 
    if (!$codigo) { $codigo  = isset_or('codigo', '0'); }; 
    if (!$telefono) { $telefono  = isset_or('telefono', '0'); }; 
    if (!$institucion) { $institucion  = isset_or('institucion', '0'); }; 
    if (!$email) { $email  = isset_or('email', '0'); }; 
    if (!$estatus) { $estatus  = isset_or('estatus', '0'); };
    if (!$condominio) { $condominio  = isset_or('condominio', '0'); };
    
    // Consulta SQL
    // echo " [Where]" . $s_where . "[FIN]";
    $sql1 = "SELECT b.id,
                    b.nombre,
                    b.siglas, 
                    b.cuenta, 
                    b.tipo_cuenta, 
                    b.contacto, 
                    b.codigo, 
                    b.telefono, 
                    b.institucion, 
                    b.condominio,
                    b.email, 
                    b.estatus,
                    (select t.nombre from ap_catalogos t where t.tipo_catalogo = 22 AND t.id = b.tipo_cuenta) as ntipo_cuenta,
                    (select e.nombre from ap_catalogos e where e.tipo_catalogo = 3 AND e.id = b.estatus) as nestatus,
                    (select i.nombre from ap_instituciones i where i.id = b.institucion) as ninstitucion,
                    (select c.nombre from ap_perfil c where c.id = b.condominio) as ncondominio
                FROM ig_bancos b
		WHERE 1=1 ";
    if ($_SESSION['usuario_nivel'] != 1) {
	$sql1 = $sql1 . "	AND b.institucion = '" . $_SESSION['usuario_institucion'] . "' ";
    };
	$sql1 = $sql1 . "  order by b.id +0";
    //	echo "<br>[SQL] ".$sql. " [Fin SQL]";
    $resp1 = mysql_query($sql1);
    
    ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><i class="fa fa-gift"></i> Listado de Bancos</h1>
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
                <br><br>
                    <center>
                    <div class='btn-group' >
                        <a class='btn btn-success' target='' href='index.php?p=sistema/bancos_edit.php'><i class='fa fa-plus-circle'></i> Ingresar un nuevo banco</a>
                    </div>
                    </center>
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
                                    <th class="hidden-xs hidden-sm">Id</th>
                                    <th>Nombre</th>
                                    <th class="hidden-xs hidden-sm">Tipo</th>
                                    <th class="hidden-xs hidden-sm">Siglas</th>
                                    <th class="hidden-xs hidden-sm">Estatus</th>
                                    <th class='hidden-xs'>Cuenta / Código</th>
                                    <?php  if ($_SESSION['usuario_nivel'] == 1) { ?>
                                    <th class="hidden-xs hidden-sm">Institución</th>
                                    <?php  }; ?>
                                    <th class="hidden-xs hidden-sm">Condominio</th>
                                    <th class=""  align='center' nowrap><i class="fa fa-cogs"></i></th>
                                </tr>
                            </thead>
                            <tbody>
<!-- / (Peledahe) -->


                        <?php 
                            while($row=mysql_fetch_assoc($resp1)){
                                print "<tr class='gradeA'>";
                                print "  <td class='hidden-xs hidden-sm'>".$row['id']."</td>";
                                print "  <td>".utf8_encode($row['nombre'])."</td>";
                                print "  <td class='hidden-xs hidden-sm'>".utf8_encode($row['ntipo_cuenta'])."</td>";
                                print "  <td class='hidden-xs hidden-sm'>".utf8_encode($row['siglas'])."</td>";
                                print "  <td class='hidden-xs hidden-sm'>".utf8_encode($row['nestatus'])."</td>";
                                print "  <td class='hidden-xs'>".utf8_encode($row['cuenta'])." / ".utf8_encode($row['codigo'])."</td>";
                                if ($_SESSION['usuario_nivel'] == 1) {
                                    print "  <td class='hidden-xs hidden-sm'>".utf8_encode($row['ninstitucion'])."</td>";
                                };
                                print "  <td class='hidden-xs hidden-sm'>".utf8_encode($row['ncondominio'])."</td>";
                                print "  <td class='center' align='center'>
                                            <a href='index.php?p=sistema/bancos_edit.php&id=".$row['id']."' title='Editar Banco' ><button class='btn btn-xs btn-default'><i class='fa fa-pencil'></i></button></a>
                                            <a href='index.php?p=sistema/bancos_gestion.php&id=".$row['id']."&btn=Borrar' title='Borrar Banco' ><button class='btn btn-xs btn-default'><i class='fa fa-times'></i></button></a> 
                                         </td>";
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
                        <center>
                            <div class='btn-group' >
                                <a class='btn btn-success' target='' href='index.php?p=sistema/bancos_edit.php'><i class='fa fa-plus-circle'></i> Ingresar un nuevo banco</a>
                            </div>
                        </center>
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