<?php
    
    //Definición de Variables locales
    global $idtipo; $nombre; $institucion;
    
    //Inicialización de Variables locales
    $nombre = ""; 
    $institucion = "";
    
    // Asignar el valor que viene en el request a variables
    if (!$idtipo) { $idtipo  = isset_or('idtipo', '0'); };  // Asigna el valor que viene en el request

?>

<!-- Page wrapper -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><i class=" fa fa-wrench"></i> Administración de Tipos de Catálogo</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
                        
<?php
    
    //Programacion de Funcionalidad para mostrar datos de la pagina
    if ($idtipo == "0" or $idtipo == "") {
		$var_where1 = " ";
                $institucion = $_SESSION['usuario_institucion'];
	} else {
		$var_where1 = " AND tc.idtipo = '" . $idtipo . "' ";
		$var_where1 = $var_where1 . " AND tc.institucion in ('1', '" . $_SESSION['usuario_institucion'] . "')";
    
	    // Consulta SQL
	    // echo " [Where]" . $s_where . "[FIN]";
	    $sql1 = "SELECT tc.idtipo,
			    		tc.nombre,
			    		tc.institucion,
			    	    (select i.nombre from ap_instituciones i where i.id = tc.institucion) as ninstitucion
			    from ap_tipo_catalogos tc
			    WHERE 1=1 
			    " . $var_where1 . "
			    order by idtipo +0";
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
				$nombre = utf8_encode($row1['nombre']);
				$institucion = $row1['institucion'];				
			};
			mysql_free_result($resp1);
	    }; // toma en cuenta en el contenido el html
	};
        
?>
        <!-- BOX TABS (peledahe) -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-info-circle"></i> Ingrese en el siguiente formulario toda la información de tipo de catálogo
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" action="index.php" method="post">
                        <!-- Inicia Formulario (Peledahe) -->
                        
                              <input class="text" name="p" type="hidden" value="sistema/tipocatalogos_gestion.php"/>
                              <div class="form-group has-error ">
                                    <label for="idtipo" class="col-sm-2 control-label">Id (Auto) </label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="idtipo" placeholder="0" name="idtipo" value="<?php echo $idtipo; ?>"  >
                                    </div>
                              </div>
                              <div class="form-group">
                                    <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="nombre" placeholder="Tipo de Catálogo" name="nombre" value="<?php echo $nombre; ?>">
                                    </div>
                              </div>
                              <div class="form-group has-warning">
                                    <label for="inputPassword3" class="col-sm-2 control-label">Institución</label>
                                    <div class="col-sm-10">
                                            <select id="institucion" class="form-control col-md-12" name="institucion" >
                       <?php
                       $sql3="SELECT  id , nombre, estatus
                                                             FROM ap_instituciones
                                                            WHERE estatus = 1";
                                                if ($_SESSION['usuario_nivel'] == 1) {
                                                    $sql3 = $sql3 . "";
                                                } else {
                                                            $sql3 = $sql3 . "  AND id in ('1', '" . $_SESSION['usuario_institucion'] . "') ";
                                                };
                                                    $sql3 = $sql3 . "  	 ORDER BY id";
                        $resp3 = mysql_query($sql3);
                       ?>
                       <option value="" selected="selected" >Seleccionar</option>
                       <?php 
                        while($row3=mysql_fetch_assoc($resp3)){
                            print '<option value="'.$row3['id'].'" ';
                            if ($institucion == $row3['id']) { print ' selected="selected" '; };
                            print ' >'.utf8_encode($row3['nombre']).'</option>';
                       }
                       ?>
                    </select>
                                    </div>
                              </div>
                              <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">

                                    <?php if ($idtipo == "0" or $idtipo == "") { ?>
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