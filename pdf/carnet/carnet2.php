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
$fecha_vencimiento_carnet = $_REQUEST['fecha_vencimiento_carnet'];
$beneficiario = $_REQUEST['beneficiario'];

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
$pdf->SetFont('helvetica', 'B', 7);

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
//---------------------Text----------------------

$pdf->SetFont('helvetica', 'B', 12);
$pdf->SetXY(5,22);
$pdf->Cell(45, 0, $nombre." ".$nombre2, 0, 1, 'C', 0, '', 1);
//$pdf->Cell(45, 0, "William Osveli", 0, 1, 'C', 0, '', 1);
//$pdf->Write(0,"Nombre:");
$pdf->SetXY(19,22);
//$pdf->Write(0,$nombre);$pdf->Write(0,"   ");$pdf->Write(0,$nombre2);
//$pdf->SetXY(17,22);
//$pdf->Write(0,$nombre2);
//$pdf->SetXY(5,27);
//$pdf->Cell(45, 0, $apellido." ".$apellido2, 0, 1, 'C', 0, '', 1);
$pdf->SetXY(19,27);
$pdf->Write(0,$apellido);$pdf->Write(0,"   ");$pdf->Write(0,$apellido2);
//$pdf->SetXY(17,27);
//$pdf->Write(0,$apellido2);
$pdf->SetFont('helvetica', 'B', 7);
$pdf->SetXY(5,37);
$pdf->Write(0,"DPI:");
$pdf->SetXY(19,37);
$pdf->Write(0,$dpi);
$pdf->SetXY(5,41);
$pdf->Write(0,"Codigo:");
$pdf->SetXY(19,41);
$pdf->Write(0,$codigo);
$pdf->SetXY(5,45);
$pdf->Write(0,"Beneficiario:");
$pdf->SetXY(19,45);
$pdf->Write(0,$beneficiario);
$pdf->SetXY(5,49);
$pdf->Write(0,"Vence:");
$pdf->SetXY(15,49);
$pdf->Write(0,$fecha_vencimiento_carnet);
$pdf->writeHTMLCell(30, 15, 54, 18, '<img src="'.$foto.'">');
//---------------------Text----------------------

// restore auto-page-break status
$pdf->SetAutoPageBreak($auto_page_break, $bMargin);
// set the starting point for the page content
$pdf->setPageMark();

$bMargin = $pdf->getBreakMargin();




$pdf->AddPage('L');
$bMargin = $pdf->getBreakMargin();
// get current auto-page-break mode
$auto_page_break = $pdf->getAutoPageBreak();
// disable auto-page-break
$pdf->SetAutoPageBreak(false, 0);
$pdf->writeHTMLCell(23, 28, 60, 24, '<img src="images/Firma_02.png" />');
$pdf->writeHTMLCell(14, 19, 43, 24, '<img src="images/Sello_Transparente.png" />');
$pdf->writeHTMLCell(23, 28, 20, 24, '<img src="images/Firma_01.png" />');
$pdf->writeHTMLCell(14, 19, 4, 24, '<img src="images/Sello_Transparente.png" />');
$pdf->SetXY(18,2);
$pdf->Write(0,"Se extiende el presente carnet");
$pdf->SetXY(12.5,5);
$pdf->Write(0,"como identificacion de veterano militar");
$pdf->SetXY(10,8);
$pdf->Write(0,"AVEMILGUA no se responsabiliza del mal");
$pdf->SetXY(19,11);
$pdf->Write(0,"uso que se le de a este carnet.");
$pdf->SetXY(9.5,15);
$pdf->SetFont('helvetica', 'B', 10);
$pdf->Write(0,"POR EL HONOR Y LA DIGNIDAD DEL");
$pdf->SetXY(19,19);
$pdf->Write(0,"EJERCITO DE GUATEMALA");


$style = array(
    'position' => '',
    'align' => 'L',
    'stretch' => false,
    'fitwidth' => true,
    'cellfitalign' => '',
    'border' => false,
    'hpadding' => 'auto',
    'vpadding' => 'auto',
    'fgcolor' => array(0,0,0),
    'bgcolor' => false, //array(255,255,255),
    'text' => false,
    'font' => 'helvetica',
    'fontsize' => 8,
    'stretchtext' => 4
);
$pdf->SetXY(30,49);
$pdf->SetFont('helvetica', 'B', 8);
$pdf->Write(0,"12345678901234");
$pdf->Cell(1, 1, '', 0, 1);
$pdf->SetXY(10,37);
$pdf->write1DBarcode('0980980980980', 'C39', '', '', '', 13, 0.4, $style, 'L');

$pdf->Ln();

$pdf->lastPage();

// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('carnet.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
