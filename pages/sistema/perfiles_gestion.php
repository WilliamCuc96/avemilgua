<?php

    //Definición de Variables locales
    global $id; $fecha_cierre; $fecha_vence; $fecha_upago; $ultima_ncobra; $ultimo_recibo_prov; $ultimo_recibo_cont;
    global $ultima_factura; $convenio_bi; $mensaje1; $mensaje2; $autorizacion; $cinstitucion; $nombre;
    global $logo_cond; $sitio; $moneda; $saldo_minimo; $dia_corte; $estatus; $cambio_usd;
    global $razon_social; $direccion_docs; $telefono_docs; $nit_docs; $logo_print;
    global $tamanio_reqcobro; $tamanio_cotizacion; $ultima_cotizacion; $autorizacion_fiscal; $mensaje3; $mensaje4;
    global $facha_cambio_usd; $imp_qrcod; $imp_barcod; $imp_recsup; $imp_recinf;
    global $imp_estatus; $ultima_ot; $imp_ot_doble; $ninstitucion; $alarmas; $eventos; $traffic_mb; $flows; $pckets; $email_docs;

    //Inicialización de Variables locales
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
    if (!$fecha_cierre) { $fecha_cierre  = isset_or('fecha_cierre', ''); };
    if (!$fecha_upago) { $fecha_upago  = isset_or('fecha_upago', ''); };
    if (!$ultima_ncobra) { $ultima_ncobra  = isset_or('ultima_ncobra', ''); };
    if (!$ultimo_recibo_prov) { $ultimo_recibo_prov  = isset_or('ultimo_recibo_prov', ''); };
    if (!$ultimo_recibo_cont) { $ultimo_recibo_cont  = isset_or('ultimo_recibo_cont', ''); };
    if (!$ultima_factura) { $ultima_factura  = isset_or('ultima_factura', ''); };
    if (!$fecha_vence) { $fecha_vence  = isset_or('fecha_vence', ''); };
    if (!$nombre) { $nombre  = isset_or('nombre', ''); };
    if (!$logo_cond) { $logo_cond  = isset_or('logo_cond', ''); };
    if (!$sitio) { $sitio  = isset_or('sitio', ''); };
    if (!$moneda) { $moneda  = isset_or('moneda', ''); };
    if (!$cambio_usd) { $cambio_usd  = isset_or('cambio_usd', ''); };
    if (!$saldo_minimo) { $saldo_minimo  = isset_or('saldo_minimo', ''); };
    if (!$convenio_bi) { $convenio_bi  = isset_or('convenio_bi', '0'); };
    if (!$dia_corte) { $dia_corte  = isset_or('dia_corte', '0'); };
    if (!$mensaje1) { $mensaje1  = isset_or('mensaje1', '0'); };
    if (!$mensaje2) { $mensaje2  = isset_or('mensaje2', '0'); };
    if (!$autorizacion) { $autorizacion  = isset_or('autorizacion', ''); };
    if (!$institucion) { $institucion  = isset_or('institucion', '0'); };
    if (!$estatus) { $estatus  = isset_or('estatus', ''); };
    if (!$razon_social) { $razon_social  = isset_or('razon_social', ''); };
    if (!$direccion_docs) { $direccion_docs  = isset_or('direccion_docs', ''); };
    if (!$telefono_docs) { $telefono_docs  = isset_or('telefono_docs', ''); };
    if (!$nit_docs) { $nit_docs  = isset_or('nit_docs', ''); };
    if (!$logo_print) { $logo_print  = isset_or('logo_print', ''); };
    if (!$tamanio_reqcobro) { $tamanio_reqcobro  = isset_or('tamanio_reqcobro', ''); };
    if (!$tamanio_cotizacion) { $tamanio_cotizacion  = isset_or('tamanio_cotizacion', ''); };
    if (!$ultima_cotizacion) { $ultima_cotizacion  = isset_or('ultima_cotizacion', ''); };
    if (!$autorizacion_fiscal) { $autorizacion_fiscal  = isset_or('autorizacion_fiscal', ''); };
    if (!$mensaje3) { $mensaje3  = isset_or('mensaje3', ''); };
    if (!$mensaje4) { $mensaje4  = isset_or('mensaje4', ''); };
    if (!$fecha_cambio_usd) { $fecha_cambio_usd  = isset_or('fecha_cambio_usd', ''); };
    if (!$imp_qrcod) { $imp_qrcod  = isset_or('imp_qrcod', ''); };
    if (!$imp_barcod) { $imp_barcod  = isset_or('imp_barcod', ''); };
    if (!$imp_recsup) { $imp_recsup  = isset_or('imp_recsup', ''); };
    if (!$imp_recinf) { $imp_recinf  = isset_or('imp_recinf', ''); };
    if (!$imp_estatus) { $imp_estatus  = isset_or('imp_estatus', ''); };
    if (!$ultima_ot) { $ultima_ot  = isset_or('ultima_ot', ''); };
    if (!$imp_ot_doble) { $imp_ot_doble  = isset_or('imp_ot_doble', ''); };

    if (!$alarmas) { $alarmas  = isset_or('alarmas', ''); };
    if (!$eventos) { $eventos  = isset_or('eventos', ''); };
    if (!$traffic_mb) { $traffic_mb  = isset_or('traffic_mb', ''); };
    if (!$flows) { $flows  = isset_or('flows', ''); };
    if (!$pckets) { $pckets  = isset_or('pckets', ''); };
    if (!$email_docs) { $email_docs  = isset_or('email_docs', ''); };


    $btn    = isset_or('btn', '');
    $resp   = 0;

    if ($id || $nombre) {
	    switch ($btn) {
	        case "Insertar":
	            $sql1 = "INSERT INTO ap_perfil (
                                                    id,
						    fecha_cierre,
                                                    fecha_upago,
                                                    ultima_ncobra,
                                                    ultimo_recibo_prov,
                                                    ultimo_recibo_cont,
                                                    ultima_factura,
                                                    fecha_vence,
                                                    nombre,
                                                    logo_cond,
                                                    sitio,
                                                    moneda,
                                                    cambio_usd,
                                                    saldo_minimo,
                                                    convenio_bi,
                                                    dia_corte,
                                                    mensaje1,
                                                    mensaje2,
                                                    autorizacion,
                                                    institucion,
                                                    estatus,
                                                    razon_social,
                                                    direccion_docs,
                                                    telefono_docs,
                                                    nit_docs,
                                                    logo_print,
                                                    tamanio_reqcobro,
                                                    tamanio_cotizacion,
                                                    ultima_cotizacion,
                                                    autorizacion_fiscal,
                                                    mensaje3,
                                                    mensaje4,
                                                    fecha_cambio_usd,
                                                    imp_qrcod,
                                                    imp_barcod,
                                                    imp_recsup,
                                                    imp_recinf,
                                                    imp_estatus,
                                                    ultima_ot,
                                                    alarmas,
                                                    eventos,
                                                    traffic_mb,
                                                    flows,
                                                    pckets,
                                                    email_docs,
                                                    imp_ot_doble
						) VALUES (
                                                    '".$id."',
						    '".$fecha_cierre."',
                                                    '".$fecha_upago."',
                                                    '".$ultima_ncobra."',
                                                    '".$ultimo_recibo_prov."',
                                                    '".$ultimo_recibo_cont."',
                                                    '".$ultima_factura."',
                                                    '".$fecha_vence."',
                                                    '".utf8_decode($nombre)."',
                                                    '".utf8_decode($logo_cond)."',
                                                    '".utf8_decode($sitio)."',
                                                    '".utf8_decode($moneda)."',
                                                    '".$cambio_usd."',
                                                    '".$saldo_minimo."',
                                                    '".$convenio_bi."',
                                                    '".$dia_corte."',
                                                    '".utf8_decode($mensaje1)."',
                                                    '".utf8_decode($mensaje2)."',
                                                    '".utf8_decode($autorizacion)."',
                                                    '".$institucion."',
                                                    '".$estatus."',
                                                    '".utf8_decode($razon_social)."',
                                                    '".utf8_decode($direccion_docs)."',
                                                    '".utf8_decode($telefono_docs)."',
                                                    '".utf8_decode($nit_docs)."',
                                                    '".utf8_decode($logo_print)."',
                                                    '".utf8_decode($tamanio_reqcobro)."',
                                                    '".utf8_decode($tamanio_cotizacion)."',
                                                    '".$ultima_cotizacion."',
                                                    '".utf8_decode($autorizacion_fiscal)."',
                                                    '".utf8_decode($mensaje3)."',
                                                    '".utf8_decode($mensaje4)."',
                                                    NOW(),
                                                    '".$imp_qrcod."',
                                                    '".$imp_barcod."',
                                                    '".$imp_recsup."',
                                                    '".$imp_recinf."',
                                                    '".$imp_estatus."',
                                                    '".$ultima_ot."',
                                                    '".$alarmas."',
                                                    '".$eventos."',
                                                    '".$traffic_mb."',
                                                    '".$flows."',
                                                    '".$pckets."',
                                                    '".$email_docs."',
                                                    '".$imp_ot_doble."'
						)";
	            break;
	        case "Actualizar":  // Modificar
	            $sql1 = " UPDATE ap_perfil SET
                                        fecha_cierre = '" . utf8_decode($fecha_cierre) . "',
                                        fecha_upago = '" . utf8_decode($fecha_upago) . "',
                                        ultima_ncobra = '" .utf8_decode ($ultima_ncobra) . "',
                                        ultimo_recibo_prov  = '" .utf8_decode ($ultimo_recibo_prov) . "',
                                        ultimo_recibo_cont = '" .utf8_decode ($ultimo_recibo_cont) . "',
                                        ultima_factura = '" .utf8_decode ($ultima_factura) . "',
                                        fecha_vence = '" .utf8_decode ($fecha_vence) . "',
                                        nombre = '" .utf8_decode ($nombre) . "',
                                        logo_cond = '" .utf8_decode ($logo_cond) . "',
                                        sitio = '" .utf8_decode ($sitio) . "',
                                        moneda = '" .utf8_decode ($moneda) . "',
                                        cambio_usd = '" .utf8_decode ($cambio_usd) . "',
                                        saldo_minimo = '" .utf8_decode ($saldo_minimo) . "',
                                        convenio_bi = '" .utf8_decode($convenio_bi) . "',
                                        dia_corte = '" .utf8_decode($dia_corte) . "',
                                        Mensaje1 = '" .utf8_decode ($mensaje1) . "',
                                        mensaje2 = '" .utf8_decode ($mensaje2) . "',
                                        autorizacion = '" .utf8_decode ($autorizacion) . "',
                                        institucion = '" . utf8_decode($institucion) . "',
                                        estatus = '" . utf8_decode($estatus) . "',
                                        razon_social = '" . utf8_decode($razon_social) . "',
                                        direccion_docs = '" . utf8_decode($direccion_docs) . "',
                                        telefono_docs = '" . utf8_decode($telefono_docs) . "',
                                        nit_docs = '" . utf8_decode($nit_docs) . "',
                                        logo_print = '" . utf8_decode($logo_print) . "',
                                        tamanio_reqcobro = '" . utf8_decode($tamanio_reqcobro) . "',
                                        tamanio_cotizacion = '" . utf8_decode($tamanio_cotizacion) . "',
                                        ultima_cotizacion = '" . utf8_decode($ultima_cotizacion) . "',
                                        autorizacion_fiscal = '" . utf8_decode($autorizacion_fiscal) . "',
                                        mensaje3 = '" . utf8_decode($mensaje3) . "',
                                        mensaje4 = '" . utf8_decode($mensaje4) . "',
                                        fecha_cambio_usd = '" . utf8_decode($fecha_cambio_usd) . "',
                                        imp_qrcod = '" . utf8_decode($imp_qrcod) . "',
                                        imp_barcod = '" . utf8_decode($imp_barcod) . "',
                                        imp_recsup = '" . utf8_decode($imp_recsup) . "',
                                        imp_recinf = '" . utf8_decode($imp_recinf) . "',
                                        imp_estatus = '" . utf8_decode($imp_estatus) . "',
                                        ultima_ot = '" . utf8_decode($ultima_ot) . "',
                                        alarmas = '" . utf8_decode($alarmas) . "',
                                        eventos = '" . utf8_decode($eventos) . "',
                                        traffic_mb = '" . utf8_decode($traffic_mb) . "',
                                        flows = '" . utf8_decode($flows) . "',
                                        pckets = '" . utf8_decode($pckets) . "',
                                        email_docs = '" . utf8_decode($email_docs) . "',
                                        imp_ot_doble = '" . utf8_decode($imp_ot_doble) . "'
                                     WHERE id = '".$id."'   ";
	            break;

	        case "Borrar":
	            $sql1 = "DELETE from ap_perfil where id = '" . $id . "'";

	            break;
    	} // End switch

	if (mysql_query($sql1)){
            $tt_id=mysql_insert_id(); // retorna el ultimo id creado
            $mensaje1 = '<button type="button" class="btn btn-success btn-circle btn-xl"><i class="fa fa-check"></i></button>';
            $mensaje2 = utf8_encode('Su gestion fue exitosa');
            $mensaje3 = utf8_encode('Gracias por usar nuestro servicio!');
        } else {
            $mensaje1 = '<button type="button" class="btn btn-danger btn-circle btn-xl"><i class="fa fa-times"></i></button>';
            $mensaje2 = utf8_encode('Error de base de datos');
            $mensaje3 = utf8_encode('Su gestion no pudo ser realizada, intentelo de nuevo!');
        }

    } else {

    	$mensaje1 = '<button type="button" class="btn btn-danger btn-circle btn-xl"><i class="fa fa-check"></i></button>';
    	$mensaje2 = 'Error de datos';
	$mensaje3 = 'No se trasladaron datos para su gestión, intentelo de nuevo!';

    }; // End if
?>
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><i class="fa fa-wrench"></i> Gestión de Tipos de Catálogo</h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-md-12 text-center">
                    <?php echo $mensaje1; ?>
            </div>
            <div class="col-md-12 text-center">
                <div class="">
                    <h3><?php echo $mensaje2; ?></h3>
                    <p>
                        <?php echo $mensaje3; ?>
                    </p>
                    <div class="btn-group">
                            <a href="index.php?p=sistema/perfiles_edit.php&id=<?php echo $id;?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Regresar al Perfil de Negocio</a>
                            <a href="index.php?p=sistema/perfiles_list.php" class="btn btn-danger"><i class="fa fa-arrow-up"></i> Listado de Perfiles de Negocio</a>

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
