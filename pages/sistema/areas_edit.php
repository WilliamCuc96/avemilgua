<?php

    //Definición de Variables locales
    //global $id;
    global $id; $institucion; $condominio; $nombre; $lugar; $capacidad; 
    global $caracteristicas; $observaciones; $color; $colortexto; $estatus;  $valor; $esfijo; $productoid;
    
    //Inicialización de Variables locales
    //$id = '';
    $id = '';
        
    // Asignar el valor que viene en el request a variables
    //if (!$id) { $id  = isset_or('id', '0'); };
    if (!$id) { $id  = isset_or('id', ''); }; 
        
   ?>

<!-- Page wrapper -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><i class="fa fa-gift"></i> Administración de Áreas Sociales</h1>
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
	$var_where1 = " AND id = '" . $id . "' ";
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
                    a.productoid,
                    (select f.comodin from ap_catalogos f where f.id = a.esfijo and f.tipo_catalogo = 3) as nesfijo,
                    (select t.nombre from ap_catalogos t where t.id = estatus and t.tipo_catalogo = 3) as nestatus
                FROM ig_areas a
		WHERE 1=1" . $var_where1 . "
		ORDER BY id +0";
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
	        //	exit;
	    //exit;
	} else { // búsqueda satisfactoria, de 1 a mas registros encontrados
            // Asignación de valores en variables
            while($row1=mysql_fetch_assoc($resp1)){
                $id                 = $row1['id'];
                $institucion        = $row1['institucion']; 
                $condominio         = $row1['condominio']; 
                $nombre             = $row1['nombre']; 
                $lugar              = $row1['lugar']; 
                $capacidad          = $row1['capacidad'];
                $caracteristicas    = $row1['caracteristicas'];
                $observaciones      = $row1['observaciones'];
                $color              = $row1['color'];
                $colortexto         = $row1['colortexto'];
                $estatus            = $row1['estatus'];
                $valor              = $row1['valor'];
                $esfijo             = $row1['esfijo'];
                $productoid         = $row1['productoid'];
            };
            mysql_free_result($resp1);
	}; // toma en cuenta en el contenido el html
    };
?>

<!-- CONTENIDO DE PAGINA -->

 <!-- BOX TABS (Peledahe) -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-info-circle"></i> Ingrese en el siguiente formulario toda la información del Área Social
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" action="index.php" method="post">
                        <!-- Inicia Formulario (Peledahe) -->
                        
                    <input class="text" name="p" type="hidden" value="sistema/areas_gestion.php"/>
                    <div class="form-group ">
                        <label for="id" class="col-sm-2 control-label">ID</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="id2" placeholder="Id" name="id2" value="<?php echo utf8_encode($id); ?>" disabled="">
                            <input class="text" name="id" type="hidden" value="<?php echo utf8_encode($id); ?>"/>
                        </div>
                        <label for="estatus" class="col-sm-2 control-label">Estatus</label>
                        <div class="col-sm-4">
                            <select id="estatus" class="form-control col-md-12" name="estatus" >
                                    <?php
                                        $sql2="SELECT  id,nombre
                                                    FROM ap_catalogos
                                                    WHERE tipo_catalogo = 3 
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
                        <label for="lugar" class="col-sm-2 control-label">Lugar</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="lugar" placeholder="Lugar" name="lugar" value="<?php echo utf8_encode($lugar); ?>">
                        </div>
                    </div>    
                    <div class="form-group">
                        <label for="capacidad" class="col-sm-2 control-label">Capacidad de Personas</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="capacidad" placeholder="Capacidad" name="capacidad" value="<?php echo utf8_encode($capacidad); ?>">
                        </div>
                        <label for="color" class="col-sm-2 control-label">Color de Fondo</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control colorpicker" data-color-format="hex" id="color" name="color" value="<?php echo utf8_encode($color); ?>">
                        </div>
                        <label for="colortexto" class="col-sm-2 control-label">Color de Texto</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control colorpicker" data-color-format="hex"  id="colortexto" placeholder="Color" name="colortexto" value="<?php echo utf8_encode($colortexto); ?>">
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
                        <label for="caracteristicas" class="col-sm-2 control-label">Caracteristicas</label>
                        <div class="col-sm-10">
                            <textarea id="caracteristicas" name="caracteristicas" class="form-control" rows="3"><?php echo utf8_encode($caracteristicas); ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="observaciones" class="col-sm-2 control-label">Observaciones</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="observaciones" placeholder="Observaciones" name="observaciones" value="<?php echo utf8_encode($observaciones); ?>">
                        </div>
                    </div>  
                    <div class="form-group">
                        <label for="valor" class="col-sm-2 control-label">Valor</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="valor" placeholder="0.00" name="valor" value="<?php echo utf8_encode($valor); ?>">
                        </div>
                        <label for="esfijo" class="col-sm-2 control-label">Es Valor Fijo?</label>
                        <div class="col-sm-2">
                            <select id="esfijo" class="form-control col-md-12" name="esfijo" >
                                    <?php
                                        $sql2="SELECT  id,nombre,comodin
                                                    FROM ap_catalogos
                                                    WHERE tipo_catalogo = 3 
                                                    ORDER BY id";
                                        $resp2 = mysql_query($sql2);
                                    ?>
                                    <option value="" selected="selected" >Seleccionar</option>
                                    <?php 
                                        while($row2=mysql_fetch_assoc($resp2)){
                                            print '<option value="'.$row2['id'].'" ';
                                            if ($esfijo == $row2['id']) { print ' selected="selected" '; };
                                            print ' >'.utf8_encode($row2['comodin']).'</option>';
                                        };
                                    ?>
                            </select>
                        </div>
                        <label for="productoid" class="col-sm-2 control-label">Id Producto</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="productoid" placeholder="Código de producto" name="productoid" value="<?php echo utf8_encode($productoid); ?>">
                        </div>
                    </div>
                    <center>
                        <div class="btn-group">
                            <?php if ($id == "0" or $id == "") { ?>
                                <button type="submit" class="btn btn-success" value="Insertar" name="btn" >Agregar</button>
                            <?php } else { ?>
                                <button type="submit" class="btn btn-warning" value="Actualizar" name="btn" >Modificar</button>
                                <button type="submit" class="btn btn-danger" value="Borrar" name="btn" >Borrar</button>
                            <?php }; ?>  
                            <button type="reset" class="btn btn-inverse" value="Cancelar">Cancelar</button>
                        </div>
                    </center>
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
