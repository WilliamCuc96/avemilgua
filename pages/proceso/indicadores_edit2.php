<?php
    //Definición de Variables locales
    global $id; $fecha; $hora; $alarmas; $eventos; $traffic_mb; $flows; $pckets;
    global $dif_alarmas; $dif_eventos; $usuario_alta; $fecha_alta; $perfil; $institucion;
    global $palarmas; $peventos; $ptraffic_mb; $pflows; $ppckets;

    //Inicialización de Variables locales
    $id = '';
    $fecha = '';
    $hora = '';
    $alarmas = '';
    $eventos = '';
    $traffic_mb = '';
    $flows = '';
    $pckets = '';
    $dif_alarmas = '';
    $dif_eventos = '';
    $usuario_alta = '';
    $fecha_alta = '';
    $perfil = '';
    $institucion = '';
    $palarmas = 0;
    $peventos = 0;
    $ptraffic_mb = 0;
    $pflows = 0;
    $ppckets = 0;

    // Asignar el valor que viene en el request a variables
    if (!$id) { $id  = isset_or('id', '0'); };
    if (!$fecha) { $fecha  = isset_or('fecha', ''); };
    if (!$hora) { $hora  = isset_or('hora', ''); };
    if (!$alarmas) { $alarmas  = isset_or('alarmas', '0'); };
    if (!$eventos) { $eventos  = isset_or('eventos', '0'); };
    if (!$traffic_mb) { $traffic_mb  = isset_or('traffic_mb', '0'); };
    if (!$flows) { $flows  = isset_or('flows', '0'); };
    if (!$pckets) { $pckets = isset_or('pckets', '0'); };
    if (!$dif_alarmas) { $dif_alarmas  = isset_or('dif_alarmas', '0'); };
    if (!$dif_eventos) { $dif_eventos  = isset_or('dif_eventos', '0'); };
    if (!$usuario_alta) { $usuario_alta  = isset_or('usuario_alta', '0'); };
    if (!$fecha_alta) { $fecha_alta  = isset_or('fecha_alta', '0'); };
    if (!$perfil) { $perfil  = isset_or('perfil', '0'); };
    if (!$institucion) { $institucion  = isset_or('institucion', '0'); };

    date_default_timezone_set("America/Guatemala");
    //echo date_default_timezone_get();
    if (!$fecha){ $fecha = date("Y-m-d"); }
    if (!$hora) { $hora  = date("H:i:s"); }
    if (!$fecha_alta){ $fecha_alta = date("Y-m-d H:i:s"); }
    if (!$usuario_alta){ $usuario_alta = $_SESSION['usuario_login']; }

 ?>

<!-- Page wrapper -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><i class="fa fa-shield"></i> Gestión de Indicadores</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

<?php

    //Programacion de Funcionalidad para mostrar datos de la pagina
    if (!$id) {
		$var_where1 = " ";
                $institucion = $_SESSION['usuario_institucion'];
                $perfil = isset_or('perfil', '0');
                $sql1 = "SELECT
                            p.alarmas as palarmas,
                            p.eventos as peventos,
                            p.traffic_mb as ptraffic_mb,
                            p.flows as pflows,
                            p.pckets as ppckets,
                            p.telefono_docs,
                            p.email_docs
			FROM ap_perfil p
                        WHERE p.id = " . $perfil . "
			ORDER BY p.id +0";
	    	//echo "<br>[SQL] ".$sql. " [Fin SQL]";
	    $resp1 = mysql_query($sql1);
            if ($resp1) {
                while($row1=mysql_fetch_assoc($resp1)){
                            $palarmas = $row1['palarmas'];
                            $peventos = $row1['peventos'];
                            $ptraffic_mb = $row1['ptraffic_mb'];
                            $pflows = $row1['pflows'];
                            $ppckets = $row1['ppckets'];
                            $email_docs = $row1['email_docs'];
                            $telefono_docs = $row1['telefono_docs'];
			};
			mysql_free_result($resp1);
            }
	} else {
		$var_where1 = " AND b.id = '" . $id . "' ";
	//	$var_where1 = $var_where1 . " AND u.institucion in ('1', '" . $_SESSION['usuario_institucion'] . "')";

	    // Consulta SQL
	    // echo " [Where]" . $s_where . "[FIN]";
	    $sql1 = "SELECT b.id,
                            b.fecha,
                            b.hora,
                            b.alarmas,
                            b.eventos,
                            b.traffic_mb,
                            b.flows,
                            b.pckets,
                            b.dif_alarmas,
                            b.dif_eventos,
                            b.usuario_alta,
                            b.fecha_alta,
                            b.perfil,
                            b.institucion,
                            p.alarmas as palarmas,
                            p.eventos as peventos,
                            p.traffic_mb as ptraffic_mb,
                            p.flows as pflows,
                            p.pckets as ppckets,
                            p.telefono_docs,
                            p.email_docs
			FROM cy_indicadores b, ap_perfil p
                        WHERE b.perfil = p.id
			" . $var_where1 . "
			ORDER BY b.id +0";
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
                            $fecha = $row1['fecha'];
                            $hora = $row1['hora'];
                            $alarmas = $row1['alarmas'];
                            $eventos = $row1['eventos'];
                            $traffic_mb = $row1['traffic_mb'];
                            $flows = $row1['flows'];
                            $pckets = $row1['pckets'];
                            $dif_alarmas = $row1['dif_alarmas'];
                            $dif_eventos = $row1['dif_eventos'];
                            $usuario_alta = $row1['usuario_alta'];
                            $fecha_alta = $row1['fecha_alta'];
                            $perfil = $row1['perfil'];
                            $institucion = $row1['institucion'];
                            $palarmas = $row1['palarmas'];
                            $peventos = $row1['peventos'];
                            $ptraffic_mb = $row1['ptraffic_mb'];
                            $pflows = $row1['pflows'];
                            $ppckets = $row1['ppckets'];
                            $email_docs = $row1['email_docs'];
                            $telefono_docs = $row1['telefono_docs'];
			};
			mysql_free_result($resp1);
	    }; // toma en cuenta en el contenido el html
	};
?>

<!-- BOX TABS (Peledahe) -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading ">
                        <i class="fa fa-info-circle"></i> Ingrese la información solicitada, muevase entre campos con tabulador!
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" action="index.php" method="post">
                        <!-- Inicia Formulario (Peledahe) -->

                        <input class="text" name="p" type="hidden" value="proceso/indicadores_gestion.php"/>
                    <div class="form-group">
                        <label for="id" class="col-sm-2 control-label">Id (Auto) </label>
                        <div class="col-sm-4">
                            <input type="hidden" class="form-control" id="id" placeholder="0" name="id" value="<?php echo $id; ?>"  >
                            <input type="text" class="form-control" id="id2" placeholder="0" name="id2" value="<?php echo $id; ?>" disabled="" >
                        </div>

<?php
                //$plvalidarinst = " AND co.institucion >= " . $_SESSION['usuario_institucion'] . " ";
                $plvalidarinst = ' ';
                echo "<input class='text' name='institucion' id='institucion' type='hidden' value='" . $_SESSION['usuario_institucion'] . "'/>";
?>
                    <label for="seccion" class="col-sm-2 control-label">Perfil</label>
                    <input type="hidden" class="form-control" id="perfil2" placeholder="0" name="perfil2" value="<?php echo $perfil; ?>"  >
                            <div class="col-sm-4">
                                <select id="perfil" class="form-control col-md-12" name="perfil" required="">
                                    <?php
                                        $sql2="SELECT co.id,
                                                      co.nombre,
                                                      co.institucion,
                                                      (select i.nombre from ap_instituciones i where i.id = co.institucion) as ninstitucion
                                                FROM ap_perfil co
                                                WHERE co.estatus = 1
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
                                            if ($perfil == $row2['id']) { print ' selected="selected" '; };
                                            print ' >'.utf8_encode($row2['nombre']).'</option>';
                                        }
                                    ?>
                                </select>
                                <input type="hidden" class="form-control" id="telefono_docs" placeholder="telefono_docs" name="telefono_docs" value="<?php echo utf8_encode($telefono_docs); ?>" disabled="">
                                <input type="hidden" class="form-control" id="email_docs" placeholder="email_docs" name="email_docs" value="<?php echo utf8_encode($email_docs); ?>" disabled="">
                            </div>
                    </div>
                    <div class="form-group">
                        <label for="fecha" class="col-sm-2 control-label">Fecha</label>
                        <div class="col-sm-4">
                            <input type="date" class="form-control" id="fecha" placeholder="aaaa-mm-dd" name="fecha" value="<?php echo utf8_encode($fecha); ?>" required="">
                        </div>
                    
                        <label for="hora" class="col-sm-2 control-label">Hora</label>
                        <div class="col-sm-4">
                            <input type="time" class="form-control" id="hora" placeholder="hh:mm:ss" name="hora" value="<?php echo utf8_encode($hora); ?>" required="">
                        </div>
                    </div>
                    <div class="form-group" id="ealarmas">
                        <label for="alarmas" class="col-sm-2 control-label">Alarma Actual</label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control" id="alarmas" placeholder="0" name="alarmas" value="<?php echo utf8_encode($alarmas); ?>" required="">
                        </div>
                        <label for="alarmas" class="col-sm-2 control-label">Parámetro</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="palarmas" placeholder="0" name="palarmas" value="<?php echo utf8_encode($palarmas); ?>" disabled="" >
                        </div>
                        <label for="dif_alarmas" class="col-sm-2 control-label">Alarma Anterior</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="alarma_ant" placeholder="0" name="dif_alarmas1" value="<?php echo utf8_encode($dif_alarmas); ?>" disabled="">
                        </div>
                        <label for="dif_alarmas" class="col-sm-2 control-label">Dif. Alarmas</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="dif_alarmasd" placeholder="0" name="dif_alarmas2" value="<?php echo utf8_encode($dif_alarmas); ?>" disabled="" >
                            <input type="hidden" class="form-control" id="dif_alarmas" placeholder="0" name="dif_alarmas" value="<?php echo utf8_encode($dif_alarmas); ?>" >
                        </div>
                    </div>
                    <div class="form-group" id="eeventos">
                      <label for="eventos" class="col-sm-2 control-label">Evento Actual</label>
                      <div class="col-sm-4">
                          <input type="number" class="form-control" id="eventos" placeholder="0" name="eventos" value="<?php echo utf8_encode($eventos); ?>" required="">
                      </div>
                      <label for="eventos" class="col-sm-2 control-label">Parámetro</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="peventos" placeholder="0" name="peventos" value="<?php echo utf8_encode($peventos); ?>" disabled="" >
                      </div>
                      <label for="dif_eventos" class="col-sm-2 control-label">Evento Anterior</label>
                      <div class="col-sm-4">
                          <input type="text" class="form-control" id="evento_ant" placeholder="0" name="dif_eventos1" value="<?php echo utf8_encode($dif_eventos); ?>" disabled="">
                      </div>
                      <label for="dif_eventos" class="col-sm-2 control-label">Dif. Eventos</label>
                      <div class="col-sm-4">
                          <input type="text" class="form-control" id="dif_eventosd" placeholder="0" name="dif_eventos2" value="<?php echo utf8_encode($dif_eventos); ?>" disabled="" >
                          <input type="hidden" class="form-control" id="dif_eventos" placeholder="0" name="dif_eventos" value="<?php echo utf8_encode($dif_eventos); ?>" >
                      </div>
                    </div>
                    <div class="form-group" id="etraffic_mb">
                        <label for="traffic_mb" class="col-sm-2 control-label">Traffic mb/s</label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control" id="traffic_mb" placeholder="Traffic mb/s" name="traffic_mb" value="<?php echo utf8_encode($traffic_mb); ?>" required="">

                        </div>
                        <label for="traffic_mb" class="col-sm-2 control-label">Parámetro</label>
                        <div class="col-sm-4">

                            <input type="text" class="form-control" id="ptraffic_mb" placeholder="Traffic mb/s" name="ptraffic_mb" value="<?php echo utf8_encode($ptraffic_mb); ?>"  disabled="" >
                        </div>
                    </div>
                    <div class="form-group" id="eflows">
                        <label for="flows" class="col-sm-2 control-label">Flows</label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control" id="flows" placeholder="flows" name="flows" value="<?php echo utf8_encode($flows); ?>" required="">

                        </div>

                        <label for="flows" class="col-sm-2 control-label">Parámetro</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="pflows" placeholder="flows" name="pflows" value="<?php echo utf8_encode($pflows); ?>" disabled="">
                        </div>
                    </div>
                    <div class="form-group" id="epckets">
                        <label for="pckets" class="col-sm-2 control-label">Pckets</label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control" id="pckets" placeholder="pckets" name="pckets" value="<?php echo utf8_encode($pckets); ?>" required="">

                        </div>
                        <label for="pckets" class="col-sm-2 control-label">Parámetro</label>
                        <div class="col-sm-4">

                            <input type="text" class="form-control" id="ppckets" placeholder="pckets" name="ppckets" value="<?php echo utf8_encode($ppckets); ?>"  disabled="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="usuario_alta" class="col-sm-2 control-label">Usuario</label>
                        <div class="col-sm-4">
                            <input type="hidden" class="form-control" id="usuario_alta" placeholder="usuario_alta" name="usuario_alta" value="<?php echo utf8_encode($usuario_alta); ?>" >
                            <input type="hidden" class="form-control" id="usuario_alta1" placeholder="usuario_alta" name="usuario_alta1" value="<?php echo utf8_encode($usuario_alta); ?>" disabled="">
                        </div>
                        <label for="fecha_alta" class="col-sm-2 control-label">Fecha de Ingreso</label>
                        <div class="col-sm-4">
                            <input type="hidden" class="form-control" id="fecha_alta" placeholder="aaaa-mm-dd hh:mm:ss" name="fecha_alta" value="<?php echo utf8_encode($fecha_alta); ?>" >
                            <input type="hidden" class="form-control" id="fecha_alta1" placeholder="aaaa-mm-dd hh:mm:ss" name="fecha_alta1" value="<?php echo utf8_encode($fecha_alta); ?>" disabled="">
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
<script>
    // Trae la siguiente fecha de pago (un solo dato)
    $(document).ready(function(){
        $("#alarmas").change(function(){
           $("#alarma_ant").val("calculando ...");
           $("#ealarmas").removeClass("has-error");
          //  alert($(this).val()); //

           $.post("../pages/proceso/ajax_alarmas.php",
           {
               alarmas:$(this).val(),
               perfil:$("#perfil").val()
           },
           function(data){
               // asigna el valor
                var res = data.split("|",3);
                $("#alarma_ant").val(res[1]);
                $("#dif_alarmas").val(res[2]);
                $("#dif_alarmasd").val(res[2]);

                if (res[2] > $("#palarmas").val()) {
                  $("#ealarmas").addClass("has-error");
                  alert('Si '+' '+$("#dif_alarmas").val()+' > '+$("#palarmas").val());
                } else {
                  $("#ealarmas").removeClass("has-error");
                  alert('No '+' '+res[2]+' > '+$("#palarmas").val());
                }
           })
        });

        $("#eventos").change(function(){
          $("#evento_ant").val("calculando ...");
          $("#eeventos").removeClass("has-error");
         //  alert($(this).val()); //

          $.post("../pages/proceso/ajax_eventos.php",
          {
              eventos:$(this).val(),
              perfil:$("#perfil").val()
          },
          function(data){
              // asigna el valor
               var res = data.split("|",3);
               $("#evento_ant").val(res[1]);
               $("#dif_eventos").val(res[2]);
               $("#dif_eventosd").val(res[2]);

               if (res[2] > $("#peventos").val()) {
                 $("#eeventos").addClass("has-error");
                 alert('Si '+' '+$("#dif_eventos").val()+' > '+$("#peventos").val());
               } else {
                 $("#eeventos").removeClass("has-error");
                 alert('No '+' '+res[2]+' > '+$("#peventos").val());
               }
          })
        });

        $("#traffic_mb").change(function(){
           $("#etraffic_mb").removeClass("has-error");
           if ($("#traffic_mb").val() > $("#ptraffic_mb").val()) {
               $("#etraffic_mb").addClass("has-error");
           } else {
               $("#etraffic_mb").removeClass("has-error");
           }

        });

        $("#flows").change(function(){
           $("#eflows").removeClass("has-error");
           if ($("#flows").val() > $("#pflows").val()) {
               $("#eflows").addClass("has-error");
           } else {
               $("#eflows").removeClass("has-error");
           }

        });

        $("#pckets").change(function(){
           $("#epckets").removeClass("has-error");
           if ($("#pckets").val() > $("#ppckets").val()) {
               $("#epckets").addClass("has-error");
           } else {
               $("#epckets").removeClass("has-error");
           }

        });

        $("#perfil").change(function(){
           //$("#telefono_docs").val("calculando ...");
           // alert($(this).val()); //
           $.post("../pages/proceso/ajax_parametros.php",
           {
               perfil:$(this).val()
           },
           function(data){
               // asigna el valor
                var res = data.split("|",7);
                $("#palarmas").val(res[0]);
                $("#peventos").val(res[1]);
                $("#ptraffic_mb").val(res[2]);
                $("#pflows").val(res[3]);
                $("#ppckets").val(res[4]);
                $("#telefono_docs").val(res[5]);
                $("#email_docs").val(res[6]);
               // reemplaza el objeto completo
               //$("#fecha_cobro").replaceWith(data);
           })
        });
    })
</script>
