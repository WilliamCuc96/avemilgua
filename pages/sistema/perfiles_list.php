<?php

    //Definición de Variables locales
    global $id; $fecha_cierre; $fecha_vence; $fecha_upago; $ultima_ncobra; $ultimo_recibo_prov; $ultimo_recibo_cont; $convenio_bi; $mensaje1; $mensaje2; $autorizacion; $institucion; $nombre; $logo_cond;
    global $sitio; $moneda; $saldo_minimo; $dia_corte;

    //Inicialización de Variables locales
    $id = '';
    $fecha_cierre = '';
    $fecha_upago = '';
    $ultima_ncobra = '';
    $ultimo_recibo_prov = '';
    $ultimo_recibo_cont = '';
    $convenio_bi = '';
    $mensaje1 = '';
    $mensaje2 = '';
    $autorizacion = '';
    $institucion = '0';
    $nombre = '0';
    $sitio = '0';
    $moneda = '0';
    $saldo_minimo = '0';
    $dia_corte = '0';

    // Asignar el valor que viene en el request a variables
    if (!$id) { $id  = isset_or('id', ''); };
    if (!$fecha_cierre) { $fecha_cierre  = isset_or('fecha_cierre', ''); };
    if (!$fecha_upago) { $fecha_upago  = isset_or('fecha_upago', ''); };
    if (!$ultima_ncobra) { $ultima_ncobra  = isset_or('ultima_ncobra', ''); };
    if (!$ultimo_recibo_prov) { $ultimo_recibo_prov  = isset_or('ultimo_recibo_prov', ''); };
    if (!$ultimo_recibo_cont) { $ultimo_recibo_cont  = isset_or('ultimo_recibo_cont', ''); };
    if (!$convenio_bi) { $convenio_bi  = isset_or('convenio_bi', '0'); };
    if (!$mensaje1) { $mensaje1  = isset_or('mensaje1', '0'); };
    if (!$mensaje2) { $mensaje2  = isset_or('mensaje2', '0'); };
    if (!$autorizacion) { $autorizacion  = isset_or('autorizacion', ''); };
    if (!$institucion) { $institucion  = isset_or('institucion', '0'); };
    if (!$nombre) { $nombre  = isset_or('nombre', '0'); };
    if (!$sitio) { $sitio  = isset_or('sitio', '0'); };
    if (!$moneda) { $moneda  = isset_or('moneda', '0'); };
    if (!$saldo_minimo) { $saldo_minimo  = isset_or('saldo_minimo', '0'); };
    if (!$dia_corte) { $dia_corte  = isset_or('dia_corte', '0'); };

    // Asignación de valores de forma y comportamiento de la pagina
    $plbreadcrumb = "<li>Administracion</li><li>Perfil</li>";
    $pltitulo = "Perfiles de Aplicación";
    $pldescripcion = "Resultado de búsqueda de Perfiles de Aplicaicón";
    $setpagejq = "dynamic_table";

    //Programacion de Funcionalidad para mostrar datos de la pagina
    $var_where1 = ' ';
  //  $var_where1 = $var_where1 . " AND e.estatus > 0 ";

    if ($id) {
        $var_where1 = $var_where1 . " AND id = '" . $id . "' ";
    };
    if ($fecha_cierre) {
        $var_where1 = $var_where1 . " AND fecha_cierre = '" . $fecha_cierre . "' ";
    };
    if ($fecha_upago) {
        $var_where1 = $var_where1 . " AND fecha_upago '" . $fecha_upago . "' ";
    };
    if ($ultima_ncobra) {
        $var_where1 = $var_where1 . " AND ultima_ncobra = '" . $ultima_ncobra . "' ";
    };
    if ($ultimo_recibo_prov) {
        $var_where1 = $var_where1 . " AND ultimo_recibo_prov = '" . $ultimo_recibo_prov . "' ";
    };
    if ($ultimo_recibo_cont) {
        $var_where1 = $var_where1 . " AND ultimo_recibo_cont = '" . $ultimo_recibo_cont . "' ";
    };
    if ($convenio_bi) {
        $var_where1 = $var_where1 . " AND convenio_bi = '" . $convenio_bi . "' ";
    };
    if ($mensaje1) {
        $var_where1 = $var_where1 . " AND UPPER(mensaje1) ('" . $mensaje1 . "') ";
    };
    if ($mensaje2) {
        $var_where1 = $var_where1 . " AND UPPER(mensaje2) ('" . $mensaje2 . "') ";
    };
    if ($autorizacion) {
        $var_where1 = $var_where1 . " AND UPPER(autorizacion) ('" . $autorizacion . "') ";
    };
    if ($institucion) {
        $var_where1 = $var_where1 . " AND institucion = '" . $institucion . "' ";
    };
    if ($nombre) {
        $var_where1 = $var_where1 . " AND nombre = '" . $nombre . "' ";
    };
    if ($sitio) {
        $var_where1 = $var_where1 . " AND sitio = '" . $sitio . "' ";
    };
    if ($moneda) {
        $var_where1 = $var_where1 . " AND moneda = '" . $moneda . "' ";
    };
    if ($saldo_minimo) {
        $var_where1 = $var_where1 . " AND saldo_minimo = '" . $saldo_minimo . "' ";
    };
    if ($dia_corte) {
        $var_where1 = $var_where1 . " AND dia_corte = '" . $dia_corte . "' ";
    };

    //$_SESSION['usuario_nivel']

    // Consulta SQL
    // echo " [Where]" . $s_where . "[FIN]";
    $sql1 = "SELECT c.id,
                    c.fecha_cierre,
                    c.fecha_upago,
                    c.ultima_ncobra,
                    c.ultimo_recibo_prov,
                    c.ultimo_recibo_cont,
                    c.convenio_bi,
                    c.autorizacion,
                    c.institucion,
                    (select nombre from ap_instituciones where institucion = id) as ninstitucion,
                    (select m.comodin from ap_catalogos m where m.tipo_catalogo = 27 AND m.id = c.moneda) as nmoneda,
                    c.nombre,
                    c.logo_cond,
                    c.sitio,
                    c.moneda,
                    c.saldo_minimo,
                    c.dia_corte,
                    c.alarmas,
                    c.eventos,
                    c.telefono_docs,
                    c.traffic_mb,
                    c.flows,
                    c.pckets,
                    c.email_docs
                FROM ap_perfil c
		WHERE 1=1
                ".$var_where1." ";
    if ($_SESSION['usuario_nivel'] != 1) {
		$sql1 = $sql1 . " AND c.institucion = '" . $_SESSION['usuario_institucion'] . "' ";
    };

	$sql1 = $sql1 . "  order by id +1";
    //	echo "<br>[SQL] ".$sql. " [Fin SQL]";
    $resp1 = mysql_query($sql1);
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><i class="fa fa-building-o"></i> Listado de Condominios o Perfiles</h1>
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
                        <a class='btn btn-primary' target='' href='index.php?p=sistema/instituciones_list.php'><i class='fa fa-arrow-circle-left'></i> Ir a Instituciones</a>
                        <a class='btn btn-success' target='' href='index.php?p=sistema/perfiles_edit.php'><i class='fa fa-plus-circle'></i> Ingresar un nuevo Condominio o Perfil</a>
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
                    Listado de Condominios o Perfiles
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-responsive table-striped table-bordered table-hover" id="dt-usuarios">
                            <thead>
                                <tr>
                                    <th class="hidden-xs hidden-sm">Id</th>
                                    <?php  if ($_SESSION['usuario_nivel'] == 1) { ?>
                                        <th class="hidden-xs hidden-sm">Institución</th>
                                    <?php  }; ?>
                                    <th class="">Nombre</th>
                                    <th class="hidden-xs hidden-sm">Teléfono</th>
                                    <th class="hidden-xs">Email</th>
                                    <th class="" align='center' nowrap><i class="fa fa-cogs"></i></th>
                                </tr>
                            </thead>
                            <tbody>
<!-- / (Peledahe) -->

                        <?php
                            while($row=mysql_fetch_assoc($resp1)){
                                print "<tr class='gradeA'>";
                                print "  <td class='hidden-xs hidden-sm' >".$row['id']."</td>";
                                if ($_SESSION['usuario_nivel'] == 1) {
                                    print "  <td class='hidden-xs hidden-sm'>".$row['ninstitucion']."</td>";
                                };
                                print "  <td>".utf8_encode($row['nombre'])."</td>";
                                print "  <td class='hidden-xs hidden-sm'>".$row['telefono_docs']."</td>";
                                print "  <td class='hidden-xs' nowrap>".utf8_encode($row['email_docs'])."</td>";
                                print "  <td class='center'  align='center' nowrap>
                                            <a href='index.php?p=sistema/perfiles_edit.php&id=".$row['id']."' title='Editar Perfil' ><button class='btn btn-xs btn-default'><i class='fa fa-pencil'></i></button></a>
                                            <a href='index.php?p=sistema/perfiles_gestion.php&id=".$row['id']."&btn=Borrar' title='Borrar Perfil' ><button class='btn btn-xs btn-default'><i class='fa fa-times'></i></button></a>
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
                            <li>Haga click en el icono <i class="fa fa-pencil"></i> para editar el registro seleccionado.</li>
                            <li>Haga click en el icono <i class="fa fa-times"></i> para borrar el registro seleccionado.</li>
                            <li>Si el registro no está en el listado y desea ingresar uno nuevo, haga click en el boton siguiente.</li>
                        </ul>
                        <center>
                            <div class="btn-group" >
                              <?php if ($_SESSION['usuario_nivel'] != 3) { ?>
                                <a class="btn btn-primary" target="" href="index.php?p=sistema/instituciones_list.php"><i class="fa fa-arrow-circle-left"></i> Ir a Instituciones</a>
                                <a class="btn btn-success" target="" href="index.php?p=sistema/perfiles_edit.php"><i class="fa fa-plus-circle"></i> Ingresar un nuevo Condominio o Perfil</a>
                                <?php }; ?>
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
