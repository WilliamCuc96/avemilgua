<?php
    //Definición de Variables locales
    global $id; $institucion; $nombre; $nombre_corto;
    
    //Inicialización de Variables locales
    $id = '';
    $institucion = ''; 
    $nombre = ''; 
    $nombre_corto = '';
    
    // Asignar el valor que viene en el request a variables
    if (!$id) { $id  = isset_or('id', '0'); };  
    if (!$institucion) { $institucion  = isset_or('institucion', '0'); };
    if (!$nombre) { $nombre  = isset_or('nombre', ''); }; 
    if (!$nombre_corto) { $nombre_corto  = isset_or('nombre_corto', ''); };
    
?>

<!-- Page wrapper -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><i class="fa fa-building-o"></i> Administración de Unidades</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
                        
<?php

    //Programacion de Funcionalidad para mostrar datos de la pagina
    if ($id == "0" or $id == "") {
		$var_where1 = " ";
                $institucion = $_SESSION['usuario_institucion'];
	} else {
		$var_where1 = " AND u.id = '" . $id . "' ";
	//	$var_where1 = $var_where1 . " AND u.institucion in ('1', '" . $_SESSION['usuario_institucion'] . "')";
    
	    // Consulta SQL
	    // echo " [Where]" . $s_where . "[FIN]";
	    $sql1 = "SELECT u.id,
                            u.nombre, 
                            u.institucion, 
                            u.nombre_corto
			FROM ap_unidad u
                        WHERE 1=1 
			" . $var_where1 . "
			ORDER BY u.id +0";
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
			    $institucion = $row1['institucion']; 
			    $nombre = utf8_encode($row1['nombre']);
                            $nombre_corto = utf8_encode($row1['nombre_corto']);
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

                    <input class="text" name="p" type="hidden" value="sistema/unidades_gestion.php"/>
                    <div class="form-group has-error">
                        <label for="id" class="col-sm-2 control-label">Id (Auto) </label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="id" placeholder="0" name="id" value="<?php echo $id; ?>"  >
                        </div>
                    </div>
                    
<?php  if ($_SESSION['usuario_nivel'] == 1) { ?>
                    <div class="form-group">
                        <label for="institucion" class="col-sm-2 control-label">Institucion</label>
                        <div class="col-sm-10">
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
                    </div>
    <?php
           } else {
                $plvalidarinst = " AND co.institucion = " . $_SESSION['usuario_institucion'] . " ";
                echo "<input class='text' name='institucion' id='institucion' type='hidden' value='" . $_SESSION['usuario_institucion'] . "'/>";
           }; 
    ?>
                    
                    <div class="form-group">
                        <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre" value="<?php echo utf8_encode($nombre); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nombre_corto" class="col-sm-2 control-label">Nombre Corto</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nombre_corto" placeholder="Nombre Corto" name="nombre_corto" value="<?php echo utf8_encode($nombre_corto); ?>">
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