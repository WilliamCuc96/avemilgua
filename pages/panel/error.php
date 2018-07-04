<?php
global $setpagejq; $ajaxpath; $errmsg;
$errmsg = '';
if (!$errmsg) { $errmsg  = isset_or('errmsg', ''); };
if (!$errmsg) { $errmsg  = 'Error desconocido!<br>  <i class="fa fa-user-secret"></i> esta máquina se autodestruirá en 1 minuto .... je, je, je ...'; };
?>
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><i class="fa fa-exclamation-circle"></i> Error de ejecución!</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-md-12 text-center">
                            <button type="button" class="btn btn-danger btn-circle btn-xl"><i class="fa fa-times"></i></button>
                        </div>
                        <div class="col-md-12 text-center">
                            <div class="">
                                <h1>Atención</h1>
                                <h3 class='text-danger'>
                                    <?php echo $errmsg; ?>
                                </h3>
                                
                            </div>
                        </div>
            <div class="col-lg-12">
                
                        
                        
                <br><br><br />
                
                <!-- /.table-responsive -->
                    <div class="well well-sm">
                        <h4><i class="fa fa-info-circle"></i> Instrucciones</h4>
                        <ul>
                            <li>Es posible que el sistema esté fallando, si cree necesario reportar este error haga click en el boton siguiente y llene el formulario!</li>
                        </ul>
                        
                    </div>
            </div>
            
            <center>
                            <div class="btn-group" > 
                                    <a class="btn btn-danger" target="" href="index.php?p=soporte/reportarfalla_go.php"><i class="fa fa-ambulance"></i> Reportar la falla</a>
                                    <a class="btn btn-success" target="" href="index.php"><i class="fa fa-tachometer"></i> Ir al tablero de Administración</a>
                            </div>
                            </center>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

<?php include_once 'panel/i_foot.php'; ?>