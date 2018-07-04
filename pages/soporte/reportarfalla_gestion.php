<?php 

$estatus    = htmlspecialchars($_REQUEST['estatus']);
$company    = htmlspecialchars($_REQUEST['institucion']) . ' Perfil: ' . htmlspecialchars($_REQUEST['condominio']);
$usuario    = htmlspecialchars($_REQUEST['usuario']);
$fecha      = htmlspecialchars($_REQUEST['fecha']);
$nombre     = htmlspecialchars($_REQUEST['nombre']);
$phone      = htmlspecialchars($_REQUEST['telefono']);
$email      = htmlspecialchars($_REQUEST['usuario']);
$tipo       = htmlspecialchars($_REQUEST['tipo']);
$message    = $_REQUEST['informacion'];

$objeto     = '['.$ap_nombre_ct.' - '.$company.'] Solicitud de soporte';

$cuerpo     = 'Mensaje desde <b>'.$ap_nombre_ct.'</b><br><br>';
$cuerpo     = $cuerpo . '<b>Nombre:</b> ' . $nombre . '<br>' ;
$cuerpo     = $cuerpo . '<b>Teléfono:</b> ' . $phone . '<br>' ;
$cuerpo     = $cuerpo . '<b>E-Mail:</b> ' . $email . '<br>' ;
$cuerpo     = $cuerpo . '<b>Compañia:</b> ' . $company . '<br>' ;
$cuerpo     = $cuerpo . '<b>Fecha:</b> ' . $fecha . '<br>' ;
$cuerpo     = $cuerpo . '<b>Tipo de Solicitud:</b> ' . $tipo . '<br>' ;
$cuerpo     = $cuerpo . '<b>Solicitud:</b> <br>' . $message . '<br>' ;

$cuerpotxt  = 'Mensaje desde '.$ap_nombre_ct.'\n';
$cuerpotxt  = $cuerpotxt . 'Nombre: ' . $nombre . '\n' ;
$cuerpotxt  = $cuerpotxt . 'Teléfono: ' . $phone . '\n' ;
$cuerpotxt  = $cuerpotxt . 'E-Mail: ' . $email . '\n' ;
$cuerpotxt  = $cuerpotxt . 'Compañia: ' . $company . '\n' ;
$cuerpotxt  = $cuerpotxt . 'Fecha: ' . $fecha . '\n' ;
$cuerpotxt  = $cuerpotxt . 'Tipo de Solicitud: ' . $tipo . '\n' ;
$cuerpotxt  = $cuerpotxt . 'Solicitud: ' . $message . '\n' ;

require '../libs/phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
/* GMAIL */
/*
$mail->SMTPDebug = 0;                                   // Enable verbose debug output 3

$mail->isSMTP();                                        // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                         // Specify main and backup SMTP servers  //smtp.gmail.com
$mail->SMTPAuth = true;                                 // Enable SMTP authentication
$mail->Username = 'web@insayd.com';                     // SMTP username
$mail->Password = 'giselle24.gt';                       // SMTP password
$mail->SMTPSecure = 'ssl';                              // Enable TLS encryption, `ssl` also accepted /465 gmail
$mail->Port = 465;                                      // TCP port to connect to    465 smtp.com / 'tls' = 587
*/

$mail->SMTPDebug = 0;                                   // Enable verbose debug output (3) debug (0) Produccion

$mail->isSMTP();                                        // Set mailer to use SMTP
$mail->Host = $ap_servidor_mail;                        // Specify main and backup SMTP servers
$mail->SMTPAuth = $ap_smtpauth_mail;                    // Enable SMTP authentication
$mail->Username = $ap_cuenta_mail;                      // SMTP username
$mail->Password = $ap_pass_mail;                        // SMTP password
$mail->SMTPSecure = $ap_forma_mail;                     // Enable TLS encryption, `ssl` also accepted
$mail->Port = $ap_puerto_mail;                          // TCP port to connect to

$mail->From = $email;
$mail->FromName = $name;
$mail->addAddress($ap_correo_mail, $ap_nombre_mail);    // Add a recipient
//$mail->addAddress('perrydaniels@gmail.com');          // Name is optional
$mail->addReplyTo($email, $name);
//$mail->addCC('rrhh@insayd.com');
//$mail->addBCC('perrydaniels@insayd.com');

$mail->WordWrap = $ap_wordwrap_mail;                    // Set word wrap to 50 characters
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML($ap_ishtml_mail);                         // Set email format to HTML

$mail->Subject = $objeto;
$mail->Body    = $cuerpo;
$mail->AltBody = $cuerpotxt;

if(!$mail->send()) {
    $mensaje1 = '<button type="button" class="btn btn-danger btn-circle btn-xl"><i class="fa fa-times"></i></button>';
    $mensaje2 = ' Mailer Error: ' . $mail->ErrorInfo;
    $mensaje3 = utf8_encode($ap_error_mail);
    $mensaje3 = $mensaje3 . '<br> Srv: ' . $ap_servidor_mail ;
} else {
    $mensaje1 = '<button type="button" class="btn btn-success btn-circle btn-xl"><i class="fa fa-check"></i></button>';
    $mensaje2 = utf8_encode('Mensaje enviado Satisfactoriamente!');
    $mensaje3 = utf8_encode('Gracias por usar nuestro servicio!');
    
}

?>

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><i class="fa fa-ambulance"></i> Solicitar Soporte Técnico</h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-md-12 text-center">
                    <?php echo $mensaje1; ?>
            </div>
            <div class="col-md-12 text-center">
                <div class="">
                    <h3><?php echo $mensaje2; ?></h3>
                    <p>
                        <?php echo $mensaje3; ?>
                    </p>
                    <div class="btn-group">
                        <!--<a href="panel.php?p=administracion/bancos_list.php" class="btn btn-default">Bancos</a>-->
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
