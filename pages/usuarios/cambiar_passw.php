<!-- Page wrapper -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><i class="fa fa-shield"></i> Cambiar Contraseña</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <!-- BOX TABS (Peledahe) -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <i class="fa fa-shield"></i> Ingrese su nueva contraseña
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" action="index.php" method="post">
<!-- Inicia Formulario (Peledahe) -->
                                  <input class="text" name="p" type="hidden" value="usuarios/cambiar_passw_gestion.php"/>
                                  <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Usuario </label>
                                        <div class="col-sm-10">
                                          <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="nick" value="<?php echo $_SESSION['usuario_login']; ?>"  >
                                        </div>
                                  </div>
                                  <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">Contraseña</label>
                                        <div class="col-sm-10">
                                          <input type="password" class="form-control" id="inputPassword3" placeholder="Password"  name="password" >
                                        </div>
                                  </div>
                                  <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">Re-ingrese Contraseña</label>
                                        <div class="col-sm-10">
                                          <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password2" >
                                        </div>
                                  </div>
<!-- /Fin del Formulario (Peledahe) col-sm-offset-2 -->
                                  <center>
                                    <div class='btn-group' >
                                          <button type="submit" class="btn btn-success" value="Actualizar" name="btn" >Guardar</button>
                                          <button type="reset" class="btn btn-info" value="Cancelar">Cancelar</button>
                                    </div>
                            </center>

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