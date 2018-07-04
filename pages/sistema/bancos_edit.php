<?php
    //Definición de Variables locales
    //global $id;
    global $id; $nombre; $siglas; $cuenta; $tipo_cuenta; $contacto; $codigo; $telefono; $institucion; $email; $estatus; $condominio;
    
    //Inicialización de Variables locales
    //$id = '';
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
    //if (!$id) { $id  = isset_or('id', '0'); };
    if (!$id) { $id  = isset_or('id', '0'); };
    if (!$nombre) { $nombre  = isset_or('nombre', ''); }; 
    if (!$siglas) { $siglas  = isset_or('siglas', '0'); }; 
    if (!$cuenta) { $cuenta  = isset_or('cuenta', '0'); }; 
    if (!$tipo_cuenta) { $tipo_cuenta  = isset_or('tipo_cuenta', '0'); }; 
    if (!$contacto) { $contacto  = isset_or('contacto', '0'); }; 
    if (!$codigo) { $codigo  = isset_or('codigo', '0'); }; 
    if (!$telefono) { $telefono  = isset_or('telefono', '0'); }; 
    if (!$institucion) { $institucion  = isset_or('institucion', '0'); }; 
    if (!$condominio) { $condominio  = isset_or('condominio', '0'); }; 
    if (!$email) { $email  = isset_or('email', '0'); }; 
    if (!$estatus) { $estatus  = isset_or('estatus', '0'); };
    
 ?>

<!-- Page wrapper -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><i class="fa fa-gift"></i> Administración de Bancos</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
                        
<?php

    //Programacion de Funcionalidad para mostrar datos de la pagina
    if ($id == "0" or $id == "") {
		$var_where1 = " ";
                $institucion = $_SESSION['usuario_institucion'];
                $estatus = 1;
                $tipo_cuenta = 2;
	} else {
		$var_where1 = " AND b.id = '" . $id . "' ";
	//	$var_where1 = $var_where1 . " AND u.institucion in ('1', '" . $_SESSION['usuario_institucion'] . "')";
    
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
                            b.estatus
			FROM ig_bancos b
                        WHERE 1=1 
			" . $var_where1 . "
			ORDER BY b.id +0";
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
                            $siglas = $row1['siglas']; 
                            $cuenta = $row1['cuenta']; 
                            $tipo_cuenta = $row1['tipo_cuenta']; 
                            $contacto = $row1['contacto']; 
                            $codigo = $row1['codigo']; 
                            $telefono = $row1['telefono']; 
                            $institucion = $row1['institucion']; 
                            $condominio = $row1['condominio']; 
                            $email = $row1['email']; 
                            $estatus = $row1['estatus'];
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
                        <i class="fa fa-info-circle"></i> Ingrese en el siguiente formulario toda la información del Banco
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" action="index.php" method="post">
                        <!-- Inicia Formulario (Peledahe) -->
                        
                    <input class="text" name="p" type="hidden" value="sistema/bancos_gestion.php"/>
                    <div class="form-group has-error">
                        <label for="id" class="col-sm-2 control-label">Id (Auto) </label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="id" placeholder="0" name="id" value="<?php echo $id; ?>"  >
                        </div>
                        <label for="estatus" class="col-sm-2 control-label">Estatus</label>
                        <div class="col-sm-4">
                            <select id="estatus" class="form-control col-md-12" name="estatus" >
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
                        <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre" value="<?php echo utf8_encode($nombre); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="siglas" class="col-sm-2 control-label">Siglas</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="siglas" placeholder="Siglas" name="siglas" value="<?php echo utf8_encode($siglas); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="cuenta" class="col-sm-2 control-label">No. Cuenta</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="cuenta" placeholder="No. Cuenta" name="cuenta" value="<?php echo utf8_encode($cuenta); ?>">
                        </div>
                        <label for="tipo_cuenta" class="col-sm-2 control-label">Tipo de Cuenta</label>
                        <div class="col-sm-4">
                            <select id="tipo" class="form-control col-md-12" name="tipo_cuenta" >
                                <?php
                                    $sql2="SELECT  id , nombre
                                                FROM ap_catalogos
                                                WHERE tipo_catalogo = 22 AND institucion = 1 
                                                ORDER BY id";
                                    $resp2 = mysql_query($sql2);
                                ?>
                                <option value="" selected="selected" >Seleccionar</option>
                                <?php 
                                    while($row2=mysql_fetch_assoc($resp2)){
                                        print '<option value="'.$row2['id'].'" ';
                                        if ($tipo_cuenta == $row2['id']) { print ' selected="selected" '; };
                                        print ' >'.utf8_encode($row2['nombre']).'</option>';
                                    };
                                ?>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="codigo" class="col-sm-2 control-label">Código o Convenio</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="codigo" placeholder="Código o Convenio" name="codigo" value="<?php echo utf8_encode($codigo); ?>">
                        </div>
                        <span class="label label-warning arrow-out arrow-in-right"><i class='fa fa-warning'></i> Cobro por cuenta ajena</span>
                    </div>
                    <div class="form-group">
                        <label for="contacto" class="col-sm-2 control-label">Contacto en el Banco</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="contacto" placeholder="Nombre Completo de contácto" name="contacto" value="<?php echo utf8_encode($contacto); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="telefono" class="col-sm-2 control-label">Teléfono</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="telefono" placeholder="Teléfono de contácto" name="telefono" value="<?php echo utf8_encode($telefono); ?>">
                        </div>
                        <label for="email" class="col-sm-2 control-label">E-Mail</label>
                        <div class="col-sm-4">
                            <input type="email" class="form-control" id="email" placeholder="E-Mail de contácto" name="email" value="<?php echo utf8_encode($email); ?>">
                        </div>
                    </div>
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
                $plvalidarinst = " AND co.institucion = " . $_SESSION['usuario_institucion'] . " ";
                echo "<input class='text' name='institucion' id='institucion' type='hidden' value='" . $_SESSION['usuario_institucion'] . "'/>";
           }; 
    ?>
                    <label for="seccion" class="col-sm-2 control-label">Condominio</label>
                            <div class="col-sm-4">
                                <select id="condominio" class="form-control col-md-12" name="condominio" >
                                    <?php
                                        $sql2="SELECT co.id, 
                                                      co.nombre, 
                                                      co.institucion,
                                                      (select i.nombre from ap_instituciones i where i.id = co.institucion) as ninstitucion
                                                FROM ap_perfil co
                                                WHERE 1=1 
                                                ".$plvalidarinst."
                                                ORDER BY co.institucion, co.id";
                                        $resp2 = mysql_query($sql2);
                                    ?>
                                    <option value="" selected="selected" >Seleccionar</option>
                                    <?php 
                                        while($row2=mysql_fetch_assoc($resp2)){
                                            if ($refa == '') { 
                                                echo "<optgroup label='".utf8_encode($row2['ninstitucion'])."'>";
                                                $refa = $row2['ninstitucion'];
                                            } elseif ($refa != $row2['ninstitucion']) {
                                                echo "<optgroup label='".utf8_encode($row2['ninstitucion'])."'>";
                                                $refa = $row2['ninstitucion'];
                                            };
                                            print '<option value="'.$row2['id'].'" ';
                                            if ($condominio == $row2['id']) { print ' selected="selected" '; };
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
