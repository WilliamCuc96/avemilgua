<!-- Page wrapper -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><i class="fa fa-shield"></i> Reportes de Indicadores</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <!-- BOX TABS (Peledahe) -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <i class="fa fa-shield"></i> Seleccione el perfil a generar
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" action="reportes/indicadores_rep.php" method="post"  enctype="multipart/form-data">
<!-- Inicia Formulario (Peledahe) -->
                                        <input class="text" name="p" type="hidden" value="proceso/indicadores_edit.php"/>


                                        <div class="form-group">

                    <label for="seccion" class="col-sm-2 control-label">Perfil</label>
                            <div class="col-sm-4">
                                <select id="perfil" class="form-control col-md-12" name="perfil"  required="">
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
                        <label for="usuario_alta" class="col-sm-2 control-label">Fecha de Inicio</label>
                        <div class="col-sm-4">

                            <input type="date" class="form-control" id="fecha_ini" placeholder="aaaa-mm-dd" name="fecha_ini" value="<?php echo utf8_encode($fecha_ini); ?>"  required="">
                        </div>
                        <label for="fecha_alta" class="col-sm-2 control-label">Fecha Final</label>
                        <div class="col-sm-4">
                            <input type="date" class="form-control" id="fecha_fin" placeholder="aaaa-mm-dd" name="fecha_fin" value="<?php echo utf8_encode($fecha_fin); ?>"  required="">

                        </div>
                    </div>

                                        <center>
                                    <div class='btn-group' >
                                          <button type="submit" class="btn btn-success" value="Ingresar" name="btn" >Generar Reporte</button>
                                          <button type="reset" class="btn btn-default" value="Cancelar">Cancelar</button>
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
