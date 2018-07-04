<?php
 
    //Definición de Variables locales
    global $id; $tipo_catalogo; $institucion; $nombre; $comodin; $nombretipo; $nid;
    
    //Inicialización de Variables locales
    $id = "";
    $nid = "";
    $tipo_catalogo = "";
    $institucion = "";
    $nombre = "";
    $comodin = ""; 
    $nombretipo = "";
    
    // Asignar el valor que viene en el request a variables
    if (!$id) { $id  = isset_or('id', '0'); };  
    if (!$tipo_catalogo) { $tipo_catalogo  = isset_or('idtipo', '0'); };
    if (!$institucion) { $institucion  = isset_or('institucion', $_SESSION['usuario_institucion']); };

?>

<!-- Page wrapper -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><i class=" fa fa-wrench"></i> Administración de Catálogos</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
                        
<?php
    
    //Programacion de Funcionalidad para mostrar datos de la pagina
    if ($id == "0" or $id == "") {
        
	    $var_where1 = " ";
	    // Consulta SQL
	    // echo " [Where]" . $s_where . "[FIN]";
	    $sql1 = "select tc.nombre as nombretipo from ap_tipo_catalogos tc where tc.idtipo = '".$tipo_catalogo."' ";
	    //	echo "<br>[SQL] ".$sql. " [Fin SQL]";
	    $resp1 = mysql_query($sql1);
	    while($row1=mysql_fetch_assoc($resp1)){
		$nombretipo = utf8_encode($row1['nombretipo']);				
            };
            mysql_free_result($resp1);
            $institucion = $_SESSION['usuario_institucion'];

            // Trae id nuevo
            $sql1 = "SELECT max(id)+1 as nid FROM ap_catalogos WHERE tipo_catalogo = '".$tipo_catalogo."' AND institucion = " . $_SESSION['usuario_institucion'] . " ";
            $resp1 = mysql_query($sql1);
            while($row1=mysql_fetch_assoc($resp1)){ $nid = $row1['nid']; };
            mysql_free_result($resp1);
            if (!$nid) { $nid = 1; };
	} else {
		$var_where1 = " AND c.id = '" . $id . "' ";
		$var_where1 = $var_where1 . " AND c.tipo_catalogo = '" . $tipo_catalogo . "' ";
		$var_where1 = $var_where1 . " AND c.institucion = '" . $institucion . "' ";
    
	    // Consulta SQL
	    // echo " [Where]" . $s_where . "[FIN]";
	    $sql1 = "SELECT c.id,
                            c.tipo_catalogo,
                            c.institucion,
                            c.nombre,
                            c.comodin,
                        (select tc.nombre from ap_tipo_catalogos tc where tc.idtipo = c.tipo_catalogo) as nombretipo
                from ap_catalogos c
                WHERE 1=1 
                " . $var_where1 . "
                order by id +0";
	    	//echo "<br>[SQL] ".$sql1. " [Fin SQL]";
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
				$tipo_catalogo = $row1['tipo_catalogo'];
				$institucion = $row1['institucion'];
				$nombre = utf8_encode($row1['nombre']);
				$comodin = utf8_encode($row1['comodin']);
				$nombretipo = utf8_encode($row1['nombretipo']);				
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
                        <i class="fa fa-info-circle"></i> Ingrese en el siguiente formulario toda la información del item del catálogo de <?php echo $nombretipo;?>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" action="index.php" method="post">
                        <!-- Inicia Formulario (Peledahe) -->
                        
                        
                  <input class="text" name="p" type="hidden" value="sistema/catalogos_gestion.php"/>
                  <div class="form-group has-warning">
                        <label for="id" class="col-sm-2 control-label">Id</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="id" placeholder="0" name="id" value="<?php if (!$nid) { echo $id; } else { echo $nid; }; ?>"  >
                        </div>
                  </div>
                  <div class="form-group has-warning">
                        <label for="tipo_catalogo" class="col-sm-2 control-label">Tipo de Catálogo</label>
                        <div class="col-sm-10">
                            <select id="tipo_catalogo" class="form-control col-md-12" name="tipo_catalogo" >
                               <?php
                                $sql2="SELECT  idtipo , nombre
                                            FROM ap_tipo_catalogos
                                       WHERE 1=1 ";
                                        if ($_SESSION['usuario_nivel'] != 1) {
                                                    $sql2 = $sql2 . " AND ap_institucion in ('1', '" . $_SESSION['usuario_institucion'] . "') ";
                                        };
                                            $sql2 = $sql2 . "	 ORDER BY idtipo";
                                $resp2 = mysql_query($sql2);
                               ?>
                               <option value="" selected="selected" >Seleccionar</option>
                               <?php 
                               while($row2=mysql_fetch_assoc($resp2)){
                                    print '<option value="'.$row2['idtipo'].'" ';
                                    if ($tipo_catalogo == $row2['idtipo']) { print ' selected="selected" '; };
                                    print ' >'.utf8_encode($row2['nombre']).'</option>';
                               }
                               ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group has-warning">
                        <label for="institucion" class="col-sm-2 control-label">Institución</label>
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
                               };
                               ?>
                            </select>
                            <?php // echo $sql2 . " - " . $_SESSION['usuario_nivel']; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="nombre" placeholder="Ítem de Catálogo" name="nombre" value="<?php echo $nombre; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="comodin" class="col-sm-2 control-label">Comodín</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="comodin" placeholder="Valor Comodín" name="comodin" value="<?php echo $comodin; ?>">
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