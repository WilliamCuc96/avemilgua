<!-- PHP -->
<?php

//Definición de Variables locales *
    // av_datos_personales
    global $id; $codigo; $nombre; $nombre2; $apellido; $apellido2; $apellido3; $dpi; $nacionalidad; $genero; $fecha_nacimiento; $lugar_nacimiento; $vecindad; $estado_civil; $profesion; $direccion; $telefono; $correo; $nit; $beneficiario; $foto;

    // av_datos_servicios
    global $grado_militar; $compañia; $puesto; $fecha_alta; $fecha_baja; $motivo_baja; $computo_servicios; $sueldo_mensual; $zona_militar; $var_where1;

    //Inicialización de Variables locales para busqueda
    // av_datos_personales
    $id = '';
    $codigo = '';
    $nombre = '';
    $nombre2 = '';
    $apellido = '';
    $apellido2 = '';
    $apellido3 = '';
    $dpi = '';
    $foto ='';
    $fecha_vencimiento_carnet = date("Y-m-d H:i:s");
    $genero = '';
    $beneficiario = '';
    $fecha_nacimiento = '';
    $lugar_nacimiento = '';
    $vecindad = '';
    $estado_civil = '';
    $profesion = '';
    $direccion = '';
    $telefono = '';
    $correo = '';
    $nit = '';

    // av_datos_servicios
    $grado_militar = '';
    $compania = '';
    $puesto = '';
    $fecha_alta = '';
    $fecha_baja = '';
    $motivo_baja = '';
    $computo_servicios = '';
    $sueldo_mensual = '';
    $zona_militar = '';
    $img_edited = '';
    $armas_servicios = '';

    $user_registro = '';
    $fecha_registro = '';


    // Asignar el valor que viene en el request a variables *
    if (!$id) { $id  = isset_or('id', '0'); };
    if (!$codigo) { $codigo  = isset_or('codigo', ''); };
    if (!$nombre) { $nombre = isset_or('nombre', ''); };
    if (!$nombre2) { $nombre2 = isset_or('nombre2', ''); };
    if (!$apellido) { $apellido = isset_or('apellido', ''); };
    if (!$apellido2) { $apellido2 = isset_or('apellido2', ''); };
    if (!$apellido3) { $apellido3 = isset_or('apellido3', ''); };
    if (!$dpi) { $dpi = isset_or('dpi', ''); };
    if (!$foto) { $foto = isset_or('foto', ''); };
    if (!$fecha_vencimiento_carnet) { $fecha_vencimiento_carnet = isset_or('fecha_vencimiento_carnet', ''); };
    if (!$genero) { $genero = isset_or('genero', ''); };
    if (!$beneficiario) { $beneficiario = isset_or('beneficiario', ''); };
    if (!$fecha_nacimiento) { $fecha_nacimiento = isset_or('fecha_nacimiento', ''); };
    if (!$lugar_nacimiento) { $lugar_nacimiento = isset_or('lugar_nacimiento', ''); };
    if (!$vecindad) { $vecindad = isset_or('vecindad', ''); };
    if (!$estado_civil) { $estado_civil = isset_or('estado_civil', ''); };
    if (!$profesion) { $profesion = isset_or('profesion', ''); };
    if (!$direccion) { $direccion = isset_or('direccion', ''); };
    if (!$telefono) { $telefono = isset_or('telefono', ''); };
    if (!$correo) { $correo = isset_or('correo', ''); };
    if (!$nit) { $nit = isset_or('nit', ''); };

    if (!$grado_militar) { $grado_militar = isset_or('grado_militar', ''); };
    if (!$compania) { $compania = isset_or('compania', ''); };
    if (!$puesto) { $puesto = isset_or('puesto', ''); };
    if (!$fecha_alta) { $fecha_alta = isset_or('fecha_alta', ''); };
    if (!$fecha_baja) { $fecha_baja = isset_or('fecha_baja', ''); };
    if (!$motivo_baja) { $motivo_baja = isset_or('motivo_baja', ''); };
    if (!$computo_servicios) { $computo_servicios = isset_or('computo_servicios', ''); };
    if (!$sueldo_mensual) { $sueldo_mensual = isset_or('sueldo_mensual', ''); };
    if (!$zona_militar) { $zona_militar = isset_or('zona_militar', ''); };
    if (!$img_edited) { $img_edited = isset_or('image_aviary', ''); };
    if (!$armas_servicios) { $armas_servicios = isset_or('armas_servicios', ''); };

    if (!$user_registro) { $user_registro = isset_or('user_registro', ''); };
    if (!$fecha_registro) { $fecha_registro = isset_or('fecha_registro', ''); };

    $var_where1 = ' ';
    // Datos personales

    if ($nombre) {
        $var_where1 = $var_where1 . "AND UPPER(a.nombre) LIKE _utf8  '" . $nombre . "' COLLATE utf8_general_ci "
                                  . "OR UPPER(a.nombre2) LIKE _utf8 '" . $nombre . "' COLLATE utf8_general_ci ";
    };

    if ($apellido) {
        $var_where1 = $var_where1 . "AND UPPER(a.apellido) LIKE _utf8  '" . $apellido . "' COLLATE utf8_general_ci "
                                  . "OR UPPER(a.apellido2) LIKE _utf8 '" . $apellido . "' COLLATE utf8_general_ci "
                                  . "OR UPPER(a.apellido3) LIKE _utf8 '" . $apellido . "' COLLATE utf8_general_ci ";
    };

    if ($codigo) {
        $var_where1 = $var_where1 . "AND UPPER(a.codigo) LIKE UPPER('%" . $codigo . "%') ";
    };
    if ($dpi) {
        $var_where1 = $var_where1 . "AND UPPER(a.dpi) LIKE UPPER('%" . $dpi . "%') ";
    };
    if ($genero) {
        $var_where1 = $var_where1 . "AND a.genero = '" . $genero ."' ";
    };
    if ($estado_civil) {
        $var_where1 = $var_where1 . "AND a.estado_civil = '" . $estado_civil . "' ";
    };
    if ($lugar_nacimiento) {
        $var_where1 = $var_where1 . "AND a.lugar_nacimiento = '" . $lugar_nacimiento . "' ";
    };
    if ($fecha_nacimiento) {
        $var_where1 = $var_where1 . "AND a.fecha_nacimiento = '" . $fecha_nacimiento . "'";
    };
    if ($direccion) {
        $var_where1 = $var_where1 . " AND UPPER(a.direccion) LIKE UPPER('%" . $direccion . "%') ";
    };
    if ($vecindad) {
        $var_where1 = $var_where1 . "AND a.vecindad =  '" . $vecindad . "'";
    };
    if ($profesion) {
        $var_where1 = $var_where1 . "AND a.profesion = '" . $profesion . "'";
    }

    if ($armas_servicios) {
        $var_where1 = $var_where1 . "AND b.armas_servicios = '" . $armas_servicios . "'";
    }

    if ($correo) {
        $var_where1 = $var_where1 . "AND UPPER(a.correo) LIKE UPPER('%" . $correo . "%') ";
    }

    // Datos servicios
    if ($grado_militar) {
        $var_where1 = $var_where1 . " AND UPPER(b.grado_militar) LIKE UPPER('%" . $grado_militar . "%') ";
    };
    if ($compania) {
        $var_where1 = $var_where1 . " AND UPPER(b.compania) LIKE UPPER('%" . $compania . "%') ";
    };
    if ($fecha_alta) {
        $var_where1 = $var_where1 . "AND b.fecha_alta = '" . $fecha_alta . "' ";
    };

    if ($fecha_baja) {
        $var_where1 = $var_where1 . "AND b.fecha_baja = '" . $fecha_baja . "' ";
    };

    if ($motivo_baja) {
        $var_where1 = $var_where1 . " AND UPPER(b.motivo_baja) LIKE UPPER('%" . $motivo_baja . "%') ";
    };
    if ($computo_servicios) {
        $var_where1 = $computo_servicios . " AND UPPER(b.motivo_baja) LIKE UPPER('%" . $computo_servicios . "%') ";
    };

    // Opciones Administracion
    if ($user_registro) {
        $var_where1 = $var_where1 . "AND a.user_registro = '" . $user_registro . "' ";
    };

    if ($fecha_registro) {
        $var_where1 = $var_where1 . "AND a.fecha_registro = '" . $fecha_registro . "' ";
    };

    // Fin de busqueda

    $imagen = "fa fa-users";

    $sql1 = "SELECT a.id as vid,
                    a.nombre,
                    a.nombre2,
                    a.apellido,
                    a.apellido2,
                    a.codigo,
                    a.foto,
                    (select nombre from ap_catalogos WHERE tipo_catalogo = 39 AND grado_militar = id) as gradoMilitar,
                    b.fecha_baja,
                    a.vecindad,
                    a.telefono,
                    (select b.nombre from ap_municipios b where b.id = a.vecindad) as municipio
                    FROM av_datos_personales a, av_datos_servicios b WHERE a.id = b.id "
                    . $var_where1 . " ";
                    ;

    $resp1 = mysql_query($sql1);
?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><i class="fa fa-users"></i> Listado de Veteranos</h1>
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
                    Listado de Veteranos en el Sistema
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-responsive table-striped table-bordered table-hover" id="dt-usuarios">
                            <thead>
                                <tr>
                                    <!-- PENDIENTE ESTE CAMBIO -->
                                    <th>Código</th>
                                    <th class="hidden-xs hidden-sm">Nombre</th>
                                    <th class="hidden-xs hidden-sm">Grado Militar</th>
                                    <th class="hidden-xs">Fecha de Baja</th>
                                    <th class="hidden-xs">Vecindad</th>
                                    <th class="hidden-xs">Teléfono</th>
                                    <th class="hidden-xs">Foto</th>
                                    <th class=""><i class="fa fa-cogs"></i></th>
                                </tr>
                            </thead>
                            <tbody>

<!-- PHP -->
<?php
    while($row=mysql_fetch_assoc($resp1)){
        print "<tr class=''>";
        print "  <td class='hidden-xs hidden-sm'>".utf8_encode($row['codigo'])."</td>";
        print "  <td>".utf8_encode($row['nombre'])." ".utf8_encode($row['nombre2'])." ".utf8_encode($row['apellido'])." ".utf8_encode($row['apellido2'])."</td>";
        print "  <td class='hidden-xs hidden-sm'>".utf8_encode($row['gradoMilitar'])."</td>";
        print "  <td class='hidden-xs'>".utf8_encode($row['fecha_baja'])."</td>";
        print "  <td class='hidden-xs'>".utf8_encode($row['municipio'])."</td>";
        print "  <td class='hidden-xs' nowrap>".utf8_encode($row['telefono'])."</td>";
        if ($row['foto']) { ?>
             <td class='hidden-xs' nowrap align='center'>
                <span class="fa-stack fa-1x">
                    <i class="fas fa-portrait fa-stack-1x"></i>
                </span>
            </td>
        <?php } else { ?>
            <td class='hidden-xs' nowrap align='center'>
                <span class="fa-stack fa-1x">
                    <i class="fas fa-portrait fa-stack-1x"></i>
                    <i class="fas fa-ban fa-stack-2x" style="color:Tomato"></i>
                </span>
            </td>
        <?php } 
        print "  <td class='center' align='center' nowrap>";
        print "     <a href='index.php?p=usuarios/av_usuarios_edit.php&id=".$row['vid']."' title='Editar Usuario' ><button class='btn btn-xs btn-default'><i class='fa fa-pencil'></i></button></a>";
        if ($_SESSION['usuario_nivel'] <= 1 OR $_SESSION['usuario_nivel'] == 2) { 
            print "     <a href='index.php?p=usuarios/av_usuarios_gestion.php&id=".$row['vid']."&btn=Borrar' title='Borrar Usuario' ><button class='btn btn-xs btn-default'><i class='fa fa-times'></i></button></a>";
        }
        print "     <a href='../pdf/carnet/reporte.php' title='Editar Usuario' ><button class='btn btn-xs btn-default'><i class='fa fa-file-pdf'></i></button></a>";
        print "  </td>";
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
                        <a class="btn btn-warning btn-xs btn-block" target="" href="index.php?p=usuarios/av_usuarios_edit.php">Ingresar un nuevo usuario</a>
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
