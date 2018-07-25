

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
                            <input class="text" name="p" type="hidden" value="usuarios/av_usuarios_list.php"/>
                            <!-- -->

                            <div class="form-group">
                                <h3>&nbsp;&nbsp; Datos Personales</h3>
                            </div>

                            <div class="form-group">
                                <label for="nombre" class="col-sm-3 control-label">Nombre</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresar un solo nombre" value="<?php echo $nombre; ?>"  >
                                </div>
                                <label for="apellido" class="col-sm-2 control-label">Apellido</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingresar un solo apellido" value="<?php echo $apellido; ?>"  >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="nit" class="col-sm-3 control-label">Código Veterano</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="codigo" placeholder="Código" name="codigo" value="<?php echo utf8_encode($codigo); ?>">
                                </div>

                                <label for="cliente" class="col-sm-2 control-label">D.P.I.</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="dpi" placeholder="Número de D.P.I." name="dpi" value="<?php echo utf8_encode($dpi); ?>">
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
                                        <input name="fecha_nacimiento" class="form-control" id="dpYears" data-date="1940-01-01" data-date-format="yyyy-mm-dd" data-date-viewmode="years" size="16" type="text" value="<?php if(!$fecha_nacimiento){echo "";}else {echo $fecha_nacimiento;}?>">
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
                            <div class="col-sm-2">
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
                            <label for="zona_militar" class="col-sm-1 control-label">Zona Militar</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="zona_militar" placeholder="Zona" name="zona_militar" value="<?php echo $zona_militar; ?>">
                            </div>
                            <label for="armas_servicios" class="col-sm-1 control-label">Armas y Servicios</label>
                            <div class="col-sm-2">
                                <select id="armas_servicios" class="form-control col-md-12" name="armas_servicios" >
                                    <?php
                                        $sql2="SELECT  id, nombre
                                                FROM ap_catalogos
                                                WHERE tipo_catalogo = 40 AND institucion = 1
                                                ORDER BY nombre";
                                        $resp2 = mysql_query($sql2);
                                    ?>
                                    <option value="" selected="selected" >Seleccionar</option>
                                    <?php
                                        while($row2=mysql_fetch_assoc($resp2)){
                                            print '<option value="'.$row2['id'].'" ';
                                            if ($armas_servicios == $row2['id']) { print ' selected="selected" '; };
                                            print ' >'.utf8_encode($row2['nombre']).'</option>';
                                        }
                                    ?>
                                </select>
                            </div>

                        </div>


                        <div class="form-group">
                            <label for="compania" class="col-sm-3 control-label">Compañia/Unidad</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="compania" placeholder="Compañia" name="compania" value="<?php echo $compania; ?>">
                            </div>

                            <label for="puesto" class="col-sm-2 control-label">Último Puesto</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="puesto" placeholder="Puesto" name="puesto" value="<?php echo $puesto; ?>">
                            </div>

                        </div>


                        <!-- Fecha Alta/Fecha Baja -->
                        <div class="form-group">
                            <label for="fecha_alta" class="col-sm-3 control-label">Fecha de Alta</label>
                            <div class="col-sm-3">
                                <div class="form-group input-group">
                                    <input name="fecha_alta" class="form-control" id="dpYears2" data-date="1960-01-01" data-date-format="yyyy-mm-dd" data-date-viewmode="years" size="16" type="text" value="<?php if(!$fecha_alta){echo "";}else {echo $fecha_alta;}?>">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                            <label for="fecha_baja" class="col-sm-2 control-label">Fecha de Baja</label>
                            <div class="col-sm-3">
                                <div class="form-group input-group">
                                    <input name="fecha_baja" class="form-control" id="dpYears3" data-date="1980-01-01" data-date-format="yyyy-mm-dd" data-date-viewmode="years" size="16" type="text" value="<?php if(!$fecha_baja){echo "";}else {echo $fecha_baja;}?>">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <!-- Motivo Baja/Computos Servicios -->
                        <div class ="form-group">
                        <label for="motivo_baja" class="col-sm-3 control-label">Motivo de Baja</label>
                            <div class="col-sm-3">
                                <textarea class="form-control" rows="2" id="motivo_baja" placeholder="" name="motivo_baja"><?php echo $motivo_baja; ?></textarea>
                            </div>
                        <label for="computo_servicios" class="col-sm-2 control-label">Computos de Servicios</label>
                            <div class="col-sm-3">
                                <textarea class="form-control" rows="2" id="computo_servicios" placeholder="" name="computo_servicios"><?php echo $computo_servicios; ?></textarea>
                            </div>

                        </div>

                        <div class="form-group">
                                <h3>&nbsp;&nbsp; Opciones de Administración</h3>
                        </div>

                        <div class="form-group">
                            <label for="user_registro" class="col-sm-3 control-label">Usuario Registro</label>
                                <div class="col-sm-3">
                                    <select id="user_registro" class="form-control col-md-12" name="user_registro" >
                                        <?php
                                            $sql2="SELECT  id, nombre, apellido
                                                    FROM ap_usuarios
                                                    WHERE permiso = 3
                                                    ORDER BY id";
                                            $resp2 = mysql_query($sql2);
                                        ?>
                                        <option value="" selected="selected" >Seleccionar</option>
                                        <?php
                                            while($row2=mysql_fetch_assoc($resp2)){
                                                print '<option value="'.$row2['id'].'" ';
                                                if ($user_registro== $row2['id']) { print ' selected="selected" '; };
                                                print ' >'.utf8_encode($row2['nombre']). ' ' .utf8_encode($row2['apellido']). '</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                                <label for="fecha_registro" class="col-sm-2 control-label">Fecha de Registro</label>
                                <div class="col-sm-3">
                                    <div class="form-group input-group">
                                        <input name="fecha_registro" class="form-control" id="dpYears4" data-date="1980-01-01" data-date-format="yyyy-mm-dd" data-date-viewmode="years" size="16" type="text" value="<?php if(!$fecha_registro){echo "";}else {echo $fecha_registro;}?>">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    </div>
                            </div>
                        </div>


                        <!----------------------------------------------------------------------------------------->
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
            $('#dp4').datepicker();
            $('#dpYears').datepicker();
            $('#dpYears2').datepicker();
            $('#dpYears3').datepicker();
            $('#dpYears4').datepicker();
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