<?php

    //Definición de Variables locales
    //Variables de resultado de query Condominio
    global $id; $fecha_cierre; $fecha_vence; $fecha_upago; $ultima_ncobra; $ultimo_recibo_prov; $ultimo_recibo_cont;
    global $ultima_factura; $convenio_bi; $mensaje1; $mensaje2; $autorizacion; $cinstitucion; $nombre;
    global $logo_cond; $sitio; $moneda; $saldo_minimo; $dia_corte; $estatus; $cambio_usd;
    global $razon_social; $direccion_docs; $telefono_docs; $nit_docs; $logo_print;
    global $tamanio_reqcobro; $tamanio_cotizacion; $ultima_cotizacion; $autorizacion_fiscal; $mensaje3; $mensaje4;
    global $facha_cambio_usd; $imp_qrcod; $imp_barcod; $imp_recsup; $imp_recinf;
    global $imp_estatus; $ultima_ot; $imp_ot_doble; $ninstitucion; $alarmas; $eventos; $traffic_mb; $flows; $pckets; $email_docs;

    //Inicializacion de Variables de query condominio
    $id = '';
    $fecha_cierre = '';
    $fecha_vence = '';
    $fecha_upago = '';
    $ultima_ncobra = '';
    $ultimo_recibo_prov = '';
    $ultimo_recibo_cont = '';
    $ultima_factura = '';
    $convenio_bi = '';
    $mensaje1 = '';
    $mensaje2 = '';
    $autorizacion = '';
    $cinstitucion = '';
    $nombre = '';
    $logo_cond = '';
    $sitio = '';
    $moneda = '';
    $saldo_minimo = '';
    $dia_corte = '';
    $estatus = '';
    $cambio_usd = '';
    $razon_social = '';
    $direccion_docs = '';
    $telefono_docs = '';
    $nit_docs = '';
    $logo_print = '';
    $tamanio_reqcobro = '';
    $tamanio_cotizacion = '';
    $ultima_cotizacion = '';
    $autorizacion_fiscal = '';
    $mensaje3 = '';
    $mensaje4 = '';
    $facha_cambio_usd = '';
    $imp_qrcod = '';
    $imp_barcod = '';
    $imp_recsup = '';
    $imp_recinf = '';
    $imp_estatus = '';
    $ultima_ot = '';
    $imp_ot_doble = '';
    $ninstitucion = '';

    $alarmas = '';
    $eventos = '';
    $traffic_mb = '';
    $flows = '';
    $pckets = '';
    $email_docs = '';


    // Asignar el valor que viene en el request a variables
    if (!$id) { $id  = isset_or('id', ''); };

?>

<!-- Page wrapper -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><i class=" fa fa-building-o"></i> Administración de Perfiles</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

<?php

if ($id == "0" or $id == "") {
	$var_where1 = " ";
        //$ig_casa = $_SESSION['ig_casas'];
        $status = 1;
    } else {
	$var_where1 = " AND c.id = '" . $id . "' ";
        // Consulta SQL
	// echo " [Where]" . $s_where . "[FIN]";
	$sql1 = "SELECT c.id,
                        c.fecha_cierre,
                        c.fecha_vence,
                        c.fecha_upago,
                        c.ultima_ncobra,
                        c.ultimo_recibo_prov,
                        c.ultimo_recibo_cont,
                        c.ultima_factura,
                        c.convenio_bi,
                        c.mensaje1,
                        c.mensaje2,
                        c.autorizacion,
                        c.institucion,
                        c.nombre,
                        c.logo_cond,
                        c.sitio,
                        c.moneda,
                        c.saldo_minimo,
                        c.dia_corte,
                        c.estatus,
                        c.cambio_usd,
                        c.razon_social,
                        c.direccion_docs,
                        c.telefono_docs,
                        c.nit_docs,
                        c.logo_print,
                        c.tamanio_reqcobro,
                        c.tamanio_cotizacion,
                        c.ultima_cotizacion,
                        c.autorizacion_fiscal,
                        c.mensaje3,
                        c.mensaje4,
                        c.fecha_cambio_usd,
                        c.imp_qrcod,
                        c.imp_barcod,
                        c.imp_recsup,
                        c.imp_recinf,
                        c.imp_estatus,
                        c.ultima_ot,
                        c.imp_ot_doble,
                        c.alarmas,
                        c.eventos,
                        c.traffic_mb,
                        c.flows,
                        c.pckets,
                        c.email_docs,
                        (select i.nombre from ap_instituciones i where i.id = c.institucion) as ninstitucion
                FROM ap_perfil c
                WHERE 1=1 " . $var_where1 . "
                ORDER BY c.id +0";
	// echo "<br>[SQL] ".$sql. " [Fin SQL]";

        $resp1 = mysql_query($sql1);


	if (!$resp1) { // Error en la ejecución del query
               echo "<div class='alert alert-block alert-danger fade in'>
					<a class='close' data-dismiss='alert' href='#' aria-hidden='true'>&times;</a>
					<p><h4><i class='fa fa-exclamation-circle'></i> Error </h4> No pudo ejecutarse satisfactoriamente la consulta (".$sql1.") en la BD: " . mysql_error() . "</p>
				  </div>";
			//exit;
		} elseif (mysql_num_rows($resp1) == 0) { // búsqueda satisfactoria, 0 registros encontrados
                        echo "<div class='alert alert-block alert-warning fade in'>
					<a class='close' data-dismiss='alert' href='#' aria-hidden='true'>&times;</a>
					<p><h4><i class='fa fa-exclamation-circle'></i> Atenci&oacute;n</h4> No se encontraron registros en su b&uacute;squeda!</p>
				  </div>";
	    //exit;
	} else { // búsqueda satisfactoria, de 1 a mas registros encontrados
            // Asignación de valores en variables
            while($row1=mysql_fetch_assoc($resp1)){
                $id                     = $row1['id'];
                $fecha_cierre           = $row1['fecha_cierre']; // date("d/m/Y",strtotime($row1['fecha_cierre']));
                $fecha_vence            = $row1['fecha_vence']; // date("d/m/Y",strtotime($row1['fecha_vence']));
                $fecha_upago            = $row1['fecha_upago']; // date("d/m/Y",strtotime($row1['fecha_upago']));
                $dia_corte              = $row1['dia_corte'];

                $ultima_ncobra          = $row1['ultima_ncobra'];
                $ultimo_recibo_prov     = $row1['ultimo_recibo_prov'];
                $ultimo_recibo_cont     = $row1['ultimo_recibo_cont'];
                $ultima_factura         = $row1['ultima_factura'];
                $ultima_cotizacion      = $row1['ultima_cotizacion'];
                $ultima_ot              = $row1['ultima_ot'];

                $convenio_bi            = $row1['convenio_bi'];
                $autorizacion           = $row1['autorizacion'];
                $institucion            = $row1['institucion'];
                $nombre                 = $row1['nombre'];
                $logo_cond              = $row1['logo_cond'];
                $sitio                  = $row1['sitio'];
                $moneda                 = $row1['moneda'];
                $saldo_minimo           = $row1['saldo_minimo'];
                $estatus                = $row1['estatus'];

                $razon_social           = $row1['razon_social'];
                $direccion_docs         = $row1['direccion_docs'];
                $telefono_docs          = $row1['telefono_docs'];
                $nit_docs               = $row1['nit_docs'];
                $logo_print             = $row1['logo_print'];
                $tamanio_reqcobro       = $row1['tamanio_reqcobro'];
                $tamanio_cotizacion     = $row1['tamanio_cotizacion'];

                $autorizacion_fiscal    = $row1['autorizacion_fiscal'];
                $mensaje1               = $row1['mensaje1'];
                $mensaje2               = $row1['mensaje2'];
                $mensaje3               = $row1['mensaje3'];
                $mensaje4               = $row1['mensaje4'];

                $cambio_usd             = $row1['cambio_usd'];
                $facha_cambio_usd       = $row1['facha_cambio_usd'];

                $imp_qrcod              = $row1['imp_qrcod'];
                $imp_barcod             = $row1['imp_barcod'];
                $imp_recsup             = $row1['imp_recsup'];
                $imp_recinf             = $row1['imp_recinf'];
                $imp_estatus            = $row1['imp_estatus'];

                $ninstitucion           = $row1['ninstitucion'];

                $alarmas                = $row1['alarmas'];
                $eventos                = $row1['eventos'];
                $traffic_mb              = $row1['traffic_mb'];
                $flows                  = $row1['flows'];
                $pckets                 = $row1['pckets'];
                $email_docs             = $row1['email_docs'];
            };
            mysql_free_result($resp1);
	}; // toma en cuenta en el contenido el html
    };
?>

 <!-- BOX TABS (Peledahe) -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-info-circle"></i> Ingrese en el siguiente formulario toda la información del perfil
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" action="index.php" method="post">
                        <!-- Inicia Formulario (Peledahe) -->

                    <input class="text" name="p" type="hidden" value="sistema/perfiles_gestion.php"/>

                    <div class="form-group ">
                        <label for="id" class="col-sm-2 control-label">ID</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="id" placeholder="Id" name="id" value="<?php echo utf8_encode($id); ?>" disabled="">
                            <input name="id" type="hidden" value="<?php echo utf8_encode($id); ?>" />
                        </div>
                        <label for="estatus" class="col-sm-2 control-label">Estatus</label>
                        <div class="col-sm-4">
                            <select id="status" class="form-control col-md-12" name="estatus" >
                                <?php
                                    $sql2="SELECT  id , nombre, comodin
                                                FROM ap_catalogos
                                                WHERE tipo_catalogo = 3 AND institucion = 1
                                                ORDER BY id";
                                    $resp2 = mysql_query($sql2);
                                ?>
                                <option value="" selected="selected" >Seleccionar</option>
                                <?php
                                    while($row2=mysql_fetch_assoc($resp2)){
                                        print '<option value="'.$row2['id'].'" ';
                                        if ($estatus == $row2['id']) { print ' selected="selected" '; };
                                        print ' >'.utf8_encode($row2['nombre']).'</option>';
                                    };
                                ?>
                            </select>
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="nombre" class="col-sm-2 control-label">Nombre del Perfil</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre" value="<?php echo utf8_encode($nombre); ?>">
                        </div>
                        <label for="telefono_docs" class="col-sm-2 control-label">Telefono (Docs)</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="telefono_docs" placeholder="Telefono en Docs" name="telefono_docs" value="<?php echo utf8_encode($telefono_docs); ?>">
                        </div>

                    </div>
<!--
                    <div class="form-group">
                        <label for="razon_social" class="col-sm-2 control-label">Razón Social (Docs)</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="razon_social" placeholder="Razon Social en Documentos" name="razon_social" value="<?php echo utf8_encode($razon_social); ?>">
                        </div>
                        <label for="logo_print" class="col-sm-2 control-label">E-mail</label>
                        <div class="col-sm-4">
                            <input type="email" class="form-control" id="email_docs" placeholder="nombre@dominio.com" name="email_docs" value="<?php echo utf8_encode($email_docs); ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="direccion_docs" class="col-sm-2 control-label">Direccion Fiscal (Docs)</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="direccion_docs" placeholder="Dirección Fiscal" name="direccion_docs" value="<?php echo utf8_encode($direccion_docs); ?>">
                        </div>
                        <label for="sitio" class="col-sm-2 control-label">Direccion Web (URL)</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="sitio" placeholder="URL" name="sitio" value="<?php echo utf8_encode($sitio); ?>">
                        </div>
                     </div>
                    <div class="form-group">
                        <label for="nit_docs" class="col-sm-2 control-label">NIT (Docs)</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="nit_docs" placeholder="NIT en Docs" name="nit_docs" value="<?php echo utf8_encode($nit_docs); ?>">
                        </div>
                        <label for="logo_cond" class="col-sm-2 control-label">Logo en Aplicacion</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="logo_cont" placeholder="Logo" name="logo_cond" value="<?php echo utf8_encode($logo_cond); ?>">
                        </div>
                    </div>
-->
                    <div class="form-group">

                        <?php  if ($_SESSION['usuario_nivel'] == 1) { ?>
                        <label for="institucion" class="col-sm-2 control-label">Institucion</label>
                        <div class="col-sm-4">
                            <select id="institucion" class="form-control col-md-12" name="institucion" >
                                <?php
                                    $sql2="SELECT  id , nombre
                                                FROM ap_instituciones
                                                WHERE estatus = 1
                                                ORDER BY id";
                                    $resp2 = mysql_query($sql2);
                                ?>
                                <option value="" selected="selected" >Seleccionar</option>
                                <?php
                                    while($row2=mysql_fetch_assoc($resp2)){
                                        print '<option value="'.$row2['id'].'" ';
                                        if ($institucion == $row2['id']) { print ' selected="selected" '; };
                                        print ' >'.utf8_encode($row2['nombre']).'</option>';
                                    };
                                ?>
                            </select>
                        </div>
                    <?php
                           } else {
                                echo "<input class='text' name='institucion' id='institucion' type='hidden' value='" . $_SESSION['usuario_institucion'] . "'/>";
                           };
                    ?>
                    </div>

                    <br>
                    <div class="form-group">
                        <label for="ultima_ncobra" class="col-sm-2 control-label">Alarmas</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="alarmas" placeholder="Alarmas" name="alarmas" value="<?php echo utf8_encode($alarmas); ?>">
                        </div>
                        <label for="ultima_cotizacion" class="col-sm-2 control-label">Eventos</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="eventos" placeholder="Eventos" name="eventos" value="<?php echo utf8_encode($eventos); ?>">
                        </div>
                        <label for="ultima_ncobra" class="col-sm-2 control-label">Traffic mb/s</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="traffic_mb" placeholder="Traffic mb/s" name="traffic_mb" value="<?php echo utf8_encode($traffic_mb); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ultima_ncobra" class="col-sm-2 control-label">Flows</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="flows" placeholder="Flows" name="flows" value="<?php echo utf8_encode($flows); ?>">
                        </div>
                        <label for="ultima_cotizacion" class="col-sm-2 control-label">Pckets</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="pckets" placeholder="Pckets" name="pckets" value="<?php echo utf8_encode($pckets); ?>">
                        </div>

                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <?php if ($id == "0" or $id == "") { ?>
                                <button type="submit" class="btn btn-success" value="Insertar" name="btn" >Agregar</button>
                            <?php } else { ?>
                                <button type="submit" class="btn btn-warning" value="Actualizar" name="btn" >Modificar</button>
                                <button type="submit" class="btn btn-danger" value="Borrar" name="btn" >Borrar</button>
                            <?php }; ?>
                            <button type="reset" class="btn btn-inverse" value="Cancelar">Cancelar</button>
                        </div>
                    </div>

         <!-- /Fin del Formulario (Peledahe) -->
                        </form>
                    <!-- /BOX -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

<?php include_once 'panel/i_foot.php'; ?>

<!-- Finaliza Area Scripts Locales -->
