<?php 
error_reporting(0); // 5
//ini_set('display_errors', 1); // 1
setlocale(LC_TIME,"es_ES");

    // Definición de Variables
    global $var_where1; $var_where2; $resp1; $resp2; $resp3; $sql1; $sql2; $sql3; $sql4; $row1; $row2; $row3; $row;
    global $conectar; $tt_id; $entorno; $mensaje1; $mensaje2; $mensaje3; $btn; $pl_url;
    
    global $codigo; $institucion; $condominio; $nit; $nombre; $tipo_doc; $no_doc; $fecha_doc;
    
    // Inicialización de variables
    $codigo = '';
    $institucion = ''; 
    $condominio = '';
    $nit = ''; 
    $nombre = ''; 
    $tipo_doc = ''; 
    $no_doc = ''; 
    $fecha_doc = '';
    $pl_url = '';
    
    // Asigna el valor que viene en el request
    if (!$codigo) { $codigo  = isset_or('codigo', '0'); };  
    if (!$institucion) { $institucion  = isset_or('institucion', '0'); };
    if (!$condominio) { $condominio  = isset_or('condominio', '0'); };
    if (!$tipo_doc) { $tipo_doc  = isset_or('tipo_doc', '0'); };
    if (!$no_doc) { $no_doc  = isset_or('no_doc', '0'); };
    if (!$pl_url) { $pl_url  = isset_or('pl_url', '0'); };
    if (!$fecha_doc) { $fecha_doc  = isset_or('fecha_doc', date("Y-m-d")); };
    
   
?>

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><i class="fa fa-book fa-fw"></i> Reglamento Interno</h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-md-12 text-center">
                    <iframe src="../upload/<?php echo $pl_url; ?>" style="width:100%; height:600px;" frameborder="0"></iframe>
                             <?php  // echo "Entre aca: ". $pl_url; exit;  ?>
            </div>
            
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

<?php include_once 'panel/i_foot.php'; ?>

                      
                            
                        
