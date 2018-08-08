<!-- Page wrapper -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><i class="fa fa-search"></i> Búsqueda Avanzada</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <!-- BOX TABS (Peledahe) -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-info-circle"></i> Ingrese en el siguiente formulario sus criterios de búsqueda
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" action="index.php" method="get">
<!-- Inicia Formulario (Peledahe) -->
                            <!-- -->
                            <input class="text" name="p" type="hidden" value="inmuebles/casas_list.php"/>
                            <!-- -->

                            <div class="form-group">
                                <h3>&nbsp;&nbsp; Datos Personales</h3>
                            </div>

                            <div class="form-group">
                                <label for="nombre" class="col-sm-3 control-label">Nombre Veterano</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombres/Apellidos" value="<?php echo $nombre; ?>"  >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="nit" class="col-sm-3 control-label">Código Veterano</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="nit" placeholder="Código" name="nit" value="<?php echo utf8_encode($codigo); ?>">
                                </div>

                                <label for="cliente" class="col-sm-2 control-label">D.P.I.</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="cliente" placeholder="Número de D.P.I." name="cliente" value="<?php echo utf8_encode($dpi); ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="genero" class="col-sm-3 control-label">Género</label>
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

                                <label for="estado_civil" class="col-sm-2 control-label">Estado Civil</label>
                                <div class="col-sm-3">
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
                            </div>

                            <div class="form-group">
                                <label for="lugar_nacimiento" class="col-sm-3 control-label">Lugar de Nacimiento</label>
                                <div class="col-sm-3">
                                    <select id="lugar_nacimiento" class="form-control col-md-12" name="lugar_nacimiento" >
                                        <?php
                                            $sql2="SELECT departamento
                                            FROM ap_municipios
                                            GROUP BY departamento";
                                            $resp2 = mysql_query($sql2);
                                        ?>
                                        <option value="" selected="selected" >Seleccionar</option>
                                        <?php
                                            while($row2=mysql_fetch_assoc($resp2)){
                                                echo "<option value='".$row2['departamento']."'>".$row2['departamento']."</option>";

                                            }
                                        ?>
                                    </select>
                                </div>

                                <label for="fecha_nacimiento" class="col-sm-2 control-label">Fecha de Nacimiento</label>
                                <div class="col-sm-3">
                                      <div class="form-group input-group">
                                        <input name="fecha_nacimiento" class="form-control" id="dpYears" data-date="1940-01-01" data-date-format="yyyy-mm-dd" data-date-viewmode="years" size="16" type="text" value="<?php if(!$fecha_nacimiento){echo "1940-01-01";}else {echo $fecha_nacimiento;}?>">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                      </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="direccion" class="col-sm-3 control-label">Dirección</label>
                                <div class="col-sm-3">
                                    <textarea class="form-control" rows="2" id="direccion" placeholder="Dirección" name="direccion"><?php echo $direccion; ?></textarea>
                                </div>
                                <label for="vecindad" class="col-sm-2 control-label">Vecindad</label>
                                <div class="col-sm-3">
                                    <select id="vecindad" class="form-control col-md-12" name="vecindad" >
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
                                                if ($vecindad == $row2['id']) { print ' selected="selected" '; };
                                                print ' >'.utf8_encode($row2['nombre']).'</option>';
                                            }
                                        ?>
                                    </select>
                                </div>

                            </div>

                            <div class="form-group">
                                 <label for="profesion" class="col-sm-3 control-label">Profesión</label>
                                <div class="col-sm-3">
                                    <select id="profesion" class="form-control col-md-12" name="profesion" >
                                        <?php
                                            $sql2="SELECT  id, nombre
                                                    FROM ap_catalogos
                                                    WHERE tipo_catalogo = 38 AND institucion = 1
                                                    ORDER BY nombre";
                                            $resp2 = mysql_query($sql2);
                                        ?>
                                        <option value="" selected="selected" >Seleccionar</option>
                                        <?php
                                            while($row2=mysql_fetch_assoc($resp2)){
                                                print '<option value="'.$row2['id'].'" ';
                                                if ($profesion == $row2['nombre']) { print ' selected="selected" '; };
                                                print ' >'.utf8_encode($row2['nombre']).'</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                                <label for="correo" class="col-sm-2 control-label">Correo Electrónico</label>
                                <div class="col-sm-3">
                                    <input type="email" class="form-control" id="correo" placeholder="Correo" name="correo" value="<?php echo $correo; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <h3>&nbsp;&nbsp; Datos de Servicios</h3>
                            </div>

                            <div class="form-group">
                            <label for="grado_militar" class="col-sm-3 control-label">Grado Militar</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="grado_militar" placeholder="Grado" name="grado_militar" value="<?php echo $grado_militar; ?>">
                            </div>
                            <label for="compania" class="col-sm-2 control-label">Compañia</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="compania" placeholder="compania" name="compania" value="<?php echo $compania; ?>">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="puesto" class="col-sm-3 control-label">Puesto</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="puesto" placeholder="Puesto" name="puesto" value="<?php echo $puesto; ?>">
                            </div>
                            <label for="zona_militar" class="col-sm-2 control-label">Zona Militar</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="zona_militar" placeholder="Zona" name="zona_militar" value="<?php echo $zona_militar; ?>">
                            </div>

                        </div>


                        <!-- Fecha Alta/Fecha Baja -->
                        <div class="form-group">
                            <label for="fecha_alta" class="col-sm-3 control-label">Fecha de Alta</label>
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
                        <br>
                            <center>
                                <div class='btn-group' >
                                    <button type="submit" class="btn btn-success " value="Buscar" name="btn" ><i class="fa fa-search"></i> Buscar veteranos</button>
                                </div>
                            </center>
<!-- /Fin del Formulario (Peledahe) col-sm-offset-2 -->
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