<?php

    //Definición de Variables locales
    global $usuario; $fecha; $institucion; $estatus;
    
    //Inicialización de Variables locales
    $usuario = '';
    $fecha = '';
    $institucion = '';
    $estatus = '';
    
    // Asignar el valor que viene en el request a variables
    //if (!$id) { $id  = isset_or('id', '0'); };
    //$fecha = date("Y-m-d");
    $fecha = date("Y-m-d H:i:s");
    $usuario = utf8_encode($_SESSION['usuario_login']);
    $institucion = $_SESSION['usuario_ninstitucion'];
    $telefono = $_SESSION['usuario_celular'];
    $nombre = utf8_encode($_SESSION['usuario_nombre']);
    $estatus = 1;

    //Programacion de Funcionalidad para mostrar datos de la pagina
    
?>
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><i class="fa fa-database"></i> Consultas a la base de datos</h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-info-circle"></i> Ingrese en el siguiente formulario toda la información necesaria para solicitar soporte
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form role="form" method="POST" action="index.php">
                                    <input class="text" name="p" type="hidden" value="soporte/sql_gestion.php"/>
                                    <input class="text" name="id" type="hidden" value="<?php echo $id; ?>"/>
                                    <input class="text" name="estatus" type="hidden" value="<?php echo $estatus; ?>"/>
                                    
                                    <div class="form-group col-lg-12">
                                        <label>MySql Querys</label>
                                        <textarea class="form-control summernote" rows="3" id="sqltext" name="sqltext"  ></textarea>
                                    </div>
                                    
                                    <div class="form-group col-lg-12">
                                        <button type="submit" class="btn btn-success" value="query" name="btn" ><i class="fa fa-play"></i> Ejecutar Consulta</button>
                                        <button type="reset" class="btn btn-inverse" value="Cancelar"><i class="fa fa-recycle"></i> Limpiar Editor</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.col-lg-12 (nested) -->
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

<?php include_once 'panel/i_foot.php'; ?>

<!-- Responsive-WYSIWYG-Text-Editor JavaScript -->
    <script src="../js/editor/summernote.min.js" type="text/javascript"></script>
    <script src="../js/editor/summernote.es-ES.js" type="text/javascript"></script>
    
<!-- CUSTOM SCRIPT -->
    <script type="text/javascript">
	$(document).ready( function() {
            // Area de texto
            $('.summernote').summernote({
                height: 300,                 // set editor height
                lang: 'es-ES',
                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor
                
                toolbar: [
                    //[groupname, [button list]]

                    //['style', ['bold', 'italic', 'underline', 'clear']],
                    //['font', ['strikethrough']],
                    //['fontsize', ['fontsize']],
                    //['color', ['color']],
                    //['para', ['ul', 'ol', 'paragraph']],
                    //['height', ['height']],
                    //['insert', ['link', 'table', 'hr']],
                    ['misc', ['codeview']],
                ],
                focus: true,                 // set focus to editable area after initializing summernote
                oninit: function() {
                    $("div.note-editor button[data-event='codeview']").click();
                    $("div.note-editor button[data-event='codeview']").hide();
                }
            });
        });
    </script>