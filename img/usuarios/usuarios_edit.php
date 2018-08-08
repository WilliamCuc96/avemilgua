<?php

    //Definición de Variables locales
    global $id; $nick; $password; $nombre; $apellido; $email; $celular; $cargo; $permiso; $institucion; $condominio;
    global $foto; $nacimiento; $genero; $dpi; $nit; $direccion; $tipoper; $codigo; $calendario1; $calendario2;
    global $observaciones; $actividad; $estatus; $nombre2; $apellido2; $apellido3; $igss; $irtra; $licencia; $licencia_tipo; $contrato;
    global $estado_civil; $conyugue; $unidad; $seccion; $salario_base; $bono_incentivo; $bono_14; $refa; $refafa;

    //Inicialización de Variables locales
    $id = '';
    $nick = '';
    $password = '';
    $nombre = '';
    $apellido = '';
    $email = '';
    $celular = '';
    $cargo = '';
    $permiso = '';
    $institucion = '';
    $condominio = '';
    $foto = '';
    $nacimiento = '';
    $genero = '';
    $dpi = '';
    $nit = '';
    $direccion = '';
    $tipoper = '';
    $codigo = '';
    $calendario1 = '';
    $calendario2 = '';
    $observaciones = '';
    $actividad = '';
    $estatus = '';
    $nombre2 = '';
    $apellido2 = '';
    $apellido3 = '';
    $igss = '';
    $irtra = '';
    $licencia = '';
    $licencia_tipo = '';
    $contrato = '';
    $estado_civil = '';
    $conyugue = '';
    $unidad = '';
    $seccion = '';
    $salario_base = '';
    $bono_incentivo = '';
    $bono_14 = '';
    $refa = '';
    $refafa = '';

    // Asignar el valor que viene en el request a variables
    if (!$id) { $id  = isset_or('id', '0'); };
    if (!$nick) { $nick  = isset_or('nick', ''); };
    if (!$password) { $password  = isset_or('password', ''); };
    if (!$nombre) { $nombre  = isset_or('nombre', ''); };
    if (!$apellido) { $apellido  = isset_or('apellido', ''); };
    if (!$email) { $email  = isset_or('email', ''); };
    if (!$celular) { $celular  = isset_or('celular', ''); };
    if (!$cargo) { $cargo  = isset_or('cargo', ''); };
    if (!$permiso) { $permiso  = isset_or('permiso', '0'); };
    if (!$institucion) { $institucion  = isset_or('institucion', '0'); };
    if (!$condominio) { $condominio  = isset_or('condominio', ''); };
    if (!$foto) { $foto  = isset_or('foto', ''); };
    if (!$nacimiento) { $nacimiento  = isset_or('nacimiento', ''); };
    if (!$genero) { $genero  = isset_or('genero', ''); };
    if (!$dpi) { $dpi  = isset_or('dpi', ''); };
    if (!$nit) { $nit  = isset_or('nit', ''); };
    if (!$direccion) { $direccion  = isset_or('direccion', ''); };
    if (!$tipoper) { $tipoper  = isset_or('tipoper', '0'); };
    if (!$codigo) { $codigo  = isset_or('codigo', ''); };
    if (!$calendario1) { $calendario1  = isset_or('calendario1', ''); };
    if (!$calendario2) { $calendario2  = isset_or('calendario2', ''); };
    if (!$observaciones) { $observaciones  = isset_or('observaciones', ''); };
    if (!$actividad) { $actividad  = isset_or('actividad', '0'); };
    if (!$estatus) { $estatus  = isset_or('estatus', '0'); };
    if (!$nombre2) { $nombre2 = isset_or('nombre2', '0'); };
    if (!$apellido2) { $apellido2 = isset_or('apellido2', '0'); };
    if (!$apellido3) { $apellido3 = isset_or('apellido3', '0'); };
    if (!$igss) { $igss = isset_or('igss', '0'); };
    if (!$irtra) { $irtra = isset_or('irtra', '0'); };
    if (!$licencia) { $licencia = isset_or('licencia', '0'); };
    if (!$licencia_tipo) { $licencia_tipo = isset_or('licencia_tipo', '0'); };
    if (!$contrato) { $contrato = isset_or('contrato', ''); };
    if (!$estado_civil) { $estado_civil = isset_or('estado_civil', ''); };
    if (!$conyugue) { $conyugue = isset_or('conyugue', ''); };
    if (!$unidad) { $unidad = isset_or('unidad', ''); };
    if (!$seccion) { $seccion = isset_or('seccion', ''); };
    if (!$salario_base) { $salario_base = isset_or('salario_base', ''); };
    if (!$bono_incentivo) { $bono_incentivo = isset_or('bono_incentivo', ''); };
    if (!$bono_14) { $bono_14 = isset_or('bono_14', ''); };

?>

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><i class="fa fa-user"></i> Administración de Usuarios</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

<!-- ******************************************************* -->

<?php

    //Programacion de Funcionalidad para mostrar datos de la pagina
    if ($id == "0" or $id == "") {
		$var_where1 = " ";
                $institucion = $_SESSION['usuario_institucion'];
                $estatus = '1';
                $permiso = '5';
	} else {
		$var_where1 = " AND u.id = '" . $id . "' ";	//	$var_where1 = $var_where1 . " AND u.institucion in ('1', '" . $_SESSION['usuario_institucion'] . "')";

	    // Consulta SQL
	    // echo " [Where]" . $s_where . "[FIN]";
	    $sql1 = "SELECT u.id,
					    u.nick,
					    u.password,
					    u.nombre,
					    u.apellido,
					    u.email,
					    u.celular,
					    u.cargo,
					    u.permiso,
					    u.institucion,
                                            u.condominios,
					    u.foto,
					    u.nacimiento,
					    u.genero,
					    u.dpi,
					    u.nit,
					    u.direccion,
					    u.tipoper,
					    u.codigo,
					    u.calendario1,
					    u.calendario2,
					    u.observaciones,
					    u.actividad,
					    u.estatus,
                                            u.nombre2,
                                            u.apellido2,
                                            u.apellido3,
                                            u.igss,
                                            u.irtra,
                                            u.licencia,
                                            u.licencia_tipo,
                                            u.contrato,
                                            u.estado_civil,
                                            u.conyugue,
                                            u.unidad,
                                            u.seccion,
                                            u.salario_base,
                                            u.bono_incentivo,
                                            u.bono_14
			    from ap_usuarios u
			    WHERE 1=1
			    " . $var_where1 . "
			    order by u.id +0";
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
			    $nick = utf8_encode($row1['nick']);
			    $password = utf8_encode($row1['password']);
			    $nombre = utf8_encode($row1['nombre']);
			    $apellido = utf8_encode($row1['apellido']);
			    $email = utf8_encode($row1['email']);
			    $celular = utf8_encode($row1['celular']);
			    $cargo = utf8_encode($row1['cargo']);
			    $permiso = $row1['permiso'];
			    $institucion = $row1['institucion'];
                            $condominio = $row1['condominios'];
			    $foto = utf8_encode($row1['foto']);
			    $nacimiento = $row1['nacimiento'];
			    $genero = $row1['genero'];
			    $dpi = $row1['dpi'];
			    $nit = $row1['nit'];
			    $direccion = utf8_encode($row1['direccion']);
			    $tipoper = $row1['tipoper'];
			    $codigo = utf8_encode($row1['codigo']);
			    $calendario1 = utf8_encode($row1['calendario1']);
			    $calendario2 = utf8_encode($row1['calendario2']);
			    $observaciones = utf8_encode($row1['observaciones']);
			    $actividad = $row1['actividad'];
			    $estatus = $row1['estatus'];
                $nombre2 = $row1['nombre2'];
                $apellido2 = $row1['apellido2'];
                $apellido3 = $row1['apellido3'];
                $igss = $row1['igss'];
                $irtra = $row1['irtra'];
                $licencia = $row1['licencia'];
                            $licencia_tipo = $row1['licencia_tipo'];
                            $contrato = $row1['contrato'];
                            $estado_civil = $row1['estado_civil'];
                            $conyugue = utf8_encode($row1['conyugue']);
                            $unidad = $row1['unidad'];
                            $seccion = $row1['seccion'];
                            $salario_base = $row1['salario_base'];
                            $bono_incentivo = $row1['bono_incentivo'];
                            $bono_14 = $row1['bono_14'];
			};
			mysql_free_result($resp1);
	    }; // toma en cuenta en el contenido el html
	};
    // end if mas adelante
?>
<!-- ******************************************************* -->

        <!-- BOX TABS -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-info-circle"></i> Ingrese en el siguiente formulario toda la información de usuario
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" action="index.php" method="post">

            <div class="tabbable header-tabs">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#box_tab1" data-toggle="tab"><i class="fa fa-shield"></i> <span class="hidden-inline-mobile">Usuario</span></a></li>
                    <li><a href="#box_tab2" data-toggle="tab"><i class="fa fa-user"></i> <span class="hidden-inline-mobile">Personal</span></a></li>
                    <li><a href="#box_tab3" data-toggle="tab"><i class="fa fa-puzzle-piece"></i> <span class="hidden-inline-mobile">Más</span></a></li>
		</ul>
		<div class="tab-content">
                    <br>
                    <div class="tab-pane fade in active" id="box_tab1">
                        <!-- Carpeta 1 -->
                        <input class="text" name="p" type="hidden" value="usuarios/usuarios_gestion.php"/>
                        <div class="form-group has-error">
                            <label for="id" class="col-sm-2 control-label">Id (Auto) </label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="id" placeholder="0" name="id" value="<?php echo $id; ?>" readonly>
                            </div>
                            <label for="permiso" class="col-sm-2 control-label">Nivel de Usuario</label>
                            <div class="col-sm-2">
                                <select id="permiso" class="form-control col-md-12" name="permiso" >
                                    <?php
                                        $sql2="SELECT  id , nombre
                                                FROM ap_catalogos
                                                WHERE tipo_catalogo = 2 AND institucion = 1
                                                ORDER BY id";
                                        $resp2 = mysql_query($sql2);
                                    ?>
                                    <option value="" selected="selected" >Seleccionar</option>
                                    <?php
                                        while($row2=mysql_fetch_assoc($resp2)){
                                            print '<option value="'.$row2['id'].'" ';
                                            if ($permiso == $row2['id']) { print ' selected="selected" '; };
                                            print ' >'.utf8_encode($row2['nombre']).'</option>';
                                        }
                                        ?>
                                </select>
                            </div>
                            <label for="estatus" class="col-sm-2 control-label">Estatus</label>
                            <div class="col-sm-2">
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
                            <label for="nick" class="col-sm-2 control-label">Usuario (e-Mail)</label>
                            <div class="col-sm-4">
                                <input type="email" class="form-control" id="nick" placeholder="Usuario (e-Mail)" name="nick" value="<?php echo $nick; ?>">
                            </div>
                            <label for="password" class="col-sm-2 control-label">Contraseña</label>
                            <div class="col-sm-4">
                                <input type="password" class="form-control" id="password" placeholder="Contraseña" name="password" value="<?php echo $password; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nombre" class="col-sm-2 control-label">Nombres</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="nombre" placeholder="1er. Nombre" name="nombre" value="<?php echo $nombre; ?>">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="nombre2" placeholder="2do. Nombre" name="nombre2" value="<?php echo $nombre2; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nombre" class="col-sm-2 control-label">Apellidos</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="apellido" placeholder="1er. Apellido" name="apellido" value="<?php echo $apellido; ?>">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="apellido2" placeholder="2do. Apellido" name="apellido2" value="<?php echo $apellido2; ?>">
                            </div>
                            <label for="nombre" class="col-sm-1 control-label">de</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="apellido3" placeholder="Apellido de Casada" name="apellido3" value="<?php echo $apellido3; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="observaciones" class="col-sm-2 control-label">Observaciones</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="3" id="observaciones" placeholder="Observaciones" name="observaciones"><?php echo $observaciones; ?></textarea>
                            </div>
                        </div>
                        <!-- Fin Carpeta 1 -->
                    </div>
                    <div class="tab-pane fade" id="box_tab2">
                        <!-- Carpeta 2 -->
                        <div class="form-group has-error">
                            <label for="codigo" class="col-sm-2 control-label">Código</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="codigo" placeholder="Código" name="codigo" value="<?php echo $codigo; ?>">
                            </div>
                            <label for="dpi" class="col-sm-2 control-label">D.P.I.</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="dpi" placeholder="Número de D.P.I." name="dpi" value="<?php echo $dpi; ?>">
                            </div>
                            <label for="nit" class="col-sm-2 control-label">N.I.T.</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="nit" placeholder="N.I.T." name="nit" value="<?php echo $nit; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">E-Mail Alterno</label>
                            <div class="col-sm-4">
                                <input type="email" class="form-control" id="email" placeholder="E-Mail" name="email" value="<?php echo $email; ?>">
                            </div>
                            <label for="celular" class="col-sm-2 control-label">Celular</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="celular" placeholder="Celular" name="celular" value="<?php echo $celular; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nacimiento" class="col-sm-2 control-label">Fecha de Nacimiento</label>
                            <div class="col-sm-3">
                                <div class="form-group input-group">
                                    <input type="text" class="form-control datepicker" id="nacimiento" placeholder="nacimiento" name="nacimiento" data-mask="9999-99-99" value="<?php echo $nacimiento; ?>">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                            <label for="genero" class="col-sm-2 control-label">Género</label>
                            <div class="col-sm-4">
                                <select id="genero" class="form-control col-md-12" name="genero" >
                                    <?php
                                        $sql2="SELECT  id, nombre, comodin
                                                FROM ap_catalogos
                                                WHERE tipo_catalogo = 6 AND institucion = 1
                                                ORDER BY id";
                                        $resp2 = mysql_query($sql2);
                                    ?>
                                    <option value="" selected="selected" >Seleccionar</option>
                                    <?php
                                        while($row2=mysql_fetch_assoc($resp2)){
                                            print '<option value="'.$row2['comodin'].'" ';
                                            if ($genero == $row2['comodin']) { print ' selected="selected" '; };
                                            print ' >'.utf8_encode($row2['nombre']).'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="genero" class="col-sm-2 control-label">Estado Civil</label>
                            <div class="col-sm-4">
                                <select id="estado_civil" class="form-control col-md-12" name="estado_civil" >
                                    <?php
                                        $sql2="SELECT  id, nombre, comodin
                                                FROM ap_catalogos
                                                WHERE tipo_catalogo = 15 AND institucion = 1
                                                ORDER BY id";
                                        $resp2 = mysql_query($sql2);
                                    ?>
                                    <option value="" selected="selected" >Seleccionar</option>
                                    <?php
                                        while($row2=mysql_fetch_assoc($resp2)){
                                            print '<option value="'.$row2['id'].'" ';
                                            if ($estado_civil == $row2['id']) { print ' selected="selected" '; };
                                            print ' >'.$row2['nombre'].'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                            <label for="nacimiento" class="col-sm-2 control-label">Conyugue</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="conyugue" placeholder="Conyugue" name="conyugue" value="<?php echo $conyugue; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="direccion" class="col-sm-2 control-label">Dirección</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="2" id="direccion" placeholder="Direccion" name="direccion"><?php echo $direccion; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="foto" class="col-sm-2 control-label">Foto</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="foto" placeholder="URL de la Foto" name="foto" value="<?php echo $foto; ?>">
                            </div>
                        </div>
                        <!-- Fin Carpeta 2 -->
                    </div>
                    <div class="tab-pane fade" id="box_tab3">
                        <!-- Carpeta 3 -->
                        <div class="form-group has-error">
                            <label for="codigo" class="col-sm-2 control-label">Contrato</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="contrato" placeholder="No. Contrato" name="contrato" value="<?php echo $contrato; ?>">
                            </div>
                            <label for="dpi" class="col-sm-2 control-label">No. IGSS</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="igss" placeholder="Número de IGSS" name="igss" value="<?php echo $igss; ?>">
                            </div>
                            <label for="nit" class="col-sm-2 control-label">No. IRTRA</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="irtra" placeholder="Afiliación IRTRA" name="irtra" value="<?php echo $irtra; ?>">
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
                    <label for="seccion" class="col-sm-2 control-label">Perfil de Aplicacion</label>
                            <div class="col-sm-4">
                                <select id="condominio" class="form-control col-md-12" name="condominio">
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
                        <div class="form-group ">
                            <label for="tipoper" class="col-sm-2 control-label">Tipo de Personal</label>
                            <div class="col-sm-4">
                                <select id="tipoper" class="form-control col-md-12" name="tipoper" >
                                    <?php
                                        $sql2="SELECT  id , nombre
                                                FROM ap_catalogos
                                                WHERE tipo_catalogo = 13 AND institucion = 1
                                                ORDER BY id";
                                        $resp2 = mysql_query($sql2);
                                    ?>
                                    <option value="" selected="selected" >Seleccionar</option>
                                    <?php
                                        while($row2=mysql_fetch_assoc($resp2)){
                                            print '<option value="'.$row2['id'].'" ';
                                            if ($tipoper == $row2['id']) { print ' selected="selected" '; };
                                            print ' >'.utf8_encode($row2['nombre']).'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                            <label for="seccion" class="col-sm-2 control-label">Unidad y Sección</label>
                            <div class="col-sm-4">
                                <select id="seccion" class="form-control col-md-12" name="seccion" >
                                    <?php
                                        $sql2="SELECT s.id,
                                                      s.nombre,
                                                      s.unidad,
                                                      (select u.nombre from ap_unidad u where u.id = s.unidad) as nunidad
                                                FROM ap_seccion s
                                                WHERE 1=1
                                                ORDER BY s.unidad, s.id";
                                        $resp2 = mysql_query($sql2);
                                    ?>
                                    <option value="" selected="selected" >Seleccionar</option>
                                    <?php
                                        while($row2=mysql_fetch_assoc($resp2)){
                                            if ($refa == '') {
                                                echo "<optgroup label='".utf8_encode($row2['nunidad'])."'>";
                                                $refa = $row2['nunidad'];
                                            } elseif ($refa != $row2['nunidad']) {
                                                echo "<optgroup label='".utf8_encode($row2['nunidad'])."'>";
                                                $refa = $row2['nunidad'];
                                            };
                                            print '<option value="'.$row2['id'].'" ';
                                            if ($seccion == $row2['id']) { print ' selected="selected" '; };
                                            print ' >'.utf8_encode($row2['nombre']).'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="actividad" class="col-sm-2 control-label">Actividad</label>
                            <div class="col-sm-4">
                                <select id="actividad" class="form-control col-md-12" name="actividad" >
                                    <?php
                                        $sql2="SELECT  id , nombre
                                                FROM ap_catalogos
                                                WHERE tipo_catalogo = 14 AND institucion = 1
                                                ORDER BY id";
                                        $resp2 = mysql_query($sql2);
                                    ?>
                                    <option value="" selected="selected" >Seleccionar</option>
                                    <?php
                                        while($row2=mysql_fetch_assoc($resp2)){
                                            print '<option value="'.$row2['id'].'" ';
                                            if ($actividad == $row2['id']) { print ' selected="selected" '; };
                                            print ' >'.utf8_encode($row2['nombre']).'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                            <label for="cargo" class="col-sm-2 control-label">Cargo</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="cargo" placeholder="Cargo" name="cargo" value="<?php echo $cargo; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dpi" class="col-sm-2 control-label">Licencia de Conducir</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="licencia" placeholder="Número de Licencia" name="licencia" value="<?php echo $licencia; ?>">
                            </div>
                            <label for="nit" class="col-sm-2 control-label">Tipo</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="licencia_tipo" placeholder="Tipo de Licencia" name="licencia_tipo" value="<?php echo $licencia_tipo; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="calendario1" class="col-sm-2 control-label">Calendario 1</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="calendario1" placeholder="Calendario 1" name="calendario1" value="<?php echo $calendario1; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="calendario2" class="col-sm-2 control-label">Calendario 2</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="calendario2" placeholder="Calendario 2" name="calendario2" value="<?php echo $calendario2; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="salario_base" class="col-sm-2 control-label">Salario Base</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="salario_base" placeholder="Salario base" name="salario_base" value="<?php echo $salario_base; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="bono_incentivo" class="col-sm-2 control-label">Bono Incentivo</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="bono_incentivo" placeholder="Bono incentivo" name="bono_incentivo" value="<?php echo $bono_incentivo; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="bono_14" class="col-sm-2 control-label">Bono 14</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="bono_14" placeholder="Bono 14" name="bono_14" value="<?php echo $bono_14; ?>">
                            </div>
                        </div>
                        <!-- Fin Carpeta 3 -->
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
        </div>
            </div>
        </form>
        <!-- /BOX -->
        </div>
            </div>
    </div>
</div>
<!-- BOX TABS -->
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

<?php include_once 'panel/i_foot.php'; ?>
<script src="../bower_components/datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Inicia Area Scripts Locales -->
    <script type="text/javascript">
        // DatePicker
        $(".datepicker").datepicker({
            format: 'yyyy-mm-dd'
        });
    </script>
<!-- Finaliza Area Scripts Locales -->
