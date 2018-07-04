<?php

    //Definición de Variables locales
    //Variables de resultado de query Condominio
    global $id; $fecha_cierre; $fecha_vence; $fecha_upago; $ultima_ncobra; $ultimo_recibo_prov; $ultimo_recibo_cont;
    global $ultima_factura; $convenio_bi; $mensaje1; $mensaje2; $autorizacion; $cinstitucion; $nombre;
    global $logo_cond; $sitio; $moneda; $saldo_minimo; $dia_corte; $estatus; $cambio_usd;
    global $razon_social; $direccion_docs; $telefono_docs; $nit_docs; $logo_print;
    global $tamanio_reqcobro; $tamanio_cotizacion; $ultima_cotizacion; $autorizacion_fiscal; $mensaje3; $mensaje4;
    global $facha_cambio_usd; $imp_qrcod; $imp_barcod; $imp_recsup; $imp_recinf;
    global $imp_estatus; $ultima_ot; $imp_ot_doble; $ninstitucion;
    
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
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="id" placeholder="Id" name="id" value="<?php echo utf8_encode($id); ?>" disabled="">
                            <input name="id" type="hidden" value="<?php echo utf8_encode($id); ?>" />
                        </div>
                        <label for="estatus" class="col-sm-2 control-label">Estatus</label>
                        <div class="col-sm-2">
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
                        <label for="dia_corte" class="col-sm-2 control-label">Dia de Corte</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="dia_corte" placeholder="Dia" name="dia_corte" value="<?php echo utf8_encode($dia_corte); ?>">
                        </div>
                    </div>
                     
                    <div class="form-group">
                        <label for="nombre" class="col-sm-2 control-label">Nombre del Perfil</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre" value="<?php echo utf8_encode($nombre); ?>">
                        </div>
                        <label for="logo_cond" class="col-sm-2 control-label">Logo en Aplicacion</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="logo_cont" placeholder="Logo" name="logo_cond" value="<?php echo utf8_encode($logo_cond); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="razon_social" class="col-sm-2 control-label">Razón Social (Docs)</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="razon_social" placeholder="Razon Social en Documentos" name="razon_social" value="<?php echo utf8_encode($razon_social); ?>">
                        </div>
                        <label for="logo_print" class="col-sm-2 control-label">Logo en Documentos</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="logo_print" placeholder="Logo en Documentos" name="logo_print" value="<?php echo utf8_encode($logo_print); ?>">
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
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="nit_docs" placeholder="NIT en Docs" name="nit_docs" value="<?php echo utf8_encode($nit_docs); ?>">
                        </div>
                        <label for="telefono_docs" class="col-sm-2 control-label">Telefono (Docs)</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="telefono_docs" placeholder="Telefono en Docs" name="telefono_docs" value="<?php echo utf8_encode($telefono_docs); ?>">
                        </div>                        
                    </div>
                    <div class="form-group">
                        <label for="autorizacion_fiscal" class="col-sm-2 control-label">Autorizacion Fiscal</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="autorizacion_fiscal" placeholder="Autorizacion Fiscal" name="autorizacion_fiscal" value="<?php echo utf8_encode($autorizacion_fiscal); ?>">
                        </div>
                     </div>
                    
                    <div class="form-group">
                        <label for="fecha_cierre" class="col-sm-2 control-label">Fecha de Cierre</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="fecha_cierre" placeholder="Fecha" name="fecha_cierre" value="<?php echo utf8_encode($fecha_cierre); ?>">
                        </div>
                        <label for="fecha_upago" class="col-sm-2 control-label">Fecha último pago</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="fecha_upago" placeholder="Fecha" name="fecha_upago" value="<?php echo utf8_encode($fecha_upago); ?>">
                        </div>
                        <label for="fecha_vence" class="col-sm-2 control-label">Fecha Vencimiento</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="fecha_vence" placeholder="Fecha Vencimiento" name="fecha_vence" value="<?php echo utf8_encode($fecha_vence); ?>">
                        </div>
                        
                    </div>
                    
                     <div class="form-group">
                        <label for="ultima_factura" class="col-sm-2 control-label">Ultima Factura</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="ultima_factura" placeholder="Ultima Factura" name="ultima_factura" value="<?php echo utf8_encode($ultima_factura); ?>">
                        </div>
                        
                        <label for="ultimo_recibo_cont" class="col-sm-2 control-label">Ultimo Recibo Contable</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="ultimo_recibo_cont" placeholder="Ultimo Recibo" name="ultimo_recibo_cont" value="<?php echo utf8_encode($ultimo_recibo_cont); ?>">
                        </div>
                        <label for="ultimo_recibo_prov" class="col-sm-2 control-label">Ultimo Recibo Provisional</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="ultimo_recibo_prov" placeholder="Ultimo Recibo" name="ultimo_recibo_prov" value="<?php echo utf8_encode($ultimo_recibo_prov); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ultima_ncobra" class="col-sm-2 control-label">Ultima Nota de Cobro</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="ultima_ncobra" placeholder="Ultima nota de Cobro" name="ultima_ncobra" value="<?php echo utf8_encode($ultima_ncobra); ?>">
                        </div>
                        <label for="ultima_cotizacion" class="col-sm-2 control-label">Ultima Cotización</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="ultima_cotizacion" placeholder="Ultima Cotización" name="ultima_cotizacion" value="<?php echo utf8_encode($ultima_cotizacion); ?>">
                        </div>
                        <label for="ultima_ncobra" class="col-sm-2 control-label">Ultima Orden de Trabajo</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="ultima_ot" placeholder="Ultima Orden de Trabajo" name="ultima_ot" value="<?php echo utf8_encode($ultima_ot); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        
                        <label for="convenio_bi" class="col-sm-2 control-label">Convenio Banco</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="convenio_bi" placeholder="Convenio Bi" name="convenio_bi" value="<?php echo utf8_encode($convenio_bi); ?>">
                        </div>
                        <label for="autorizacion" class="col-sm-2 control-label">Autorizacion</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="autorizacion" placeholder="Autorizacion" name="autorizacion" value="<?php echo utf8_encode($autorizacion); ?>">
                        </div>
                        <?php  if ($_SESSION['usuario_nivel'] == 1) { ?>
                        <label for="institucion" class="col-sm-2 control-label">Institucion</label>
                        <div class="col-sm-2">
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
         <!--           
                $tamanio_reqcobro       = $row1['tamanio_reqcobro'];
                $tamanio_cotizacion     = $row1['tamanio_cotizacion'];

                $facha_cambio_usd       = $row1['facha_cambio_usd'];

                $imp_qrcod              = $row1['imp_qrcod'];
                $imp_barcod             = $row1['imp_barcod'];
                $imp_recsup             = $row1['imp_recsup'];
                $imp_recinf             = $row1['imp_recinf'];
                $imp_estatus            = $row1['imp_estatus'];
         -->           
                    <div class="form-group">
                        <label for="saldo_minimo" class="col-sm-2 control-label">Saldo Minimo</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="saldo_minimo" placeholder="Saldo" name="saldo_minimo" value="<?php echo utf8_encode($saldo_minimo); ?>">
                        </div>
                        <label for="moneda" class="col-sm-2 control-label">Moneda</label>
                        <div class="col-sm-2">
                            <select id="moneda" class="form-control col-md-12" name="moneda" >
                                <?php
                                    $sql2="SELECT  id , nombre, comodin
                                                FROM ap_catalogos
                                                WHERE tipo_catalogo = 27 AND institucion = 1 
                                                ORDER BY id";
                                    $resp2 = mysql_query($sql2);
                                ?>
                                <option value="" selected="selected" >Seleccionar</option>
                                <?php 
                                    while($row2=mysql_fetch_assoc($resp2)){
                                        print '<option value="'.$row2['id'].'" ';
                                        if ($moneda == $row2['id']) { print ' selected="selected" '; };
                                        print ' >'.utf8_encode($row2['comodin']).'</option>';
                                    };
                                ?>
                            </select>
                        </div>
                        <label for="cambio_usd" class="col-sm-2 control-label">Cambio US$</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="cambio_usd" placeholder="Cambio US$" name="cambio_usd" value="<?php echo utf8_encode($cambio_usd); ?>">
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="mensaje1" class="col-sm-2 control-label">Mensaje 1</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="mensaje1" placeholder="Mensaje" name="mensaje1" value="<?php echo utf8_encode($mensaje1); ?>">
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="mensaje2" class="col-sm-2 control-label">Mensaje 2</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="mensaje2" placeholder="Mensaje" name="mensaje2" value="<?php echo utf8_encode($mensaje2); ?>">
                        </div>
                     </div>
                    <div class="form-group">
                        <label for="mensaje3" class="col-sm-2 control-label">Mensaje 3</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="mensaje3" placeholder="Mensaje" name="mensaje3" value="<?php echo utf8_encode($mensaje3); ?>">
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="mensaje4" class="col-sm-2 control-label">Mensaje 4</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="mensaje4" placeholder="Mensaje" name="mensaje4" value="<?php echo utf8_encode($mensaje4); ?>">
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="imp_recsup" class="col-sm-2 control-label">Recuadro Superior</label>
                        <div class="col-sm-2">
                            <select id="imp_recsup" class="form-control col-md-12" name="imp_recsup" >
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
                                        if ($imp_recsup == $row2['id']) { print ' selected="selected" '; };
                                        print ' >'.utf8_encode($row2['comodin']).'</option>';
                                    };
                                ?>
                            </select>
                        </div>
                        <label for="imp_recinf" class="col-sm-2 control-label">Recuadro Inferior</label>
                        <div class="col-sm-2">
                            <select id="imp_recinf" class="form-control col-md-12" name="imp_recinf" >
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
                                        if ($imp_recinf == $row2['id']) { print ' selected="selected" '; };
                                        print ' >'.utf8_encode($row2['comodin']).'</option>';
                                    };
                                ?>
                            </select>
                        </div>
                        
                     </div>
         <div class="form-group">
                        <label for="imp_qrcod" class="col-sm-2 control-label">Código QR</label>
                        <div class="col-sm-2">
                            <select id="imp_qrcod" class="form-control col-md-12" name="imp_qrcod" >
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
                                        if ($imp_qrcod == $row2['id']) { print ' selected="selected" '; };
                                        print ' >'.utf8_encode($row2['comodin']).'</option>';
                                    };
                                ?>
                            </select>
                        </div>
                        <label for="imp_barcod" class="col-sm-2 control-label">Código de Barras</label>
                        <div class="col-sm-2">
                            <select id="imp_barcod" class="form-control col-md-12" name="imp_barcod" >
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
                                        if ($imp_barcod == $row2['id']) { print ' selected="selected" '; };
                                        print ' >'.utf8_encode($row2['comodin']).'</option>';
                                    };
                                ?>
                            </select>
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