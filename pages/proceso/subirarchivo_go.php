<!-- Page wrapper -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><i class="fa fa-shield"></i> Subir Archivo XLS</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <!-- BOX TABS (Peledahe) -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <i class="fa fa-shield"></i> Ingrese la información solicitada y seleccione su archivo
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" action="index.php" method="post"  enctype="multipart/form-data">
<!-- Inicia Formulario (Peledahe) -->
                                        <input class="text" name="p" type="hidden" value="proceso/subirarchivos_gestion.php"/>


                                        <div class="form-group">
                                            <label for="nit" class="col-sm-3 control-label">Archivo</label>
                                            <div class="col-sm-9">
                                                <input type="file" class="file-input" id="nit" placeholder="Archivo" name="archivo" value=""  >
                                            </div>

                                        </div>

                                        <div class="form-group">

                                            <label for="nit" class="col-sm-3 control-label">Descripción</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="descripcion" placeholder="Ingresa una descripcion" name="descripcion" value=""  >
                                            </div>
                                        </div>

                                        <div class="form-group has-warning">
                                            <label for="tipo_doc" class="col-sm-3 control-label">Observaciones</label>
                                            <div class="col-md-9">
                                                <textarea rows="3" cols="5" name="observaciones" class="form-control"></textarea>
                                            </div>

                                        </div>

                                        <center>
                                    <div class='btn-group' >
                                          <button type="submit" class="btn btn-success" value="Upload" name="btn" >Subir Archivo</button>
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