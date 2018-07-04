<?php
    //Definición de Variables locales
    global $id; $nombre; $pais; $logo; $logo_aplicacion; $logo_impresion; $tipo; $url; 
    global $email; $direccion; $telefono; $estatus; $nit; $contacto; $patrono_igss;
    
    //Inicialización de Variables locales
    $id = '';
    $nombre = ''; 
    $pais = ''; 
    $logo = ''; 
    $logo_aplicacion = ''; 
    $logo_impresion = ''; 
    $tipo = ''; 
    $url = ''; 
    $email = ''; 
    $direccion = ''; 
    $telefono = ''; 
    $estatus = ''; 
    $nit = ''; 
    $contacto = '';
    $patrono_igss = '';
    
    // Asignar el valor que viene en el request a variables
    if (!$id) { $id  = isset_or('id', '0'); };  
    if (!$nombre) { $nombre  = isset_or('nombre', ''); }; 
    if (!$pais) { $pais  = isset_or('pais', '0'); }; 
    if (!$logo) { $logo  = isset_or('logo', ''); }; 
    if (!$logo_aplicacion) { $logo_aplicacion  = isset_or('logo_aplicacion', ''); }; 
    if (!$logo_impresion) { $logo_impresion  = isset_or('logo_impresion', ''); }; 
    if (!$tipo) { $tipo  = isset_or('tipo', '0'); }; 
    if (!$url) { $url  = isset_or('url', ''); }; 
    if (!$email) { $email  = isset_or('email', ''); }; 
    if (!$direccion) { $direccion  = isset_or('direccion', ''); }; 
    if (!$telefono) { $telefono  = isset_or('telefono', ''); }; 
    if (!$estatus) { $estatus  = isset_or('estatus', '0'); }; 
    if (!$nit) { $nit  = isset_or('nit', ''); }; 
    if (!$contacto) { $contacto  = isset_or('contacto', ''); };
    if (!$patrono_igss) { $patrono_igss  = isset_or('patrono_igss', ''); };
    
?>

<!-- Page wrapper -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><i class="fa fa-building-o"></i> Administración de Institución</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
                        
<?php
    
    //Programacion de Funcionalidad para mostrar datos de la pagina
    if ($id == "0" or $id == "") {
		$var_where1 = " ";
	} else {
		$var_where1 = " AND i.id = '" . $id . "' ";
	//	$var_where1 = $var_where1 . " AND u.institucion in ('1', '" . $_SESSION['usuario_institucion'] . "')";
    
	    // Consulta SQL
	    // echo " [Where]" . $s_where . "[FIN]";
	    $sql1 = "SELECT i.id,
					    i.nombre, 
					    i.pais, 
					    i.logo, 
					    i.logo_aplicacion, 
					    i.logo_impresion, 
					    i.tipo, 
					    i.url, 
					    i.email, 
					    i.direccion, 
					    i.telefono, 
					    i.estatus, 
					    i.nit, 
					    i.contacto,
                                            i.patrono_igss
			    from ap_instituciones i
			    WHERE 1=1 
			    " . $var_where1 . "
			    order by i.id +0";
	    //	echo "<br>[SQL] ".$sql. " [Fin SQL]";
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
	        //	exit;
		} else { // búsqueda satisfactoria, de 1 a mas registros encontrados
	   		// Asignación de valores en variables
			while($row1=mysql_fetch_assoc($resp1)){
			    $id = $row1['id'];
			    $nombre = $row1['nombre']; 
			    $pais = $row1['pais']; 
			    $logo = $row1['logo']; 
			    $logo_aplicacion = $row1['logo_aplicacion']; 
			    $logo_impresion = $row1['logo_impresion']; 
			    $tipo = $row1['tipo']; 
			    $url = $row1['url']; 
			    $email = $row1['email']; 
			    $direccion = $row1['direccion']; 
			    $telefono = $row1['telefono']; 
			    $estatus = $row1['estatus']; 
			    $nit = $row1['nit']; 
			    $contacto = $row1['contacto'];
                            $patrono_igss = $row1['patrono_igss'];
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
                        <i class="fa fa-info-circle"></i> Ingrese en el siguiente formulario toda la información solicitada
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" action="index.php" method="post">
                        <!-- Inicia Formulario (Peledahe) -->
        
                    <input class="text" name="p" type="hidden" value="sistema/instituciones_gestion.php"/>
                    <div class="form-group has-error">
                        <label for="id" class="col-sm-2 control-label">Id (Auto) </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id" placeholder="0" name="id" value="<?php echo $id; ?>"  >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nit" class="col-sm-2 control-label">N.I.T.</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="nit" placeholder="N.I.T." name="nit" value="<?php echo utf8_encode($nit); ?>">
                        </div>
                        <label for="nit" class="col-sm-2 control-label">No. Patrono IGSS</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="patrono_igss" placeholder="No. Patrono IGSS" name="patrono_igss" value="<?php echo $patrono_igss; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nombre" class="col-sm-2 control-label">Institución</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nombre" placeholder="Nombre de Institución" name="nombre" value="<?php echo utf8_encode($nombre); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pais" class="col-sm-2 control-label">País</label>
                        <div class="col-sm-10">
                            <select id="pais" class="form-control col-md-12" name="pais" >
                                <?php
                                    $sql2="SELECT  id, nombre, comodin
                                            FROM ap_catalogos
                                            WHERE tipo_catalogo = 5 AND institucion = 1 
                                            ORDER BY id";
                                    $resp2 = mysql_query($sql2);
                                ?>
                                <option value="" selected="selected" >Seleccionar</option>
                                <?php 
                                    while($row2=mysql_fetch_assoc($resp2)){
                                        print '<option value="'.$row2['id'].'" ';
                                        if ($pais == $row2['comodin']) { print ' selected="selected" '; };
                                        print ' >'.utf8_encode($row2['nombre']).'</option>';
                                    };
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="logo" class="col-sm-2 control-label">Logo</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="logo" placeholder="Logo" name="logo" value="<?php echo utf8_encode($logo); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="logo_aplicacion" class="col-sm-2 control-label">Logo de Aplicación</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="logo_aplicacion" placeholder="Logo de Aplicación" name="logo_aplicacion" value="<?php echo utf8_encode($logo_aplicacion); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="logo_impresion" class="col-sm-2 control-label">Logo de Impresión</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="logo_impresion" placeholder="Logo de Impresión" name="logo_impresion" value="<?php echo utf8_encode($logo_impresion); ?>">
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="tipo" class="col-sm-2 control-label">Tipo de Institución</label>
                        <div class="col-sm-10">
                            <select id="tipo" class="form-control col-md-12" name="tipo" >
                                <?php
                                    $sql2="SELECT  id , nombre
                                            FROM ap_catalogos
                                            WHERE tipo_catalogo = 4 AND institucion = 1 
                                            ORDER BY id";
                                    $resp2 = mysql_query($sql2);
                                ?>
                                <option value="" selected="selected" >Seleccionar</option>
				<?php 
                                    while($row2=mysql_fetch_assoc($resp2)){
                                        print '<option value="'.$row2['id'].'" ';
                                        if ($tipo == $row2['id']) { print ' selected="selected" '; };
                                        print ' >'.utf8_encode($row2['nombre']).'</option>';
                                    }
				?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nick" class="col-sm-2 control-label">URL</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="url" placeholder="URL" name="url" value="<?php echo utf8_encode($url); ?>">
                        </div>
			<label for="email" class="col-sm-2 control-label">E-Mail</label>
			<div class="col-sm-4">
                            <input type="email" class="form-control" id="email" placeholder="E-Mail" name="email" value="<?php echo utf8_encode($email); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="telefono" class="col-sm-2 control-label">Teléfono</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="telefono" placeholder="Teléfono" name="telefono" value="<?php echo utf8_encode($telefono); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="contacto" class="col-sm-2 control-label">Contácto</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="contacto" placeholder="Nombre de Contácto" name="contacto" value="<?php echo utf8_encode($contacto); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="direccion" class="col-sm-2 control-label">Dirección</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="2" id="direccion" placeholder="Direccion" name="direccion"><?php echo utf8_encode($direccion); ?></textarea>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="estatus" class="col-sm-2 control-label">Estatus</label>
                        <div class="col-sm-10">
                            <select id="estatus" class="form-control col-md-12" name="estatus" >
                                <?php
                                    $sql2="SELECT  id , nombre
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
                                    }
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