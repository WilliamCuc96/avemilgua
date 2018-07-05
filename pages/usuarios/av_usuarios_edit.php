<script type="text/javascript" src="https://dme0ih8comzn4.cloudfront.net/imaging/v3/editor.js"></script>
<!-- PHP -->
<?php

//Definición de Variables locales *
    // av_datos_personales
    global $id; $codigo; $nombre; $nombre2; $apellido; $apellido2; $apellido3; $dpi;$genero; $fecha_nacimiento;$vecindad; $estado_civil; $profesion; $direccion; $telefono; $correo; $lugar_nacimiento; $nit; $beneficiario; $departamento_id; $foto; //$nacionalidad;

    // av_datos_servicios
    global $grado_militar; $compania; $puesto; $fecha_alta; $fecha_baja; $motivo_baja; $computo_servicios; $sueldo_mensual; $zona_militar;

//Inicialización de Variables locales *
    // datos_personales
    $id = '';
    $codigo = '';
    $nombre = '';
    $nombre2 = '';
    $apellido = '';
    $apellido2 = '';
    $apellido3 = '';
    $dpi = '';
    $foto = '';
    // $nacionalidad = '';
    $genero = '';
    $beneficiario = '';
    $fecha_nacimiento = '';
    $lugar_nacimiento = '';
    $vecindad = '';
    $estado_civil = '';
    $profesion = '';
    $direccion = '';
    $telefono = '';
    $correo = '';
    $nit = '';
    $departamento_id = '';

    // datos_servicios
    $grado_militar = '';
    $compania = '';
    $puesto = '';
    $fecha_alta = '';
    $fecha_baja = '';
    $motivo_baja = '';
    $computo_servicios = '';
    $sueldo_mensual = '';
    $zona_militar = '';

    // Asignar el valor que viene en el request a variables *
    if (!$id) { $id  = isset_or('id', '0'); };
    if (!$codigo) { $codigo  = isset_or('codigo', ''); };
    if (!$nombre) { $nombre = isset_or('nombre', ''); };
    if (!$nombre2) { $nombre2 = isset_or('nombre2', ''); };
    if (!$apellido) { $apellido = isset_or('apellido', ''); };
    if (!$apellido2) { $apellido2 = isset_or('apellido2', ''); };
    if (!$apellido3) { $apellido3 = isset_or('apellido3', ''); };
    if (!$dpi) { $dpi = isset_or('dpi', ''); };
    if (!$foto) { $foto = isset_or('foto', ''); };
    //if (!$nacionalidad) { $nacionalidad = isset_or('nacionalidad', ''); };
    if (!$genero) { $genero = isset_or('genero', ''); };
    if (!$beneficiario) { $beneficiario = isset_or('beneficiario', ''); };
    if (!$fecha_nacimiento) { $fecha_nacimiento = isset_or('fecha_nacimiento', ''); };
    if (!$lugar_nacimiento) { $lugar_nacimiento = isset_or('lugar_nacimiento', ''); };
    if (!$vecindad) { $vecindad = isset_or('vecindad', ''); };
    if (!$estado_civil) { $estado_civil = isset_or('estado_civil', ''); };
    if (!$profesion) { $profesion = isset_or('profesion', ''); };
    if (!$direccion) { $direccion = isset_or('direccion', ''); };
    if (!$telefono) { $telefono = isset_or('telefono', ''); };
    if (!$correo) { $correo = isset_or('correo', ''); };
    if (!$nit) { $nit = isset_or('nit', ''); };
    if (!$departamento_id) { $departamento_id = isset_or('departamento_id', ''); };

    if (!$grado_militar) { $grado_militar = isset_or('grado_militar', ''); };
    if (!$compania) { $compania = isset_or('compania', ''); };
    if (!$puesto) { $puesto = isset_or('puesto', ''); };
    if (!$fecha_alta) { $fecha_alta = isset_or('fecha_alta', ''); };
    if (!$motivo_baja) { $motivo_baja = isset_or('motivo_baja', ''); };
    if (!$computo_servicios) { $computo_servicios = isset_or('computo_servicios', ''); };
    if (!$sueldo_mensual) { $sueldo_mensual = isset_or('sueldo_mensual', ''); };
    if (!$zona_militar) { $zona_militar = isset_or('zona_militar', ''); };

?>

<!-- ******************************************************* -->

<!-- HTML -->

<!-- Page Content * -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><i class="fa fa-user"></i> Administración de Veteranos</h1>
            </div>
            <!-- /.col-lg-12 * -->
        </div>
        <!-- /.row * -->

<!-- PHP -->
<?php
    if ($id == "0" or $id == "") {
        $var_where1 = " ";
    } else {
        $var_where1 = " AND a.id = '" . $id . "' ";
        $sql1 = "SELECT a.id, a.codigo, a.nombre, a.nombre2, a.apellido, a.apellido2, a.apellido3, a.dpi, a.genero, a.fecha_nacimiento, a.lugar_nacimiento, a.vecindad, a.estado_civil, a.profesion, a.direccion, a.telefono, a.correo, a.nit, a.foto, b.grado_militar, b.compania, b.puesto, b.fecha_alta, b.fecha_baja, b.motivo_baja, b.computo_servicios, b.sueldo_mensual, b.zona_militar FROM av_datos_personales a, av_datos_servicios b WHERE a.id = b.id ". $var_where1 ." ";

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
                $codigo = utf8_encode($row['codigo']);
                $nombre = utf8_encode($row['nombre']);
                $nombre2 = utf8_encode($row['nombre2']);
                $apellido = utf8_encode($row['apellido']);
                $apellido2 = utf8_encode($row['apellido2']);
                $apellido3 = utf8_encode($row['apellido3']);
                $dpi = $row['dpi'];
                $foto = $row['foto'];
                //$nacionalidad = utf8_encode($row['nacionalidad']);
                $genero = $row['genero'];
                $fecha_nacimiento = $row['fecha_nacimiento'];
                $lugar_nacimiento = $row['lugar_nacimiento'];
                $vecindad = $row['vecindad'];
                $estado_civil = $row['estado_civil'];
                $profesion = $row['profesion'];
                $direccion = utf8_encode($row['direccion']);
                $telefono = utf8_encode($row['telefono']);
                $correo = utf8_encode($row['correo']);
                $nit = $row['nit'];
                /* ***************** */
                $grado_militar = utf8_encode($row['grado_militar']);
                $compania = utf8_encode($row['compania']);
                $puesto = utf8_encode($row['puesto']);
                $fecha_alta = utf8_encode($row['fecha_alta']);
                $fecha_baja = utf8_encode($row['fecha_baja']);
                $motivo_baja = utf8_encode($row['motivo_baja']);
                $computo_servicios = utf8_encode($row['computo_servicios']);
                $sueldo_mensual = $row['sueldo_mensual'];
                $zona_militar = utf8_encode($row['zona_militar']);
            };
            mysql_free_result($resp1);
        }; // toma en cuenta en el contenido el html
    };
?>
        <!-- BOX TABS * -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-info-circle"></i> Ingrese en el siguiente formulario toda la información del veterano
                    </div>
                        <div class="panel-body">
                        <form class="form-horizontal" role="form" action="index.php" method="post" enctype="multipart/form-data">
                        <div class="tabbable header-tabs">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#box_tab1" data-toggle="tab"><i class="fa fa-user"></i> <span class="hidden-inline-mobile">Personal</span></a></li>
                    <li><a href="#box_tab2" data-toggle="tab"><i class="fa fa-camera"></i> <span class="hidden-inline-mobile">Fotografía</span></a></li>
                    <li><a href="#box_tab3" data-toggle="tab"><i class="fa fa-shield"></i> <span class="hidden-inline-mobile">Servicio</span></a></li>
                    <li><a href="#box_tab4" data-toggle="tab"><i class="fa fa-file"></i> <span class="hidden-inline-mobile">Subir Archivos</span></a></li>
                </ul>
                <div class="tab-content">
                <br>
                    <!----------------------------------------------------------------------------------------------------------------->
                    <!-- Carpeta 1* -->
                     <div class="tab-pane fade in active" id="box_tab1">
                        <input class="text" name="p" type="hidden" value="usuarios/av_usuarios_gestion.php"/>
                         <!-- ID/Codigo/DPI -->
                        <div class="form-group has-error">
                            <input type="hidden" class="form-control" id="id" placeholder="0" name="id" value="<?php echo $id; ?>" readonly>
                            <label for="codigo" class="col-sm-2 control-label">Código</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="codigo" placeholder="Código" name="codigo" value="<?php echo $codigo; ?>">
                            </div>

                            <label for="dpi" class="col-sm-1 control-label">D.P.I.</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="dpi" placeholder="Número de D.P.I." name="dpi" value="<?php echo $dpi; ?>">
                            </div>

                            <label for="nit" class="col-sm-1 control-label">N.I.T.</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="nit" placeholder="N.I.T." name="nit" value="<?php echo $nit; ?>">
                            </div>
                        </div>
                         <!-- Nombres -->
                        <div class="form-group">
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
                        <!-- ************************************************************************************ -->
                        <div class="form-group">
                            <label for="lugar_nacimiento" class="col-sm-2 control-label">Lugar de Nacimiento</label>
                            <div class="col-sm-3">
                                <select id="lugar_nacimiento" class="form-control col-md-12" name="lugar_nacimiento" >
                                    <?php
                                        $sql2="SELECT a.id,
                                                      a.nombre,
                                                      a.departamento_id,
                                                      (select b.departamento from av_departamentos b where b.departamento_id = a.departamento_id) as nunidad
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
                                            if ($lugar_nacimiento == $row2['id']) { print ' selected="selected" '; };
                                            print ' >'.utf8_encode($row2['nombre']).'</option>';
                                        }
                                    ?>
                                </select>
                            </div>

                            <label for="fecha_nacimiento" class="col-sm-3 control-label">Fecha de Nacimiento</label>
                            <div class="col-sm-3">
                                  <div class="form-group input-group">
                                    <input name="fecha_nacimiento" class="form-control" id="dpYears" data-date="1940-01-01" data-date-format="yyyy-mm-dd" data-date-viewmode="years" size="16" type="text" value="<?php if(!$fecha_nacimiento){echo "1940-01-01";}else {echo $fecha_nacimiento;}?>">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                  </div>
                            </div>
                        </div>
                         <!-- Genero/Beneficiario -->
                        <div class="form-group">
                            <label for="genero" class="col-sm-2 control-label">Género</label>
                            <div class="col-sm-3">
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

                            <label for="beneficiario" class="col-sm-2 control-label">Beneficiario</label>
                            <div class="col-sm-3">
                                <select id="beneficiario" class="form-control col-md-12" name="beneficiario" >
                                    <?php
                                        $sql2="SELECT  id, nombre, comodin
                                                FROM ap_catalogos
                                                WHERE tipo_catalogo = 37 AND institucion = 1
                                                ORDER BY id";
                                        $resp2 = mysql_query($sql2);
                                    ?>
                                    <option value="" selected="selected" >Seleccionar</option>
                                    <?php
                                        while($row2=mysql_fetch_assoc($resp2)){
                                            print '<option value="'.$row2['id'].'" ';
                                            if ($beneficiario == $row2['comodin']) { print ' selected="selected" '; };
                                            print ' >'.utf8_encode($row2['nombre']).'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <!-- Estado Civil/Profesion -->
                        <div class="form-group">
                            <label for="estado_civil" class="col-sm-2 control-label">Estado Civil</label>
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
                            <label for="profesion" class="col-sm-2 control-label">Profesión</label>
                            <div class="col-sm-3">
                                <select id="profesion" class="form-control col-md-12" name="profesion" >
                                    <?php
                                        $sql2="SELECT  id, nombre, comodin
                                                FROM ap_catalogos
                                                WHERE tipo_catalogo = 38 AND institucion = 1
                                                ORDER BY nombre";
                                        $resp2 = mysql_query($sql2);
                                    ?>
                                    <option value="" selected="selected" >Seleccionar</option>
                                    <?php
                                        while($row2=mysql_fetch_assoc($resp2)){
                                            print '<option value="'.$row2['comodin'].'" ';
                                            if ($profesion == $row2['comodin']) { print ' selected="selected" '; };
                                            print ' >'.utf8_encode($row2['nombre']).'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <!-- Direccion/Vecindad -->
                        <div class="form-group">
                            <label for="direccion" class="col-sm-2 control-label">Dirección</label>
                            <div class="col-sm-5">
                                <textarea class="form-control" rows="2" id="direccion" placeholder="Dirección" name="direccion"><?php echo $direccion; ?></textarea>
                            </div>
                            <label for="vecindad" class="col-sm-1 control-label">Vecindad</label>
                            <div class="col-sm-3">
                                <select id="vecindad" class="form-control col-md-12" name="vecindad" >
                                    <?php
                                        $sql2="SELECT a.id,
                                                      a.nombre,
                                                      a.departamento_id,
                                                      (select b.departamento from av_departamentos b where b.departamento_id = a.departamento_id) as nunidad
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
                                            if ($vecindad == $row2['id']) { print ' selected="selected" '; };
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
                    </div>
                    <!-- Carpeta 2* -->
                    <div class="tab-pane fade" id="box_tab2">
                        <!-- Foto -->
                        <div class="form-group">
                            <label for="foto" class="col-sm-2 control-label">Subir Fotografía</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" id="image_to_upload"
                                placeholder="Seleccione una foto" name="foto" value="<?php echo $foto; ?>">
                                <img style="display:none" id="im" src="" alt="your image" />
                                <input type="hidden" id="image_aviary" name="image_aviary" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="foto" class="col-sm-2 control-label">Tomar Fotografía</label>
                            <div class="col-sm-9">
                            <?php include_once '../img/usuarios/foto.html'; ?>
                            </div>
                            <!--
                            <div class="col-sm-9">
                                <video id="video"></video>
                                <br>
                                <button id="boton">Tomar foto</button>
                                <p id="estado"></p>
                                <canvas id="canvas" style="display: none;"></canvas>
                            </div>
                            -->

                        </div>
                    </div>

                    <!-- Carpeta 3* -->
                    <div class="tab-pane fade" id="box_tab3">
                        <!-- Grado Militar/compania/Puesto-->
                        <div class="form-group">
                            <label for="grado_militar" class="col-sm-2 control-label">Grado Militar</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="grado_militar" placeholder="Grado" name="grado_militar" value="<?php echo $grado_militar; ?>">
                            </div>
                            <label for="compania" class="col-sm-1 control-label">Compañia</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="compania" placeholder="compania" name="compania" value="<?php echo $compania; ?>">
                            </div>
                            <label for="puesto" class="col-sm-1 control-label">Puesto</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="puesto" placeholder="Puesto" name="puesto" value="<?php echo $puesto; ?>">
                            </div>
                        </div>
                        <!-- Fecha Alta/Fecha Baja -->
                        <div class="form-group">
                            <label for="fecha_alta" class="col-sm-2 control-label">Fecha de Alta</label>
                            <div class="col-sm-3">
                                <div class="form-group input-group">
                                    <input name="fecha_alta" class="form-control" id="dpYears2" data-date="1960-01-01" data-date-format="yyyy-mm-dd" data-date-viewmode="years" size="16" type="text" value="<?php if(!$fecha_alta){echo "1960-01-01";}else {echo $fecha_alta;}?>">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                            <label for="fecha_baja" class="col-sm-2 control-label">Fecha de Baja</label>
                            <div class="col-sm-3">
                                <div class="form-group input-group">
                                    <input name="fecha_baja" class="form-control" id="dpYears3" data-date="1980-01-01" data-date-format="yyyy-mm-dd" data-date-viewmode="years" size="16" type="text" value="<?php if(!$fecha_baja){echo "1980-01-01";}else {echo $fecha_baja;}?>">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <!-- Motivo Baja/Computos Servicios -->
                        <div class ="form-group">
                        <label for="motivo_baja" class="col-sm-2 control-label">Motivo de Baja</label>
                            <div class="col-sm-4">
                                <textarea class="form-control" rows="2" id="motivo_baja" placeholder="" name="motivo_baja"><?php echo $motivo_baja; ?></textarea>
                            </div>
                        <label for="computo_servicios" class="col-sm-2 control-label">Computos de Servicios</label>
                            <div class="col-sm-3">
                                <textarea class="form-control" rows="2" id="computo_servicios" placeholder="" name="computo_servicios"><?php echo $computo_servicios; ?></textarea>
                            </div>

                        </div>
                        <!-- Sueldo Mensual/Zona Militar -->
                        <div class="form-group">
                            <label for="sueldo_mensual" class="col-sm-2 control-label">Sueldo Mensual</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="sueldo_mensual" placeholder="Sueldo" name="sueldo_mensual" value="<?php echo $sueldo_mensual; ?>">
                            </div>
                            <label for="zona_militar" class="col-sm-2 control-label">Zona Militar</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="zona_militar" placeholder="Zona" name="zona_militar" value="<?php echo $zona_militar; ?>">
                            </div>
                        </div>
                    </div>
                    <!-- Carpeta 4 -->
                    <div class="tab-pane fade" id="box_tab4">
                        <div class="form-group">
                            <label for="archivo" class="col-sm-3 control-label">Archivo</label>
                            <div class="col-sm-9">
                                <input type="file" class="file-input" id="archivo" placeholder="Archivo" name="archivo" value=""  >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="descripcion" class="col-sm-3 control-label">Descripción</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="descripcion" placeholder="Ingresa una descripcion" name="descripcion" value=""  >
                            </div>
                        </div>

                        <div class="form-group has-warning">
                            <label for="tipo_doc" class="col-sm-3 control-label">Observaciones</label>
                            <div class="col-md-7">
                                <textarea rows="3" cols="5" name="observaciones" class="form-control"></textarea>
                            </div>
                        </div>

                        <center>
                        <div class='btn-group' >
                              <button type="submit" class="btn btn-success" value="Upload" name="btn" >Subir Archivo</button>
                              <button type="reset" class="btn btn-default" value="Cancelar">Cancelar</button>
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
<!-- /#page-wrapper * -->

<?php include_once 'panel/i_foot.php'; ?>
<script src="script.js"></script>
<!--
<script type= "text/javascript">
    var featherEditor = new Aviary.Feather({
    apiKey: 'e35234ad291345d79a844bb964dc51ec',
    tools: ['orientation', 'crop', 'resize'],
    displayImageSize: true,
    theme: 'minimum',
    appendTo: '',
    onSave: function(imageID, newURL) {
        var img = document.getElementById(imageID);
        img.src = newURL;

        //aqui puede ir ajax para subir imagen

          .done(function( msg ) {
            alert( "Data Saved: " + msg );
            //location.reload();
           // $( "#result" ).html(  msg );
          });
        featherEditor.close();
    }

});
</script>
-->
<script src="../bower_components/datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Inicia Area Scripts Locales * -->
    <script type="text/javascript">
        // DatePicker *
        $(".datepicker").datepicker({
            format: 'yyyy-mm-dd'
        });
    </script>

<script>
var monster = {
    set: function(name, value, days, path, secure) {
        var date = new Date(),
            expires = '',
            type = typeof(value),
            valueToUse = '',
            secureFlag = '';
        path = path || "/";
        if (days) {
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        if (type === "object" && type !== "undefined") {
            if (!("JSON" in window)) throw "Bummer, your browser doesn't support JSON parsing.";
            valueToUse = encodeURIComponent(JSON.stringify({
                v: value
            }));
        }
        else {
            valueToUse = encodeURIComponent(value);
        }
        if (secure) {
            secureFlag = "; secure";
        }
        document.cookie = name + "=" + valueToUse + expires + "; path=" + path + secureFlag;
    },
    get: function(name) {
        var nameEQ = name + "=",
            ca = document.cookie.split(';'),
            value = '',
            firstChar = '',
            parsed = {};
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) === 0) {
                value = decodeURIComponent(c.substring(nameEQ.length, c.length));
                firstChar = value.substring(0, 1);
                if (firstChar == "{") {
                    try {
                        parsed = JSON.parse(value);
                        if ("v" in parsed) return parsed.v;
                    }
                    catch (e) {
                        return value;
                    }
                }
                if (value == "undefined") return undefined;
                return value;
            }
        }
        return null;
    }
};
if (!monster.get('cookieConsent')) {
    var cookieConsentAct = function() {
            document.getElementById('cookieConsent').style.display = 'none';
            monster.set('cookieConsent', 1, 360, '/');
        };
    document.getElementById('cookieConsent').style.display = 'block';
    var cookieConsentEl = document.getElementById('cookieConsentAgree');
    if (cookieConsentEl.addEventListener) {
        cookieConsentEl.addEventListener('click', cookieConsentAct, false);
    }
    else if (cookieConsentEl.attachEvent) {
        cookieConsentEl.attachEvent("onclick", cookieConsentAct);
    }
    else {
        cookieConsentEl["onclick"] = cookieConsentAct;
    }
}
</script>
    <script src="js/google-code-prettify/prettify.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script>
    if (top.location != location) {
    top.location.href = document.location.href ;
  }
        $(function(){
            window.prettyPrint && prettyPrint();
            $('#dp1').datepicker({
                format: 'mm-dd-yyyy'
            });
            $('#dp2').datepicker();
            $('#dp3').datepicker();
            $('#dp3').datepicker();
            $('#dpYears').datepicker();
            $('#dpYears2').datepicker();
            $('#dpYears3').datepicker();
            $('#dpMonths').datepicker();


            var startDate = new Date(2012,1,20);
            var endDate = new Date(2012,1,25);
            $('#dp4').datepicker()
                .on('changeDate', function(ev){
                    if (ev.date.valueOf() > endDate.valueOf()){
                        $('#alert').show().find('strong').text('The start date can not be greater then the end date');
                    } else {
                        $('#alert').hide();
                        startDate = new Date(ev.date);
                        $('#startDate').text($('#dp4').data('date'));
                    }
                    $('#dp4').datepicker('hide');
                });
            $('#dp5').datepicker()
                .on('changeDate', function(ev){
                    if (ev.date.valueOf() < startDate.valueOf()){
                        $('#alert').show().find('strong').text('The end date can not be less then the start date');
                    } else {
                        $('#alert').hide();
                        endDate = new Date(ev.date);
                        $('#endDate').text($('#dp5').data('date'));
                    }
                    $('#dp5').datepicker('hide');
                });

        // disabling dates
        var nowTemp = new Date();
        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

        var checkin = $('#dpd1').datepicker({
          onRender: function(date) {
            return date.valueOf() < now.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
          if (ev.date.valueOf() > checkout.date.valueOf()) {
            var newDate = new Date(ev.date)
            newDate.setDate(newDate.getDate() + 1);
            checkout.setValue(newDate);
          }
          checkin.hide();
          $('#dpd2')[0].focus();
        }).data('datepicker');
        var checkout = $('#dpd2').datepicker({
          onRender: function(date) {
            return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
          checkout.hide();
        }).data('datepicker');
        });
    </script>
    <script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript" src="https://dme0ih8comzn4.cloudfront.net/imaging/v3/editor.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script type="text/javascript">
function readURL(url) {
  completeURL = "http://"+window.location.hostname + "/avemilgua/" + url;
  document.getElementById('im').src=completeURL;
  }
    jQuery.noConflict();
    formdata = new FormData();
    jQuery("#image_to_upload").on("change", function() {
        var file = this.files[0];
        if (formdata) {
            formdata.append("image", file);
            jQuery.ajax({
                url: "../uploadPhoto.php",
                type: "POST",
                data: formdata,
                processData: false,
                contentType: false,
                success:function(data){
                  newImage = data;
                  readURL(newImage);
                  openAviary(newImage);
                }
            });
        }
    });


    var featherEditor = new Aviary.Feather({
        apiKey: '1620c74b36464cfc857eb4b2d3e555cf',
        apiVersion: 3,
        theme: 'minimum', // Check out our new 'light' and 'dark' themes!
        tools: 'all',
        appendTo: '',
        onSave: function(imageID, newURL) {
            var img = document.getElementById(imageID);
            img.src = newURL;
            $.ajax({
                method: "POST",
                url: "usuarios/uploadPhoto.php",
                data: {
                    temporal: newURL,
                    actual: completeURL,
                    img: newImage
                }
            })
            .done(function( msg ) {
                $('#image_aviary').val(msg);
            });
        featherEditor.close();
        },
        onError: function(errorObj) {
            // alert(errorObj.message);
        }
    });

    function launchEditor(id,src) {

        //alert("ENTRE A LA FUNCION");
        featherEditor.launch({
            image: id,
            url: src,
            forceCropPreset: ['Foto de carnet','7:7'],
            forceCropMessage: 'Por favor cortar la imagen'
        });
        return false;
    }

    function openAviary(ur) {
      completeURL = "http://"+window.location.hostname + "/avemilgua/" + ur;
      // alert(completeURL);
      launchEditor("im",completeURL);
    }

    function saveFoto(newURL){
      var img = document.getElementById(im).src;
    }


</script>
<script src="usuarios/script.js"></script>

<!-- Finaliza Area Scripts Locales * -->

<!-- *: indica que es material/comentarios del cascaron inicial de webappbase -->
