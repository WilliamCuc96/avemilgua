<?php

    //Definición de Variables locales
    global $id; $institucion; $condominio; $nombre; $lugar; $capacidad; $caracteristicas; $observaciones; $color; $colortexto; $estatus; $valor; $esfijo;
    
    //Inicialización de Variables locales
    $id = '';
    $institucion = '';
    $condominio = '';
    $nombre = '';
    $lugar ='';
    $capacidad ='';
    $caracteristicas ='';
    $observaciones ='';
    $color ='';
    $colortexto ='';
    $estatus = '';  
    $valor = '';
    $esfijo = '';
    
    // Asignar el valor que viene en el request a variables
    if (!$id) { $id  = isset_or('id', ''); };
    if (!$institucion) { $institucion  = isset_or('institucion', ''); };
    if (!$condominio) { $fcondominio  = isset_or('condominio', ''); }; 
    if (!$nombre) { $nombre  = isset_or('nombre', ''); };
    if (!$lugar) { $lugar  = isset_or('lugar', ''); };
    if (!$capacidad) { $capacidad  = isset_or('capacidad', ''); };
    if (!$caracteristicas) { $caracteristicas  = isset_or('caracteristicas', '0'); };
    if (!$observaciones) { $observaciones  = isset_or('observaciones', '0'); };
    if (!$color) { $color  = isset_or('color', '0'); };
    if (!$colortexto) { $colortexto  = isset_or('colortexto', '0'); };
    if (!$estatus) { $estatus  = isset_or('estatus', '0'); };
    if (!$valor) { $valor  = isset_or('valors', '0'); };
    if (!$esfijo) { $esfijo  = isset_or('esfijo', '0'); };
        
    //Programacion de Funcionalidad para mostrar datos de la pagina
    $var_where1 = ' ';
  //  $var_where1 = $var_where1 . " AND e.estatus > 0 ";
    
    if ($id) {
        $var_where1 = $var_where1 . " AND id = '" . $id . "' ";
    };
    if ($institucion) {
        $var_where1 = $var_where1 . " AND institucion = '" . $institucion . "' ";
    };
    if ($condominio) {
        $var_where1 = $var_where1 . " AND condominio = '" . $condominio . "' ";
    };
    if ($nombre) {
        $var_where1 = $var_where1 . " AND nombre '" . $nombre . "' ";
    };
    if ($lugar) {
        $var_where1 = $var_where1 . " AND lugar = '" . $lugar . "' ";
    };
    if ($capacidad) {
        $var_where1 = $var_where1 . " AND capacidad = '" . $capacidad . "' ";
    };
    if ($caracteristicas) {
        $var_where1 = $var_where1 . " AND caracteristicas = '" . $caracteristicas . "' ";
    };
    if ($observaciones) {
        $var_where1 = $var_where1 . " AND observaciones = '" . $observaciones . "' ";
    };
    if ($color) {
        $var_where1 = $var_where1 . " AND color = '" . $color . "' ";
    };
    if ($colortexto) {
        $var_where1 = $var_where1 . " AND colortexto = '" . $colortexto . "' ";
    };
    if ($estatus) {
        $var_where1 = $var_where1 . " AND estatus = '" . $estatus . "' ";
    };
    
    //$_SESSION['usuario_nivel']
    
    // Consulta SQL
    // echo " [Where]" . $s_where . "[FIN]";
    $sql1 = "SELECT a.id,
                    a.institucion,
                    (select i.nombre from ap_instituciones i where i.id = a.institucion) as ninstitucion,
                    a.condominio, 
                    (select c.nombre  from ap_perfil c where c.id = a.condominio) as ncondominio,
                    a.nombre,
                    a.lugar,
                    a.capacidad,
                    a.caracteristicas,
                    a.observaciones,
                    a.color,
                    a.colortexto,
                    a.estatus, 
                    a.valor, 
                    a.esfijo, 
                    (select f.comodin from ap_catalogos f where f.id = a.esfijo and f.tipo_catalogo = 3) as nesfijo,
                    (select t.nombre from ap_catalogos t where t.id = a.estatus and t.tipo_catalogo = 3) as nestatus
                FROM ig_areas a
		WHERE 1=1  
                ".$var_where1." ";
    if ($_SESSION['usuario_nivel'] != 1) {
		$sql1 = $sql1 . " AND a.institucion = '" . $_SESSION['usuario_institucion'] . "' ";
    };
	$sql1 = $sql1 . "  order by a.id +1";
    //	echo "<br>[SQL] ".$sql. " [Fin SQL]";
    $resp1 = mysql_query($sql1);
    
   ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><i class="fa fa-gift"></i> Listado de Áreas Sociales</h1>
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
                        <a class='btn btn-success' target='' href='index.php?p=sistema/areas_edit.php&institucion=".$_SESSION['usuario_institucion']."'><i class='fa fa-plus-circle'></i> Ingresar un nueva Área Social</a>
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
                    <i class="fa fa-list-ul"></i> Listado de Áreas Sociales
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-responsive table-striped table-bordered table-hover" id="dt-usuarios">
                            <thead>
                                <tr>
                                    <th class="hidden-xs hidden-sm">Id</th>
                                    <?php  if ($_SESSION['usuario_nivel'] == 1) { ?>
                                        <th  class="hidden-xs hidden-sm">Institución</th>
                                    <?php  }; ?>
                                    <th class="hidden-xs">Condominio</th>
                                    <th>Nombre</th>
                                    <th class="hidden-xs hidden-sm">Lugar</th>  
                                    <th class="hidden-xs hidden-sm">Capacidad</th>
                                    <th class="hidden-xs hidden-sm">Valor</th> 
                                    <th class="hidden-xs hidden-sm">Valor Fijo?</th> 
                                    <th class="hidden-xs hidden-sm">Estatus</th> 
                                    <th class=""  align='center' nowrap><i class="fa fa-cogs"></i></th>
                                </tr>
                            </thead>
                            <tbody>
<!-- / (Peledahe) -->  
            
        
                        <?php 
                            while($row=mysql_fetch_assoc($resp1)){
                                print "<tr class='gradeA'>";
                                print "  <td class='hidden-xs hidden-sm'  align='right'>".$row['id']."</td>";
                                if ($_SESSION['usuario_nivel'] == 1) {
                                    print "  <td class='hidden-xs hidden-sm' >".$row['ninstitucion']."</td>";
                                };
                                print "  <td class='hidden-xs'  align='right'>".utf8_encode($row['ncondominio'])."</td>";
                                print "  <td>".utf8_encode($row['nombre'])."</td>";
                                print "  <td class='hidden-xs hidden-sm' >".utf8_encode($row['lugar'])."</td>";
                                print "  <td class='hidden-xs hidden-sm' align='center'>".utf8_encode($row['capacidad'])."</td>";
                                print "  <td class='hidden-xs hidden-sm'  align='right' nowrap>Q ".utf8_encode($row['valor'])."</td>";
                                print "  <td class='hidden-xs hidden-sm' align='center' >".utf8_encode($row['nesfijo'])."</td>";
                                print "  <td class='hidden-xs hidden-sm'  align='center'>".utf8_encode($row['nestatus'])."</td>";
                                print "  <td nowrap class='center' align='center'>
                                            <a href='index.php?p=sistema/areas_edit.php&id=".$row['id']."&area=".$row['area']."&condominio=".$row['condominio']."' title='Editar Area' ><button class='btn btn-xs btn-default'><i class='fa fa-pencil'></i></button></a>
                                            <a href='index.php?p=sistema/areas_gestion.php&id=".$row['id']."&btn=Borrar' title='Borrar area' ><button class='btn btn-xs btn-default'><i class='fa fa-times'></i></button></a> ";
                                if ($row['caracteristicas']) {
                                    print "     <button class='btn btn-xs btn-default left pop-hover'data-title='Caracteristicas' data-placement='left' data-content='".$row['caracteristicas']."'><i class='fa fa-info'></i></button>";
                                };
                                if ($row['observaciones']) {
                                    print "     <button class='btn btn-xs btn-default left pop-hover'data-title='Observaciones' data-placement='left' data-content='".$row['observaciones']."'><i class='fa fa-comment-o'></i></button>";
                                };
                                print "         </td>";
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
                            <a class='btn btn-success' target='' href='index.php?p=sistema/areas_edit.php&institucion=<?php echo $_SESSION['usuario_institucion']; ?>'><i class='fa fa-plus-circle'></i> Ingresar un nueva Área Social</a>
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