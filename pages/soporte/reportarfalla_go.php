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
                <h1 class="page-header"><i class="fa fa-ambulance"></i> Solicitar Soporte Técnico</h1>
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
                                    <input class="text" name="p" type="hidden" value="soporte/reportarfalla_gestion.php"/>
                                    <input class="text" name="id" type="hidden" value="<?php echo $id; ?>"/>
                                    <input class="text" name="estatus" type="hidden" value="<?php echo $estatus; ?>"/>
                                    <div class="form-group col-lg-4">
                                        <label>Tipo de solicitud</label>
                                        <select id="tipo" class="form-control col-md-12" name="tipo" required >
                                            <?php
                                                $sql2="SELECT  id , nombre
                                                            FROM ap_catalogos
                                                            WHERE tipo_catalogo = 25 AND institucion = 1 
                                                            ORDER BY id";
                                                $resp2 = mysql_query($sql2);
                                            ?>
                                            <option value="" selected="selected" >Seleccionar</option>
                                            <?php 
                                                while($row2=mysql_fetch_assoc($resp2)){
                                                    print '<option value="'.$row2['nombre'].'" ';
                                                    if ($tipo == $row2['id']) { print ' selected="selected" '; };
                                                    print ' >'.utf8_encode($row2['nombre']).'</option>';
                                                };
                                            ?>
                                        </select>
                                    </div>
                                    <?php  if ($_SESSION['usuario_nivel'] == 1) { ?>
                                        <div class="form-group col-lg-4">
                                            <label>Institución</label>
                                            <select id="institucion" class="form-control col-md-12" name="institucion" required >
                                                <?php
                                                    $sql2="SELECT  id , nombre
                                                                FROM ap_instituciones
                                                                WHERE estatus = 1 
                                                                ORDER BY id";
                                                    $resp2 = mysql_query($sql2);
                                                ?>
                                                <option value="" selected="selected" >Seleccionar</option>
                                                <?php 
                                                    while($row2=mysql_fetch_assoc($resp2)){
                                                        print '<option value="'.$row2['nombre'].'" ';
                                                        if ($institucion == $row2['id']) { print ' selected="selected" '; };
                                                        print ' >'.utf8_encode($row2['nombre']).'</option>';
                                                    };
                                                ?>
                                            </select>
                                        </div>
                                    <?php
                                        } else {
                                            $plvalidarinst = " AND co.institucion = " . $_SESSION['usuario_institucion'] . " ";
                                            echo "<input class='text' name='institucion' id='institucion' type='hidden' value='" . $_SESSION['usuario_institucion'] . "'/>";
                                        }; 
                                    ?>
                                    <div class="form-group col-lg-4">
                                        <label>Perfil Empresa</label>
                                        <select id="condominio" class="form-control col-md-12" name="condominio" required >
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
                                                    print '<option value="'.$row2['nombre'].'" ';
                                                    if ($condominio == $row2['id']) { print ' selected="selected" '; };
                                                    print ' >'.utf8_encode($row2['nombre']).'</option>';
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label>Información / Solicitud / Descripción</label>
                                        <textarea class="form-control summernote" rows="3" id="informacion" name="informacion"  ></textarea>
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <label>Fecha</label>
                                        <input type="text" disabled="" class="form-control" id="fecha1" placeholder="Fecha (Automático)" name="fecha1" value="<?php echo utf8_encode($fecha); ?>">
                                        <input class="text" name="fecha" type="hidden" value="<?php echo utf8_encode($fecha); ?>"/>
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <label>Usuario</label>
                                        <input type="text" disabled="" class="form-control" id="usuario1" placeholder="Usuario (Automático)" name="usuario" value="<?php echo utf8_encode($usuario); ?>">
                                        <input class="text" name="usuario" type="hidden" value="<?php echo utf8_encode($usuario); ?>"/>
                                        <input class="text" name="telefono" type="hidden" value="<?php echo utf8_encode($telefono); ?>"/>
                                        <input class="text" name="nombre" type="hidden" value="<?php echo utf8_encode($nombre); ?>"/>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <?php if ($id == "0" or $id == "") { ?>
                                            <button type="submit" class="btn btn-success" value="Insertar" name="btn" ><i class="fa fa-envelope"></i> Enviar Solicitud</button>
                                        <?php } else { ?>
                                            <button type="submit" class="btn btn-warning" value="Actualizar" name="btn" >Modificar</button>
                                            <button type="submit" class="btn btn-danger" value="Borrar" name="btn" >Borrar</button>
                                        <?php }; ?>  
                                        <button type="reset" class="btn btn-inverse" value="Cancelar">Cancelar</button>
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
                height: 100,                 // set editor height
                lang: 'es-ES',
                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor
                toolbar: [
                    //[groupname, [button list]]

                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    //['font', ['strikethrough']],
                    //['fontsize', ['fontsize']],
                    //['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    //['height', ['height']],
                    ['insert', ['link', 'table', 'hr']],
                    ['misc', ['fullscreen', 'codeview', 'undo', 'redo']],
                ],
                focus: true,                 // set focus to editable area after initializing summernote
            });
        });
    </script>