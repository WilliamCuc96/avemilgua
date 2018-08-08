<?php

require_once('tcpdf_include.php');
include_once('lang/eng.php');
//include_once('../../libs/basicas/config.php');

//$query = 'SELECT * FROM av_datos_personales';
//$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

//$id = $_REQUEST['id'];

$id = $_REQUEST['id'];
$nombre = $_REQUEST['nombre'];
$nombre2 = $_REQUEST['nombre2'];
$apellido = $_REQUEST['apellido'];
$apellido2 = $_REQUEST['apellido2'];
$dpi = $_REQUEST['dpi'];
$codigo = $_REQUEST['codigo'];
$foto = $_REQUEST['foto'];
$beneficiario = $_REQUEST['gradoMilitar'];
$genero = $_REQUEST['genero'];
$fecha_nacimiento = $_REQUEST['fecha_nacimiento'];
$estado_civil = $_REQUEST['estado_civil'];
$profesion = $_REQUEST['profesion'];
$direccion = $_REQUEST['direccion'];
$correo = $_REQUEST['correo'];
$telefono = $_REQUEST['telefono'];
$fecha_baja = $_REQUEST['fecha_baja'];
$municipio = $_REQUEST['municipio'];
$compania = $_REQUEST['compania'];
$puesto = $_REQUEST['puesto'];
$fecha_alta = $_REQUEST['fecha_alta'];
$motivo_baja = $_REQUEST['motivo_baja'];
$computo_servicios = $_REQUEST['computo_servicios'];
$sueldo_mensual = $_REQUEST['sueldo_mensual'];
$zona_militar = $_REQUEST['zona_militar'];
$armas_servicios = $_REQUEST['armas_servicios'];
$fecha_acta = date('Y-m-d');

$date = new DateTime($fecha_acta);
$timestamp = $date->getTimestamp();

$nuevafechaacta = date("d-m-Y", $timestamp);

$year = date("Y", strtotime($nuevafechaacta));
$dia = date("d", strtotime($nuevafechaacta));
$mes = date("m", strtotime($nuevafechaacta));

    switch ($mes){
        case "01":
            $month = "ENERO";
            $fechafinal = $dia." DE ".$month." DE ".$year;
            break;
        case "02":
            $month = "FEBRERO";
            $fechafinal = $dia." DE ".$month." DE ".$year;
            break;
        case "03":
            $month = "MARZO";
            $fechafinal = $dia." DE ".$month." DE ".$year;
            break;
        case "04":
            $month = "ABRIL";
            $fechafinal = $dia." DE ".$month." DE ".$year;
            break;
        case "05":
            $month = "MAYO";
            $fechafinal = $dia." DE ".$month." DE ".$year;
            break;
        case "06":
            $month = "JUNIO";
            $fechafinal = $dia." DE ".$month." DE ".$year;
            break;
        case "07":
            $month = "JULIO";
            $fechafinal = $dia." DE ".$month." DE ".$year;
            break;
        case "08":
            $month = "AGOSTO";
            $fechafinal = $dia." DE ".$month." DE ".$year;
            break;
        case "09":
            $month = "SEPTIEMBRE";
            $fechafinal = $dia." DE ".$month." DE ".$year;
            break;
        case "10":
            $month = "OCTUBRE";
            $fechafinal = $dia." DE ".$month." DE ".$year;
            break;
        case "11":
            $month = "NOVIEMBRE";
            $fechafinal = $dia." DE ".$month." DE ".$year;
            break;
        case "12":
            $month = "DICIEMBRE";
            $fechafinal = $dia." DE ".$month." DE ".$year;
            break;
    }

if($genero = $_REQUEST['genero'] == "M"){
	$nuevoGenero = "Masculino";
}else{
	$nuevoGenero = "Femenino";
}


//$nombre2 = $_REQUEST['nombre2'];
//$apellido = $_REQUEST['apellido'];
//$apellido2 = $_REQUEST['apellido2'];
//$dpi = $_REQUEST['dpi'];
//$codigo = $_REQUEST['codigo'];
//$foto = $_REQUEST['foto'];
//$beneficiario = $_REQUEST['beneficiario'];
//$fechafinal = $_REQUEST['fecha_vencimiento_carnet'];

// create new PDF document
//$custom_layout = array(85.5, 54);
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, $custom_layout, true, 'UTF-8', false);

// set document information

// remove default header/footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(10, PDF_MARGIN_TOP, 10);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------
$pdf->setBarcode(date('Y-m-d H:i:s'));

$pdf->SetDisplayMode('fullpage', 'SinglePage', 'UseNone');

// set font
$pdf->SetFont('helvetica', 'B', 7);

$pdf->AddPage('P', 'A4');
$html = '';

$pdf->setJPEGQuality(75);

$img_file = K_PATH_IMAGES.'logo.png';

// -- set new background ---

// get the current page break margin
$bMargin = $pdf->getBreakMargin();
// get current auto-page-break mode
$auto_page_break = $pdf->getAutoPageBreak();
// disable auto-page-break
$pdf->SetAutoPageBreak(false, 0);
// set bacground image
//$img_file = K_PATH_IMAGES.'Frente_Avemilgua_2014-01.jpg';
//$pdf->Image($img_file, 0, 0, 85.5, 54, '', '', '', false, 300, '', false, false, 0);
//---------------------Text----------------------
$pdf->SetFont('helvetica', 'B', 12);
$pdf->SetXY(57,20);
$pdf->Write(0,"ASOCIACION DE VETERANOS MILITARES ");
$pdf->SetXY(80,25);
$pdf->Write(0," DE GUATEMALA ");
$pdf->SetXY(70,50);
$pdf->Write(0,"CERTIFICACION DE SERVICIOS");
$pdf->SetFont('helvetica', 'B', 10);
$pdf->SetXY(161,43);
$pdf->Write(0,"AVEMILGUA");
$pdf->writeHTMLCell(40, 40, 15, 10, '<img src="'.$img_file.'">');
$pdf->SetFont('helvetica', 'B', 9);
$pdf->SetXY(15,175);
//$pdf->Cell(100, 0, $nombre." ".$nombre2." ".$apellido." ".$apellido2, 0, 1, 'L', 0, '', 1);

//$pdf->SetXY(15,180);
//$pdf->Cell(100, 0, $dpi, 0, 1, 'L', 0, '', 1);
//$pdf->SetXY(45,80);
//$pdf->Write(0,"El infraescrito Coronel de Infanteria DEM en situación de retiro Carlos Padilla");
$pdf->SetXY(27,77);
$pdf->Cell(150, 0, "El infraescrito Coronel de Infanteria DEM en situación de retiro Carlos Padilla Secretario General", 0, 1, 'L', 0, '', 1);
$pdf->SetXY(27,81);
$pdf->Cell(150, 6, "de la asociación de Veteranos Militares de Guatemala CERTIFICA:", 0, 1, 'L', 0, '', 1);
$pdf->SetXY(27,90);
$pdf->Cell(150, 6, "que para el efecto tuvo a la vista los registros de veteranos militares de Guatemala en donde muestra la siguiente información:", 0, 1, 'L', 0, '', 1);
$pdf->SetXY(27,99);
$pdf->Cell(150, 6, "* NOMBRE: ".$nombre." ".$nombre2." ".$apellido." ".$apellido2, 0, 1, 'L', 0, '', 1);
$pdf->SetXY(27,105);
$pdf->Cell(150, 6, "* FECHA DE ALTA:   ".$fecha_alta, 0, 1, 'L', 0, '', 1);
$pdf->SetXY(27,111);
$pdf->Cell(150, 6, "* FECHA DE BAJA:   ".$fecha_baja, 0, 1, 'L', 0, '', 1);
$pdf->SetXY(27,117);
$pdf->Cell(150, 6, "* MOTIVO:   ".$motivo_baja, 0, 1, 'L', 0, '', 1);
$pdf->SetXY(27,123);
$pdf->Cell(150, 6, "* COMPUTO DE SERVICIO:   ".$computo_servicios, 0, 1, 'L', 0, '', 1);
$pdf->SetXY(27,129);
$pdf->Cell(150, 6, "* CODIGO:   ".$codigo, 0, 1, 'L', 0, '', 1);
$pdf->SetXY(27,135);
$pdf->Cell(150, 6, "* DPI:   ".$dpi, 0, 1, 'L', 0, '', 1);
$pdf->SetXY(27,141);
$pdf->Cell(150, 6, "* PUESTO:   ".$puesto, 0, 1, 'L', 0, '', 1);
$pdf->SetXY(27,147);
$pdf->Cell(150, 6, "* ZONA MILITAR:   ".$zona_militar, 0, 1, 'L', 0, '', 1);
$pdf->SetXY(27,153);
$pdf->Cell(150, 6, "* ARMAS/SERVICIOS:   ".$armas_servicios, 0, 1, 'L', 0, '', 1);
$pdf->SetXY(27,163);
$pdf->Cell(150, 6, "Presto sus servicios en el ejercito de Guatemala.", 0, 1, 'L', 0, '', 1);
$pdf->SetXY(27,173);
$pdf->Cell(150, 6, "Se extiende la presente certificación en duplicado, original para el interesado y una copia", 0, 1, 'L', 0, '', 1);
$pdf->SetXY(27,179);
$pdf->Cell(150, 6, "al archivo del ejercito de Guatemala en la fecha ".$fechafinal.".", 0, 1, 'L', 0, '', 1);
$pdf->SetXY(5,220);
$pdf->Cell(200, 6, "------------------------------------------------------------------", 0, 1, 'C', 0, '', 1);
$pdf->SetXY(5,225);
$pdf->Cell(200, 6, "SECRETARIO GENERAL", 0, 1, 'C', 0, '', 1);

//$pdf->Write(0,"GRADO MILITAR:");

$pdf->SetFont('helvetica', 'B', 9);
$pdf->writeHTMLCell(40, 40, 150, 10, '<img src="'.$foto.'">');
//---------------------Text----------------------

// restore auto-page-break status
$pdf->SetAutoPageBreak($auto_page_break, $bMargin);
// set the starting point for the page content
$pdf->setPageMark();

$bMargin = $pdf->getBreakMargin();


$pdf->Ln();

$pdf->lastPage();

// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('reporte.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
