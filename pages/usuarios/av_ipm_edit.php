<?php
//Definición de Variables locales *
    global $id; $nombre; $nombre2; $apellido; $apellido2; $apellido3; $grado_militar; $numero_catalogo; $dpi; $direccion; $municipio; $correo; $telefono; $cantidad; $fecha_inicio; $fecha_registro; $usuario_registro;

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
    $fecha_inicio = '';
    $fecha_registro = '';
    $usuario_registro = '';

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
    if (!$fecha_inicio) { $fecha_inicio = isset_or('fecha_inicio', ''); };
    if (!$fecha_registro) { $fecha_registro = isset_or('fecha_registro', ''); };
    if (!$usuario_registro) { $usuario_registro = isset_or('usuario_registro', ''); };
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
                        a.cantidad,
                        a.fecha_inicio
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
                $fecha_inicio = $row['fecha_inicio'];
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
                        <div class="form-group">
                        <label for="fecha_inicio" class="col-sm-2 control-label">Fecha de Inicio</label>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <input name="fecha_inicio" class="form-control" id="dpYears" data-date="2000-01-01" data-date-format="yyyy-mm-dd" data-date-viewmode="years" size="16" type="text" value="<?php if(!$fecha_inicio){echo "2000-01-01";}else {echo $fecha_inicio;}?>">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
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
<!--<script src="js/jquery.js"></script>-->
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
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script>
<script type="text/javascript" src="https://dme0ih8comzn4.cloudfront.net/imaging/v3/editor.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script type="text/javascript">
    function readURL(url) {
        completeURL = "http://"+window.location.hostname + "/av/" + url;
        document.getElementById('im').src=completeURL;
    }
    jQuery.noConflict();
    formdata = new FormData();
    jQuery("#image_to_upload").on("change", function() {
        var file = this.files[0];
        // console.log(file);
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
            $.notify("Guardando foto, por favor espera.", "success");
            $.ajax({
                method: "POST",
                url: "usuarios/uploadPhoto.php",
                data: {
                    temporal: newURL,
                    img: newImage
                }
            })
            .done(function( msg ) {
                $('#image_aviary').val(msg);
                var img2 = document.getElementById('im2');
                var msj = document.getElementById("msj_im");
                msj.innerHTML = '<label class="col-sm-2 control-label">Fotografía recortada: </label>';
                img2.src = msg;
                img2.style.display = "";
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
      completeURL = "http://"+window.location.hostname + "/av/" + ur;
      // alert(completeURL);
      launchEditor("im",completeURL);
    }
    function openAviaryWC(ur) {
      var url = ur.split("/");
      try {
          newImage = url[4];
      } catch (e) {
      }
      launchEditor("im",ur);
    }

    function saveFoto(newURL){
      var img = document.getElementById(im).src;
    }

</script>

<?php if ($_SESSION['usuario_nivel'] <= 2 OR $_SESSION['usuario_nivel'] == 4) { ?>
    <!-- script webcam -->
    <script src="usuarios/script.js"></script>
<?php } ?>

<!-- Finaliza Area Scripts Locales * -->

<!-- *: indica que es material/comentarios del cascaron inicial de webappbase -->