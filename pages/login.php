<?php
    include('../libs/basicas/config.php');
    include('../libs/autentificador/aut_mensaje_error.inc.php');
    global $s;
    global $errores;
    // le damos un nobre a la sesion (por si quisieramos identificarla)
    session_name($usuarios_sesion);
    // iniciamos sesiones
    session_start();
    // destruimos la session de usuarios.
    session_destroy();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Panel de <?php echo $ap_nombre_lg; ?>">
    <meta name="author" content="Perry Lee Daniels - insayd.com">

    <title><?php echo $ap_nombre_ct; ?> | Ingreso</title>
    <link rel="shortcut icon" href="../<?php echo $ap_ico; ?>" type="image/png" />

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center img-responsive">
                        <!--
                            <a href="../index.php"><img src="../<?php echo $ap_logo_login; ?>" alt="<?php echo $ap_alt_logo; ?>" height="" /></a> 3.0
                        -->
                        <a href="../index.php"><?php echo $ap_nombre_ct; ?></a> 1.0
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="divide-40">
                        <?PHP
                            // Mostrar error de Autentificacion.
                            if (isset($_GET['error_login'])){
                                $errores = $_GET['error_login'];
                                echo '<div class="alert alert-danger">';
                                echo '  <center><strong>Acceso Denegado</strong> <br> '. $error_login_ms[$errores] . '</center>';
                                echo '</div>';
                            };
                        ?>
                        </div>
                        <form role="form" action="valida.php" method="post">
                            <input class="text" name="fuente" type="hidden" value="administracion"/>
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="nicklogin" type="email" value="" autofocus autocomplete="off" required="required">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="passlogin" type="password" value="" autocomplete="off" required="required">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Ingrese el texto de la imágen siguiente"  id="tmptxt" name="tmptxt" class="col-sm-4" autocomplete="off" required="required">
                                    <center><br><img src="../libs/autentificador/captcha.php" width="100" height="30" class="img-rounded"/></center>
                                </div>
                                <!--
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Recordarme
                                    </label>
                                </div>
                                -->
                                <button type="submit" class="btn btn-lg btn-success btn-block">Ingresar</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<center><small class="text-primary"><i class="fa fa-copyright"></i> 2018 - Desarrollado por: </small><a href="http://titonsoft.com" target="_blank"><img src="../img/logo/titonsoft_c.svg" height="20" alt="Desarrollado por titonsoft.com" /></a></center>

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
