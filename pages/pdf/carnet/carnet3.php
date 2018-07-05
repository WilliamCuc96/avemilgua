<?php

// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');
include_once('lang/eng.php');

$id = $_REQUEST['id'];
$nombre = $_REQUEST['nombre'];
$nombre2 = $_REQUEST['nombre2'];
$apellido = $_REQUEST['apellido'];
$apellido2 = $_REQUEST['apellido2'];
$dpi = $_REQUEST['dpi'];
$codigo = $_REQUEST['codigo'];
$foto = $_REQUEST['foto'];

// create new PDF document
$custom_layout = array(85.5, 54);
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
$pdf->SetFont('helvetica', 'B', 9);

$pdf->AddPage('L');
$html = '';

$pdf->setJPEGQuality(75);

// -- set new background ---

// get the current page break margin
$bMargin = $pdf->getBreakMargin();
// get current auto-page-break mode
$auto_page_break = $pdf->getAutoPageBreak();
// disable auto-page-break
$pdf->SetAutoPageBreak(false, 0);
// set bacground image
$img_file = K_PATH_IMAGES.'Frente_Avemilgua_2014-01.jpg';
$pdf->Image($img_file, 0, 0, 85.5, 54, '', '', '', false, 300, '', false, false, 0);
//---------------------Text----------------------

$pdf->SetXY(5,22);
$pdf->Write(0,"Nombre:");
$pdf->SetXY(19,22);
$pdf->Write(0,$nombre);$pdf->Write(0,"   ");$pdf->Write(0,$nombre2);
//$pdf->SetXY(17,22);
//$pdf->Write(0,$nombre2);
$pdf->SetXY(5,27);
$pdf->Write(0,"Apellido:");
$pdf->SetXY(19,27);
$pdf->Write(0,$apellido);$pdf->Write(0,"   ");$pdf->Write(0,$apellido2);
//$pdf->SetXY(17,27);
//$pdf->Write(0,$apellido2);
$pdf->SetXY(5,32);
$pdf->Write(0,"DPI:");
$pdf->SetXY(19,32);
$pdf->Write(0,$dpi);
$pdf->SetXY(5,37);
$pdf->Write(0,"Codigo:");
$pdf->SetXY(19,37);
$pdf->Write(0,$codigo);
$pdf->writeHTMLCell(30, 15, 55, 18, '<img src="../../img/'.$foto.'">');
//---------------------Text----------------------

// restore auto-page-break status
$pdf->SetAutoPageBreak($auto_page_break, $bMargin);
// set the starting point for the page content
$pdf->setPageMark();

$bMargin = $pdf->getBreakMargin();

$pdf->lastPage();

// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('carnet.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
