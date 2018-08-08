<?php
    include_once("../libs/basicas/config.php");
    include_once('../libs/autentificador/aut.php');

    include_once 'panel/i_globales.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include_once 'panel/i_head.php'; ?>
</head>

<body>
    <div id="wrapper" class="">

        <!-- Navigation -->
        <nav class="navbar navbar-default keyco-header navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Navegación</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><?php echo $ap_nombre_lg; ?></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <?php //include_once 'panel/i_mensajes.php'; ?>
                <?php //include_once 'panel/i_tareas.php'; ?>
                <?php //include_once 'panel/i_alertas.php'; ?>
                <?php include_once 'panel/i_usuario.php'; ?>
            </ul>
            <!-- /.navbar-top-links -->

            <?php include_once 'panel/i_menu.php'; ?>
            <!-- /.navbar-static-side -->
        </nav>

        <?php
            if (isset($_REQUEST["p"])) {

                include_once ''.$_REQUEST["p"];

            } else {
                include_once 'panel/intro.php';
            // include_once 'panel/info.php';
            }
        ?>

    </div>
    <!-- /#wrapper -->
</body>

</html>
