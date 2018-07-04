<?php

    //Definición de Variables locales
    global $id; $nombre; $nombre_corto; $tipo; $precio; $estatus; $institucion; $fecha_precio; $usuario_precio; $precio_fijo;
    global $ntipo; $nestatus; $nprecio_fijo;
    global $incluyecorte; $descripcion_lg;
    
    //Inicialización de Variables locales
    $id = '';
    $nombre = ''; 
    $nombre_corto = ''; 
    $tipo = ''; 
    $precio = ''; 
    $estatus = ''; 
    $institucion = ''; 
    $fecha_precio = ''; 
    $usuario_precio = ''; 
    $precio_fijo = '';
    $incluyecorte = ''; 
    $descripcion_lg = '';
    
    $ntipo = ''; 
    $nestatus = ''; 
    $nprecio_fijo = ''; 
    $ninstitucion = '';
    
    // Asignar el valor que viene en el request a variables
    if (!$id) { $id  = isset_or('id', '0'); };
    if (!$nombre) { $nombre  = isset_or('nombre', ''); }; 
    if (!$nombre_corto) { $nombre_corto  = isset_or('nombre_corto', ''); }; 
    if (!$tipo) { $tipo  = isset_or('tipo', '0'); }; 
    if (!$estatus) { $estatus  = isset_or('estatus', '0'); }; 
    if (!$usuario_precio) { $usuario_precio  = isset_or('usuario_precio', ''); }; 
    if (!$precio_fijo) { $precio_fijo  = isset_or('precio_fijo', '0'); }; 
    if (!$institucion) { $institucion  = isset_or('institucion', '0'); }; 
    if (!$precio) { $precio  = isset_or('precio', '0'); }; 
    if (!$fecha_precio) { $fecha_precio  = isset_or('fecha_precio', ''); };
   
    
    // Consulta SQL
    // echo " [Where]" . $s_where . "[FIN]";
    $sql1 = "SELECT p.id, p.nombre, p.nombre_corto, p.tipo, p.precio, p.estatus, 
                    p.institucion, p.condominio, p.moneda, p.fecha_precio, 
                    p.usuario_precio, p.precio_fijo, 
                    p.incluyecorte, 
                    p.descripcion_lg,
                    (select x.comodin from ap_catalogos x where x.tipo_catalogo = 3 AND x.id = p.incluyecorte) as nincluyecorte,
                    (select c.nombre from ap_perfil c where c.id = p.condominio AND c.institucion = p.institucion AND c.estatus = 1 ) as ncondominio,
                    (select m.comodin from ap_catalogos m where m.tipo_catalogo = 27 AND m.id = p.moneda) as nmoneda, 
                    (select t.nombre from ap_catalogos t where t.tipo_catalogo = 10 AND t.id = p.tipo) as ntipo, 
                    (select e.nombre from ap_catalogos e where e.tipo_catalogo = 3 AND e.id = p.estatus) as nestatus, 
                    (select f.comodin from ap_catalogos f where f.tipo_catalogo = 3 AND f.id = p.precio_fijo) as nprecio_fijo, 
                    (select i.nombre from ap_instituciones i where i.id = p.institucion AND p.estatus = 1) as ninstitucion 
               FROM ig_productos p 
              WHERE 1=1 
           ";
    if ($_SESSION['usuario_nivel'] != 1) {
	$sql1 = $sql1 . "	AND p.institucion in ('" . $_SESSION['usuario_institucion'] . "') ";
    };
	$sql1 = $sql1 . "  ORDER BY p.institucion, p.condominio, p.id +0 ";
    //	echo "<br>[SQL] ".$sql. " [Fin SQL]";
    $resp1 = mysql_query($sql1);
    
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><i class="fa fa-cart-plus"></i> Listado de Productos y Servicios</h1>
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
                        <a class='btn btn-success' target='' href='index.php?p=sistema/productos_edit.php&institucion=".$_SESSION['usuario_institucion']."'><i class='fa fa-plus-circle'></i> Ingresar un nuevo Producto o Servicio</a>
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
                  <i class="fa fa-list-ul"></i> Listado de Productos y Servicios
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-responsive table-striped table-bordered table-hover" id="dt-usuarios">
                            <thead>
                                <tr>
                                    <th class="hidden-xs hidden-sm">Id</th>
                                    <th>Nombre</th>
                                    <th class="hidden-xs">Tipo</th>
                                    <th>Precio</th>
                                    <th class="hidden-xs hidden-sm">Precio Fijo</th>
                                    <?php  if ($_SESSION['usuario_nivel'] == 1) { ?>
                                        <th  class="hidden-xs hidden-sm">Institución</th>
                                    <?php  }; ?>
                                    <th class="hidden-xs hidden-sm">Condominio</th>
                                    <th class="hidden-xs hidden-sm">Corte</th>
                                    <th class="hidden-xs hidden-sm">Estatus</th> 
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
                                print "  <td class='hidden-xs'>".utf8_encode($row['ntipo'])."</td>";
                                print "  <td nowrap align='right'>".utf8_encode($row['nmoneda'])." ".utf8_encode($row['precio'])."</td>";
                                print "  <td class='hidden-xs hidden-sm' align='center'>".utf8_encode($row['nprecio_fijo'])."</td>";
                                if ($_SESSION['usuario_nivel'] == 1) {
                                    print "  <td class='hidden-xs hidden-sm'>".utf8_encode($row['ninstitucion'])."</td>";
                                };
                                print "  <td class='hidden-xs hidden-sm'>".utf8_encode($row['ncondominio'])."</td>";
                                print "  <td class='hidden-xs hidden-sm'>".utf8_encode($row['nincluyecorte'])."</td>";
                                print "  <td class='hidden-xs hidden-sm'>".utf8_encode($row['nestatus'])."</td>";
                                print "  <td class='center'  align='center' nowrap>
                                            <a href='index.php?p=sistema/productos_edit.php&id=".$row['id']."' title='Editar Producto' ><button class='btn btn-xs btn-default'><i class='fa fa-pencil'></i></button></a>
                                            <a href='index.php?p=sistema/productos_gestion.php&id=".$row['id']."&btn=Borrar' title='Borrar Producto' ><button class='btn btn-xs btn-default'><i class='fa fa-times'></i></button></a> 
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
                            <a class='btn btn-success' target='' href='index.php?p=sistema/productos_edit.php&institucion=<?php echo $_SESSION['usuario_institucion']; ?>'><i class='fa fa-plus-circle'></i> Ingresar un nuevo Producto o Servicio</a>
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