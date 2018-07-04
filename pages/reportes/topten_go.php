<!-- Page wrapper -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><i class="fa fa-shield"></i> Generar reporte Top 10</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <!-- BOX TABS (Peledahe) -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <i class="fa fa-shield"></i> Ingrese la información necesaria para generar su reporte
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" action="index.php" method="post"  enctype="multipart/form-data" >
<!-- Inicia Formulario (Peledahe) -->
                                        <input class="text" name="p" type="hidden" value="reportes/topten_list.php"/>
                                        <div class="form-group">
                                            <label for="perfil" class="col-sm-2 control-label">Perfil</label>
                                            <div class="col-sm-4">
                                              <select id="perfil" class="form-control col-md-12" name="perfil" required="" >
                                                      <?php
                                                          $sql2="SELECT  id, nombre
                                                                      FROM ap_perfil
                                                                      WHERE estatus = 1
                                                                      ORDER BY id";
                                                          $resp2 = mysql_query($sql2);
                                                      ?>
                                                      <option value="" selected="selected" >Seleccionar</option>
                                                      <?php
                                                          while($row2=mysql_fetch_assoc($resp2)){
                                                              print '<option value="'.$row2['id'].'" ';
                                                              if ($estatus == $row2['id']) { print ' selected="selected" '; };
                                                              print ' >'.utf8_encode($row2['nombre']).'</option>';
                                                          };
                                                      ?>
                                              </select>
                                            </div>

                                        </div>

                                        <div class="form-group">

                                            <label for="tfecha" class="col-sm-2 control-label">Fecha</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="tfecha" placeholder="(aaaa-mm-dd) Fecha" name="tfecha" value=""  >
                                            </div>

                                            </div>

                                            <div class="form-group">

                                            <label for="fhora" class="col-sm-2 control-label">Hora</label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" id="thora" placeholder="(hh) Hora" name="thora" value=""  >
                                            </div>

                                        </div>

                                        <center>
                                    <div class='btn-group' >
                                          <button type="submit" class="btn btn-success" value="Upload" name="btn" >Generar Reporte</button>
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
