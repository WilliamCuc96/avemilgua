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
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

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

$img_file = K_PATH_IMAGES.'no-user.png';

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

//$pdf->writeHTMLCell(40, 40, 85, 10, '<img src="'.$img_file.'">');
$pdf->SetFont('helvetica', 'B', 14);
$pdf->SetXY(2,50);
$pdf->Cell(206, 0, $nombre." ".$nombre2, 0, 1, 'C', 0, '', 1);
$pdf->SetXY(2,57);
$pdf->Cell(206, 0, $apellido." ".$apellido2, 0, 1, 'C', 0, '', 1);
$pdf->SetFont('helvetica', 'B', 9);
$pdf->SetXY(5,70);
//$pdf->Write(0,"GRADO MILITAR:");
$pdf->Cell(45, 10, "GRADO MILITAR", 1, 1, 'A', 0, '', 1);
$pdf->SetXY(50,70);
$pdf->Cell(155, 10, $beneficiario, 1, 1, 'A', 0, '', 1);
$pdf->SetXY(5,80);
$pdf->Cell(45, 10, "DPI", 1, 1, 'A', 0, '', 1);
$pdf->SetXY(50,80);
$pdf->Cell(155, 10, $dpi, 1, 1, 'A', 0, '', 1);
$pdf->SetXY(5,90);
$pdf->Cell(45, 10, "NO. DE REGISTRO:", 1, 1, 'A', 0, '', 1);
$pdf->SetXY(50,90);
$pdf->Cell(155, 10, $codigo, 1, 1, 'A', 0, '', 1);
$pdf->SetXY(5,100);
$pdf->Cell(45, 10, "GENERO", 1, 1, 'A', 0, '', 1);
$pdf->SetXY(50,100);
$pdf->Cell(155, 10, $nuevoGenero, 1, 1, 'A', 0, '', 1);
$pdf->SetFont('helvetica', 'B', 9);
$pdf->Write(0,$fechafinal);
$pdf->writeHTMLCell(40, 40, 85, 10, '<img src="'.$foto.'">');
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
$pdf->Output('carnet.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
