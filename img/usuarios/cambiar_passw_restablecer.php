<?php 
    // Definición de Variables
    global $var_where; $resp; $conectar; $sql1; $sql2; $sql3; $sql4; $tt_id; $entorno; 
    global $caracteres; $longitud; $url; $pag_referida; $redir;
    global $nick; $password; $password2; $institucion; $btn; $resp; $mensaje1; $mensaje2; $mensaje3;

    function generar_password($longitud)
	{
	  $caracteres = 'ABCDEFGHIJKLMNPQRSTUVWXYZabcdefghijklmnpqrstuvwxyz123456789';
	  $password = '';
	  for ($i=0; $i<$longitud; ++$i) $password .= substr($caracteres, (mt_rand() % strlen($caracteres)), 1);
	  return $password;
	}
        
    $conectar = conectar();
    
    // Asignación de valores de Variables
    $nick   = isset_or('nick', '');   
    $btn    = isset_or('btn', '');
    
    $sql2 = "SELECT u.nick
               FROM ap_usuarios u
              WHERE nick ='".$nick."'";
    
 //   $resp = mysql_query($sql2) or die(header ("Location:  $redir?error_login=4"));
    $resp = mysql_query($sql2);

    // miramos el total de resultado de la consulta (si es distinto de 0 es que existe el usuario)
    if (mysql_num_rows($resp) != 0) {

        // Llamando a la funcion para generar clave nueva
        $password = generar_password(8);

        switch ($btn) {
            case "Actualizar":  // Modificar
                $sql1 = " UPDATE ap_usuarios SET
                            password = '".$password."'
                            WHERE nick = '".$nick."'
                        ";
                break;
        } // End switch

        if (mysql_query($sql1)){
            $tt_id=mysql_insert_id(); // retorna el ultimo id creado
            $mensaje1 = '<button type="button" class="btn btn-success btn-circle btn-xl"><i class="fa fa-check"></i></button>';
            $mensaje2 = 'Cambio de Clave exitosa';
            $mensaje3 = 'Usuario: <b>'.$nick.'</b> <br>Clave nueva: <b>'.$password.'</b>';
        } else {
            $mensaje1 = '<button type="button" class="btn btn-danger btn-circle btn-xl"><i class="fa fa-times"></i></button>';
            $mensaje2 = 'Error inesperado';
            $mensaje3 = 'La clave no pudo ser modificada, intentelo de nuevo!';
            $resp = 0;
        }
    	
    } else {
    	$sql1 = "Usuario no existe";
    	$mensaje1 = '<button type="button" class="btn btn-danger btn-circle btn-xl"><i class="fa fa-times"></i></button>';
    	$mensaje2 = 'Usuario no existe';
	$mensaje3 = 'La clave no pudo ser modificada, intentelo de nuevo!';
    }; // End if

?>

<?php

//error_reporting(E_ALL);
error_reporting(E_STRICT);

date_default_timezone_set('America/Guatemala');

require_once('librerias/phpmailer/class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail             = new PHPMailer();

$body             = file_get_contents('contents.html');
$body 	= 'Esta es una prueba de su mensaje!<br>'.'Usuario: <b>'.$nick.'</b> <br>Clave nueva: <b>'.$password.'</b>';
$body             = preg_replace('/[\]/','',$body);

$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = "mail.insayd.com"; 	   // SMTP server
$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
$mail->Username   = "web@insayd.com";  	   // GMAIL username
$mail->Password   = "kukulkan24";          // GMAIL password

$mail->SetFrom('web@insayd.com', 'Insayd.com');

$mail->AddReplyTo("web@insayd.com","Insayd.com");

$mail->Subject    = "Cambio de clave de sistema";

$mail->AltBody    = 'Esta es una prueba de su mensaje!<br>'.'Usuario: <b>'.$nick.'</b> <br>Clave nueva: <b>'.$password.'</b>'; // optional, comment out and test

$mail->MsgHTML($body);

$address = "perry@insayd.com";
$mail->AddAddress($address, "Perry Daniels xx");

//$mail->AddAttachment("images/phpmailer.gif");      // attachment
//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>insayd.com | Restablecer Clave</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- STYLESHEETS --><!--[if lt IE 9]><script src="js/flot/excanvas.min.js"></script><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->
	<link rel="stylesheet" type="text/css" href="css/cloud-admin.css" >
	
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- DATE RANGE PICKER -->
	<link rel="stylesheet" type="text/css" href="js/bootstrap-daterangepicker/daterangepicker-bs3.css" />
	<!-- FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
</head>
<body id="not-found-bg">
    <div class="overlay"></div>
    <!-- PAGE -->
    <section id="page">
        <div class="row">
            <div class="col-md-12">
                <div class="divide-100"></div>
            </div>
        </div>
        <div class="row">
            <div class="container">
            <div class="col-md-12 not-found">
               <div class="error">
                      <?php echo utf8_encode($mensaje1); ?>
               </div>
            </div>
            <div class="col-md-5 not-found">
               <div class="content">
                    <h3><?php echo utf8_encode($mensaje2); ?></h3>
                    <p>
                        <?php echo utf8_encode($mensaje3); ?>
                        <br>
<?php 
if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}?>
                    </p>
                    <form action="index.php">
                        <div class="input-group">
                            <span class="input-group-btn">                   
                                <button type="submit" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Regresar al ingreso</button>
                            </span>
                        </div>
                    </form>
<!-- SEPARADOR -->
<?php 
/*
	// if ($entorno==1) {
		include_once("librerias/basicas/data.php"); 
		echo "<br><br><b>Query:</b><br><br>" . $sql2;
		echo "<br><br><b>Query:</b><br><br>" . $sql1;
		echo "<br><br>";
	// };
*/
?>
<!-- /SEPARADOR -->
                </div>
            </div>
            </div>
        </div>
    </section>

    <!--/PAGE -->
    <!-- JAVASCRIPTS -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- JQUERY -->
    <script src="js/jquery/jquery-2.0.3.min.js"></script>
    <!-- JQUERY UI-->
    <script src="js/jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.min.js"></script>
    <!-- BOOTSTRAP -->
    <script src="bootstrap-dist/js/bootstrap.min.js"></script>


    <!-- DATE RANGE PICKER -->
    <script src="js/bootstrap-daterangepicker/moment.min.js"></script>

    <script src="js/bootstrap-daterangepicker/daterangepicker.min.js"></script>
    <!-- SLIMSCROLL -->
    <script type="text/javascript" src="js/jQuery-slimScroll-1.3.0/jquery.slimscroll.min.js"></script><script type="text/javascript" src="js/jQuery-slimScroll-1.3.0/slimScrollHorizontal.min.js"></script>
    <!-- CUSTOM SCRIPT -->
    <script src="js/script.js"></script>
    <script>
        jQuery(document).ready(function() {		
            App.setPage("widgets_box");  //Set current page
            App.init(); //Initialise plugins and elements
        });
    </script>
    <!-- /JAVASCRIPTS -->
</body>
</html>