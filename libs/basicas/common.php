<?php
//$idid = str_replace(" ", "&nbsp;&nbsp;", str_pad('1', 10, " ", STR_PAD_LEFT));
//$idid = str_replace(" ", "0", str_pad('1', 10, " ", STR_PAD_LEFT));

//date_default_timezone_set('UTC');
setlocale(LC_TIME,"es_ES"); 

//-------------------------------------------------
// Obtiene los parametros especificos de un URL 
// o por POST asignandoles un valor por default
// Hecho por Perry Daniels - 22JUN2011
//-------------------------------------------------
function isset_or($param_name, $alternate = NULL) { 
//echo $param_name . " - " . $alternate . "<br>";
if(isset($_POST[$param_name])) {
	//echo $param_name . " -POST- " . $alternate . "<br>";
    return (isset($_POST[$param_name])) ? $_POST[$param_name] : $alternate;
  } elseif (isset($_GET[$param_name])) {
  	//echo $param_name . " -GET- " . $alternate . "<br>";
    return (isset($_GET[$param_name])) ? $_GET[$param_name] : $alternate;
  };
}

//-------------------------------------------------
// Obtiene los parametros especificos de un URL 
// o por POST cuando es un select multiple
// Hecho por Perry Daniels - 22JUN2011
//-------------------------------------------------	
function get_selectmultiple($param_name) 
{
// inicia c�digo para recoger datos multiples de un select
  if (isset_or($param_name)){
  	$param_value=isset_or($param_name);
    foreach ($param_value as $arreglo){
        $param_value .= "$arreglo,";       
    }
  	$param_value = substr($param_value,0,strlen($param_value)-1);
  	$param_value = str_replace('Array', '', $param_value);
	
	return $param_value;
  };
}

function quitar($mensaje) {
	$mensaje = str_replace("<","<",$mensaje);
	$mensaje = str_replace(">",">",$mensaje);
	$mensaje = str_replace("\'","'",$mensaje);
	$mensaje = str_replace('\"','"',$mensaje);
	$mensaje = str_replace("\\\\","\\",$mensaje);
	return $mensaje;
}

function get_diftime($pldfecha1,$pldfecha2,$plddif) {
	$date1=$pldfecha1;
	$date2=$pldfecha2;
	$plddif= $plddif;
	
	$s = strtotime($date1)-strtotime($date2);
	$t = $s;
	$d = intval($s/86400);
	$s -= $d*86400;
	$h = intval($s/3600);
	$s -= $h*3600;
	$m = intval($s/60);
	$s -= $m*60;
	
	$dif= (($d*24)+$h).hrs." ".$m."min"; // horas
	$dif2= $d.$space.dias." ".$h.hrs." ".$m."min"; //dias
	
	switch($plddif){
		  case 'd':
			return $dif2;
			break;
		  case 'h':
			return $dif;
			break;
		  case 't':
			return $s;
			break;
		  case 't2':
			return $d;
			break;
		  default:
			return 0;
		};
};

function mail_attachment ($mail_to, $mail_to_name, $mail_cc, $mail_bcc, $email_from, $name_from, $mailtext, $subject, $archivo_name){
  // Segundo se prepara el correo a enviar
	$mail = new phpmailer();
	
	$mail->PluginDir = "includes/";
	$mail->Mailer 	 = "smtp";
	$mail->Host 	 = "smtp.gmail.com"; 
	$mail->Port 	 = 465; 
	$mail->SMTPAuth  = true;
	$mail->Username  = "perrydaniels@gmail.com";
	$mail->Password  = "javirala"; 
	$mail->From 	 = $email_from;
	$mail->FromName  = $name_from;
	$mail->ConfirmReadingTo	= $email_from;
	$mail->Timeout	 = 120;
	$mail_to 		 = $mail_to;
	$mail_to_name    = $mail_to_name;
	/*
	$mail->PluginDir = "includes/";
	$mail->Mailer 	 = "smtp";
	$mail->Host 	 = "mail.renap.gob.gt"; 
	$mail->Port 	 = 25; 
	$mail->SMTPAuth  = false;
	$mail->Username  = "infoweb@renap.gob.gt";
	$mail->Password  = "Aeryn2009"; 
	$mail->From 	 = $email_from;
	$mail->FromName  = $name_from;
	$mail->ConfirmReadingTo	= $email_from;
	$mail->Timeout	 = 120;
	$mail_to 		 = $mail_to;
	$mail_to_name    = $mail_to_name;
	*/
 	$mail->ClearAddresses(); 						//borra todos los destinatarios anteriores
	$mail->AddAddress($mail_to, $mail_to_name);
	$mail->AddCC($mail_cc); 
	$mail->AddBCC($mail_bcc);
	$mail->Subject 	 = $subject;
	$mail->Body 	 = $mailtext;
	$mail->AltBody 	 = $texto;  					// poner como texto puro
	
// Rutina necesaria para enviar archivos
	if ($achivo !="none") {
		$mail->AddAttachment("adjuntos/".$archivo_name,$archivo_name);
	}
// Fin de la Rutina necesaria para enviar archivos
	
	$exito = $mail->Send(); 
 
	$intentos=1;
	while ((!$exito) && ($intentos < 5)) {
		sleep(5);
		//echo $mail->ErrorInfo;
		$exito = $mail->Send();
		$intentos=$intentos+1;
	}

	if(!$exito)
	{
		$e_resultado = $e_resultado . "Error de envio a ".$mail_to;
		$e_resultado = $e_resultado . " ".$mail->ErrorInfo."<br>";
	}
	else
	{
		$e_resultado = $e_resultado . "Mensaje enviado a ".$mail_to_name. "<br>";
	}
  };
// Fin de la funcion

//-------------------------------
// Funcion que te permite sumar dias a una fecha sin contar sabado y domingos
//-------------------------------

function sumasdiasemana($fecha,$dias)
{
	$datestart= strtotime($fecha);
	$diasemana = date('N',$datestart); // es para obtener el dia de la semana ejemplo (Jueves = 4) entonces N = 4
	
	$totaldias = $diasemana+$dias;
	
	$findesemana =  intval( $totaldias/5) *2 ; 
	
	$diasabado = $totaldias % 5 ; 
	if ($diasabado==6) $findesemana++;
	if ($diasabado==0) $findesemana=$findesemana-2;
	
	$total = (($dias+$findesemana) * 86400)+$datestart ;  //multiplicacion 86400 de numero de horas en el a�o 
	
//	return $twstart=date('Y-m-d', $total);
	return $twstart=date('d-m-Y', $total);
}

//echo sumasdiasemana(date("d-m-Y H:m:s"),15);
////////////////////////////////////////////////////

//This works in 5.2.3
//First function turns SSL on if it is off.
//Second function detects if SSL is on, if it is, turns it off.

//==== Redirect... Try PHP header redirect, then Java redirect, then try http redirect.:
function redirect($url){
    if (!headers_sent()){    //If headers not sent yet... then do php redirect
        header('Location: '.$url); exit;
    }else{                    //If headers are sent... do java redirect... if java disabled, do html redirect.
        echo '<script type="text/javascript">';
        echo 'window.location.href="'.$url.'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
        echo '</noscript>'; exit;
    }
}//==== End -- Redirect

//==== Turn on HTTPS - Detect if HTTPS, if not on, then turn on HTTPS:
function SSLon(){
    if($_SERVER['HTTPS'] != 'on'){
        $url = "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        redirect($url);
    }
}//==== End -- Turn On HTTPS

//==== Turn Off HTTPS -- Detect if HTTPS, if so, then turn off HTTPS:
function SSLoff(){
    if($_SERVER['HTTPS'] == 'on'){
        $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        redirect($url);
    }
}//==== End -- Turn Off HTTPS

////
function existe_rol($com_rol,$com_nivel){
  $arreglo_rol=array();
  $arreglo_rol=explode(",",$com_rol);
//  $arreglo_rol[COUNT($otro)+1]=1; //ingresamos al arreglo el rol de administrador
  $arreglo_nivel=array();
  $arreglo_nivel=explode(",",$com_nivel);
 // $arreglo_nivel[COUNT($arreglo_nivel)+1]=0; //ingresamos al arreglo el permiso de todos
  for($r=0; $r<=COUNT($arreglo_rol)-1 ; $r=$r+1){ 
    for($s=0; $s<=COUNT($arreglo_nivel)-1 ; $s=$s+1){ 
      if ($arreglo_rol[$r]==$arreglo_nivel[$s]) return true;//$existe="1";
    };
   };
}

//***********
function strtolowerExtended($str)
{
    $low = array(chr(193) => chr(225), //�
      chr(201) => chr(233), //�
      chr(205) => chr(237), //�
      chr(211) => chr(243), //�
      chr(218) => chr(250), //�
      chr(220) => chr(252), //�
      chr(209) => chr(241)  //�
    );
        return strtolower(strtr($str,$low));
}
 
//-------------------------------
// Obtain specific URL Parameter from URL string
//-------------------------------
function get_param($param_name)
{
  global $HTTP_POST_VARS;
  global $HTTP_GET_VARS;

  $param_value = "";
  if(isset($HTTP_POST_VARS[$param_name]))
    $param_value = $HTTP_POST_VARS[$param_name];
  else if(isset($HTTP_GET_VARS[$param_name]))
    $param_value = $HTTP_GET_VARS[$param_name];

  return $param_value;
} 
 
function suma_fechas($sfecha,$sndias)
            
{
            
      if (preg_match("/[0-9]{1,2}\/[0-9]{1,2}\/([0-9][0-9]){1,2}/",$sfecha))
            
              list($sdia,$smes,$sano)=split("/", $sfecha);
            
      if (preg_match("/[0-9]{1,2}-[0-9]{1,2}-([0-9][0-9]){1,2}/",$sfecha))
            
              list($sdia,$smes,$sano)=split("-",$sfecha);
        $snueva = mktime(0,0,0, $smes,$sdia,$sano) + $sndias * 24 * 60 * 60;
        $snuevafecha=date("Y-m-d",$snueva);
            
      return ($snuevafecha);  
            
}
 
////////////////////////////////////////////////////
    //Convierte fecha de normal a mysql
    ////////////////////////////////////////////////////

    function cambiaf_a_mysql($xdate){
    # ================================================== ========
    # ==== Recibe una fecha con formato dd-mm-aa ====
    # ==== Devuelve una fecha con formato aaaa-mm-dd hh:mm:ss ====
    # ================================================== ========

        $xday=substr($xdate,0,2);
        $xmonth=substr($xdate,3,2);
        $xyear=substr($xdate,6,4);
        $xdate=$xyear."-".$xmonth."-".$xday;
        return ($xdate);
    }
    
    ////////////////////////////////////////////////////
    //Convierte fecha de mysql a normal
    ////////////////////////////////////////////////////
    function cambiaf_a_normal($xdate){
    # ================================================== ========
    # ==== Recibe una fecha con formato aaaa-mm-dd hh:mm:ss ====
    # ==== Devuelve una fecha con formato dd-mm-aa ====
    # ================================================== ========

        $xyear=substr($xdate,0,4);
        $xmonth=substr($xdate,5,2);
        $xday=substr($xdate,8,2);
        $xdate=$xday."-".$xmonth."-".$xyear;
        return ($xdate);
    }

    // Generar un codigo de color aleatorio
    function randomColor() {
    $str = '#';
    for($i = 0 ; $i < 6 ; $i++) {
        $randNum = rand(0 , 15);
        switch ($randNum) {
            case 10: $randNum = 'A'; break;
            case 11: $randNum = 'B'; break;
            case 12: $randNum = 'C'; break;
            case 13: $randNum = 'D'; break;
            case 14: $randNum = 'E'; break;
            case 15: $randNum = 'F'; break;
        }
        $str .= $randNum;
    }
    return $str;
}

?>
