<?php
//Definición de Variables locales *
    global $id; $nombre; $nombre2; $apellido; $apellido2; $apellido3; $grado_militar; $numero_catalogo; $dpi; $direccion; $municipio; $correo; $telefono; $cantidad;

//Inicialización de Variables locales *
    // datos_personales
    $id = '';
    $nombre = '';
    $nombre2 = '';
    $apellido = '';
    $apellido2 = '';
    $apellido3 = '';
    $grado_militar = '';
    $numero_catalogo = '';
    $dpi = '';
    $direccion = '';
    $municipio = '';
    $correo = '';
    $telefono = '';
    $cantidad = '';

    // Asignar el valor que viene en el request a variables *
    if (!$id) { $id  = isset_or('id', '0'); };
    if (!$nombre) { $nombre = isset_or('nombre', ''); };
    if (!$nombre2) { $nombre2 = isset_or('nombre2', ''); };
    if (!$apellido) { $apellido = isset_or('apellido', ''); };
    if (!$apellido2) { $apellido2 = isset_or('apellido2', ''); };
    if (!$apellido3) { $apellido3 = isset_or('apellido3', ''); };
    if (!$grado_militar) { $grado_militar = isset_or('grado_militar', ''); };
    if (!$numero_catalogo) { $numero_catalogo = isset_or('numero_catalogo', ''); };
    if (!$dpi) { $dpi = isset_or('dpi', ''); };
    if (!$direccion) { $direccion = isset_or('direccion', ''); };
    if (!$municipio) { $municipio = isset_or('municipio', ''); };
    if (!$correo) { $correo = isset_or('correo', ''); };
    if (!$telefono) { $telefono = isset_or('telefono', ''); };
    if (!$cantidad) { $cantidad = isset_or('cantidad', ''); };
?>
<!-- Page wrapper -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><i class="fa fa-search"></i> Nuevo Ingreso IPM</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
<?php
    if ($id == "0" or $id == "") {
        $var_where1 = " ";
    } else {
        $var_where1 = " AND a.id = '" . $id . "' ";
        $sql1 = "SELECT a.id,
                        a.nombre,
                        a.nombre2,
                        a.apellido,
                        a.apellido2,
                        a.apellido3,
                        a.dpi,
                        a.grado_militar,
                        a.numero_catalogo,
                        a.direccion,
                        a.municipio,
                        a.correo,
                        a.telefono,
                        a.cantidad
                        FROM av_datos_ipm a
                        WHERE 1 = 1 ". $var_where1 ." ";

        $resp1 = mysql_query($sql1);

        if (!$resp1) { // Error en la ejecución del query*
                    echo "<div class='alert alert-block alert-danger fade in'>
                            <a class='close' data-dismiss='alert' href='#' aria-hidden='true'>&times;</a>
                            <p><h4><i class='fa fa-exclamation-circle'></i> Error </h4> No pudo ejecutarse satisfactoriamente la consulta (".$sql1.") en la BD: " . mysql_error() . "</p>
                          </div>";
                    //exit*
        } elseif (mysql_num_rows($resp1) == 0) { // búsqueda satisfactoria, 0 registros encontrados*
                    echo "<div class='alert alert-block alert-warning fade in'>
                    <a class='close' data-dismiss='alert' href='#' aria-hidden='true'>&times;</a>
                    <p><h4><i class='fa fa-exclamation-circle'></i> Atenci&oacute;n</h4> No se encontraron registros en su b&uacute;squeda!</p></div>";
                    //  exit*
        } else { // búsqueda satisfactoria, de 1 a mas registros encontrados*
            // Asignación de valores en variables*
            while($row = mysql_fetch_assoc($resp1)) {
                //$id = $row['id'];
                $nombre = utf8_encode($row['nombre']);
                $nombre2 = utf8_encode($row['nombre2']);
                $apellido = utf8_encode($row['apellido']);
                $apellido2 = utf8_encode($row['apellido2']);
                $apellido3 = utf8_encode($row['apellido3']);
                $grado_militar = utf8_encode($row['grado_militar']);
                $numero_catalogo = utf8_encode($row['numero_catalogo']);
                $dpi = $row['dpi'];
                $direccion = utf8_encode($row['direccion']);
                $municipio = $row['municipio'];
                $telefono = utf8_encode($row['telefono']);
                $correo = utf8_encode($row['correo']);
                $cantidad = $row['cantidad'];
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
                        <i class="fa fa-info-circle"></i> Ingrese en el siguiente formulario toda la información del veterano
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" action="index.php" method="get">
<!-- Inicia Formulario (Peledahe) -->
                            <!-- -->
                            <input class="text" name="p" type="hidden" value="usuarios/av_ipm_gestion.php"/>
                            <!-- -->
                             <!-- Nombres -->
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="id" placeholder="0" name="id" value="<?php echo $id; ?>" readonly>
                            <label for="nombres" class="col-sm-2 control-label">Nombres</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="nombre" placeholder="1er. Nombre" name="nombre" value="<?php echo $nombre; ?>">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="nombre2" placeholder="2do. Nombre" name="nombre2" value="<?php echo $nombre2; ?>">
                            </div>
                        </div>
                         <!-- Apellidos -->
                        <div class="form-group">
                            <label for="apellidos" class="col-sm-2 control-label">Apellidos</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="apellido" placeholder="1er. Apellido" name="apellido" value="<?php echo $apellido; ?>">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="apellido2" placeholder="2do. Apellido" name="apellido2" value="<?php echo $apellido2; ?>">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="apellido3" placeholder="Apellido de Casada" name="apellido3" value="<?php echo $apellido3; ?>">
                            </div>
                        </div>
                        <!-- Grado Militar -->
                        <div class="form-group">
                            <label for="grado_militar" class="col-sm-2 control-label">Grado Militar</label>
                            <div class="col-sm-3">
                                <select id="grado_militar" class="form-control col-md-12" name="grado_militar" >
                                    <?php
                                        $sql2="SELECT  id, nombre
                                                FROM ap_catalogos
                                                WHERE tipo_catalogo = 39 AND institucion = 1
                                                ORDER BY id";
                                        $resp2 = mysql_query($sql2);
                                    ?>
                                    <option value="" selected="selected" >Seleccionar</option>
                                    <?php
                                        while($row2=mysql_fetch_assoc($resp2)){
                                            print '<option value="'.$row2['id'].'" ';
                                            if ($grado_militar == $row2['id']) { print ' selected="selected" '; };
                                            print ' >'.utf8_encode($row2['nombre']).'</option>';
                                        }
                                    ?>
                                </select>
                            </div>

                            <label for="numero_catalogo" class="col-sm-2 control-label">Catálogo</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="numero_catalogo" placeholder="Número de Catálogo" name="numero_catalogo" value="<?php echo $numero_catalogo; ?>">
                            </div>
                        </div>

                        <div class="form-group">

                            <label for="direccion" class="col-sm-2 control-label">Dirección</label>
                            <div class="col-sm-4">
                                <textarea class="form-control" rows="2" id="direccion" placeholder="" name="direccion"><?php echo $direccion; ?></textarea>
                            </div>

                            <label for="municipio" class="col-sm-1 control-label">Vecindad</label>
                            <div class="col-sm-4">
                                <select id="municipio" class="form-control col-md-12" name="municipio" >
                                    <?php
                                        $sql2="SELECT   a.id,
                                                        a.nombre,
                                                        a.departamento_id,
                                                        (select b.departamento from ap_municipios b where b.departamento_id = a.departamento_id LIMIT 1) as nunidad
                                                FROM ap_municipios a
                                                WHERE 1=1
                                                ORDER BY a.departamento_id, a.id";
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
                                            if ($municipio == $row2['id']) { print ' selected="selected" '; };
                                            print ' >'.utf8_encode($row2['nombre']).'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <!-- Correo/Telefono -->
                        <div class="form-group">
                            <label for="correo" class="col-sm-2 control-label">Correo Electrónico</label>
                            <div class="col-sm-4">
                                <input type="email" class="form-control" id="correo" placeholder="Correo" name="correo" value="<?php echo $correo; ?>">
                            </div>
                            <label for="celular" class="col-sm-1 control-label">Teléfono</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="telefono" placeholder="Teléfono" name="telefono" value="<?php echo $telefono; ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="dpi" class="col-sm-2 control-label">D.P.I.</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="dpi" placeholder="Número de D.P.I." name="dpi" value="<?php echo $dpi; ?>">
                            </div>

                            <label for="cantidad" class="col-sm-2 control-label">Cantidad</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="cantidad" placeholder="" name="cantidad" value="<?php echo $cantidad; ?>">
                            </div>
                        </div>

                        <!----------------------------------------------------------------------------------------->
                        <br>
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
                        <!--------------------------------------------------------------------------------------------->
<!-- /BOX * -->
        </div>
            </div>
    </div>
</div>
<!-- BOX TABS * -->
        <!-- /.row * -->
    </div>
    <!-- /.container-fluid * -->
</div>
<!-- /#page-wrapper -->