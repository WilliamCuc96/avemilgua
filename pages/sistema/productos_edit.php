<?php

    //Definición de Variables locales
    global $id; $nombre; $nombre_corto; $tipo; $precio; $estatus; $institucion; 
    global $fecha_precio; $usuario_precio; $precio_fijo; $condominio; $moneda;
    global $incluyecorte; $descripcion_lg;
    
    //Inicialización de Variables locales
    $id = '';
    $nombre = ''; 
    $nombre_corto = ''; 
    $tipo = ''; 
    $precio = ''; 
    $estatus = ''; 
    $institucion = '';
    $condominio = '';
    $moneda = '';
    $fecha_precio = ''; 
    $usuario_precio = ''; 
    $precio_fijo = '';
    $incluyecorte = ''; 
    $descripcion_lg = '';
    
    // Asignar el valor que viene en el request a variables
    if (!$id) { $id  = isset_or('id', '0'); };
    if (!$nombre) { $nombre  = isset_or('nombre', ''); }; 
    if (!$nombre_corto) { $nombre_corto  = isset_or('nombre_corto', ''); }; 
    if (!$tipo) { $tipo  = isset_or('tipo', '0'); }; 
    if (!$estatus) { $estatus  = isset_or('estatus', '0'); }; 
    if (!$usuario_precio) { $usuario_precio  = isset_or('usuario_precio', ''); }; 
    if (!$precio_fijo) { $precio_fijo  = isset_or('precio_fijo', '0'); }; 
    if (!$institucion) { $institucion  = isset_or('institucion', '0'); }; 
    if (!$condominio) { $condominio  = isset_or('condominio', '0'); };
    if (!$moneda) { $moneda  = isset_or('moneda', '0'); };
    if (!$precio) { $precio  = isset_or('precio', '0'); }; 
    if (!$fecha_precio) { $fecha_precio  = isset_or('fecha_precio', ''); };
    
?>

<!-- Page wrapper -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><i class="fa fa-gift"></i> Administración de Productos y Servicios</h1>
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
                $tipo = 1;
                $precio_fijo = 1;
	} else {
		$var_where1 = " AND p.id = '" . $id . "' ";
	//	$var_where1 = $var_where1 . " AND u.institucion in ('1', '" . $_SESSION['usuario_institucion'] . "')";
    
	    // Consulta SQL
	    // echo " [Where]" . $s_where . "[FIN]";
	    $sql1 = "SELECT p.id,
                            p.nombre, 
                            p.nombre_corto, 
                            p.tipo, 
                            p.precio, 
                            p.estatus, 
                            p.institucion,
                            p.condominio,
                            p.moneda,
                            p.fecha_precio, 
                            p.usuario_precio, 
                            p.precio_fijo,
                            p.incluyecorte, 
                            p.descripcion_lg
			FROM ig_productos p
                        WHERE 1=1 
			" . $var_where1 . "
			ORDER BY p.id +0";
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
                            $nombre_corto = $row1['nombre_corto']; 
                            $tipo = $row1['tipo']; 
                            $precio = $row1['precio']; 
                            $estatus = $row1['estatus']; 
                            $institucion = $row1['institucion']; 
                            $condominio = $row1['condominio'];
                            $moneda = $row1['moneda'];
                            $fecha_precio = $row1['fecha_precio']; 
                            $usuario_precio = $row1['usuario_precio']; 
                            $precio_fijo = $row1['precio_fijo'];
                            $incluyecorte = $row1['incluyecorte'];
                            $descripcion_lg = $row1['descripcion_lg'];
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
                        <i class="fa fa-info-circle"></i> Ingrese en el siguiente formulario toda la información del producto o servicios
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" action="index.php" method="post">
                        <!-- Inicia Formulario (Peledahe) -->
                        
                    <input class="text" name="p" type="hidden" value="sistema/productos_gestion.php"/>
                    <div class="form-group has-error">
                        <label for="id" class="col-sm-2 control-label">Id (Auto) </label>
                        <div class="col-sm-1">
                            <input type="text" class="form-control" id="id" placeholder="0" name="id" value="<?php echo $id; ?>"  >
                        </div>
                        <label for="tipo" class="col-sm-1 control-label">Tipo</label>
                        <div class="col-sm-2">
                            <select id="tipo" class="form-control col-md-12" name="tipo" >
                                <?php
                                    $sql2="SELECT  id , nombre
                                                FROM ap_catalogos
                                                WHERE tipo_catalogo = 10 AND institucion = 1 
                                                ORDER BY id";
                                    $resp2 = mysql_query($sql2);
                                ?>
                                <option value="" selected="selected" >Seleccionar</option>
                                <?php 
                                    while($row2=mysql_fetch_assoc($resp2)){
                                        print '<option value="'.$row2['id'].'" ';
                                        if ($tipo == $row2['id']) { print ' selected="selected" '; };
                                        print ' >'.utf8_encode($row2['nombre']).'</option>';
                                    };
                                ?>
                            </select>
                        </div>
                        <label for="estatus" class="col-sm-2 control-label">Estatus</label>
                        <div class="col-sm-2">
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
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre" value="<?php echo utf8_encode($nombre); ?>">
                        </div>
                        <label for="nombre_corto" class="col-sm-2 control-label">Nombre Corto</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="nombre_corto" placeholder="Nombre Corto" name="nombre_corto" value="<?php echo utf8_encode($nombre_corto); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="moneda" class="col-sm-2 control-label">Moneda</label>
                        <div class="col-sm-1">
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
                        <label for="precio" class="col-sm-1 control-label">Precio</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="precio" placeholder="Precio Q." name="precio" value="<?php echo utf8_encode($precio); ?>">
                        </div>
                        <label for="precio_fijo" class="col-sm-2 control-label">Es Precio Fijo?</label>
                        <div class="col-sm-2">
                            <select id="precio_fijo" class="form-control col-md-12" name="precio_fijo" >
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
                                        if ($precio_fijo == $row2['id']) { print ' selected="selected" '; };
                                        print ' >'.utf8_encode($row2['comodin']).'</option>';
                                    };
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="incluyecorte" class="col-sm-2 control-label">Incluido en Corte?</label>
                        <div class="col-sm-2">
                            <select id="incluyecorte" class="form-control col-md-12" name="incluyecorte" >
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
                                        if ($incluyecorte == $row2['id']) { print ' selected="selected" '; };
                                        print ' >'.utf8_encode($row2['comodin']).'</option>';
                                    };
                                ?>
                            </select>
                        </div>
                        <label for="descripcion_lg" class="col-sm-2 control-label">Descripcion Larga</label>
                        <div class="col-sm-6">
                            <textarea rows="3" cols="5" name="descripcion_lg" id="descripcion_lg" class="form-control"><?php echo utf8_encode($descripcion_lg); ?></textarea>
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
                        <label for="fecha_precio" class="col-sm-2 control-label">Fecha</label>
                        <div class="col-sm-4">
                            <input type="text" disabled="" class="form-control" id="fecha_precio" placeholder="Fecha (Automático)" name="fecha_precio" value="<?php echo utf8_encode($fecha_precio); ?>">
                        </div>
                        <label for="usuario_precio" class="col-sm-2 control-label">Usuario</label>
                        <div class="col-sm-4">
                            <input type="text" disabled="" class="form-control" id="usuario_precio" placeholder="Usuario (Automático)" name="usuario_precio" value="<?php echo utf8_encode($usuario_precio); ?>">
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
