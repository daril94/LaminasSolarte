<?php

session_start();
require_once 'mostrarDatos.php';
require('../PDF/fpdf.php');
require_once '../library/connDB.php';

$provincia = $_SESSION['Vendedor'];

ob_start();
mostrarDatos(1);
$count = 0;
$x = 75;
$datos = ob_get_contents();
$dat = explode(";", $datos);
$data = str_replace("G", "", $dat, $contador);
natsort($data);
date_default_timezone_set("America/Bogota");
$fechaActual = date('d-m-Y H:i:s');



ob_end_clean();
$pdf = new FPDF('P', 'mm', 'A4');

$pdf->SetMargins(30, 25, 30);

$pdf->SetAutoPageBreak(true, 25);
$pdf->SetTopMargin(0);
$pdf->SetLeftMargin(0);
$pdf->SetRightMargin(0);
$pdf->AddPage();

$pdf->SetFont('Helvetica', 'B', 15);
$pdf->SetFillColor(243, 136, 0);

$pdf->SetTextColor(255);

$pdf->Cell(0, 25, utf8_decode('Número de pedido'), 0, 0, 'C', true);
$pdf->Ln();
$pdf->SetFont('Helvetica', '', 13);
$pdf->SetFillColor(243, 136, 0);
$pdf->SetTextColor(255);
$pdf->Cell(0, -15, utf8_decode($_SESSION['Pedido']), 0, 0, 'C');
$pdf->Cell(-50, -15, utf8_decode($fechaActual), 0, 0, 'C');



$pdf->SetY(25);
$pdf->SetLeftMargin(0);
$pdf->SetTextColor(0);
$pdf->SetLeftMargin(0);
$pdf->Cell(0, 1, utf8_decode(''), 0, 0, 'L', true);
$pdf->Ln();
$pdf->SetTextColor(135, 135, 135);
$pdf->SetFont('Helvetica', '', 13);
$pdf->Cell(0, 10, utf8_decode('Datos del comprador'), 0, 0, 'C');
$pdf->Ln();
$pdf->Cell(0, 1, utf8_decode(''), 0, 0, 'L', true);

$pdf->SetY(40);

$pdf->SetLeftMargin(20);
$pdf->SetTextColor(0);

$pdf->SetFont('Helvetica', 'B', 13);
$pdf->Cell(0, 8, utf8_decode('Nombre: '), 0, 0, 'L');
$pdf->SetX(40);
$pdf->SetFont('Helvetica', '', 13);
$pdf->Cell(0, 8, utf8_decode($_SESSION['Nombre']), 0, 0, '');
$pdf->Ln();

$pdf->SetFont('Helvetica', 'B', 13);
$pdf->Cell(0, 8, utf8_decode('Email: '), 0, 0, 'L');
$pdf->SetX(35);
$pdf->SetFont('Helvetica', '', 13);
$pdf->Cell(0, 8, utf8_decode(isset($_SESSION['Email']) ? $_SESSION['Email'] : ""), 0, 0, 'L');
$pdf->Ln();

$pdf->SetFont('Helvetica', 'B', 13);
$pdf->Cell(0, 8, utf8_decode('Telefono: '), 0, 0, 'L');
$pdf->SetX(42);
$pdf->SetFont('Helvetica', '', 13);
$pdf->Cell(0, 8, utf8_decode($_SESSION['Telefono']), 0, 0, 'L');
$pdf->Ln();

$pdf->SetFont('Helvetica', 'B', 13);
$pdf->Cell(0, 8, utf8_decode('Direccion: '), 0, 0, 'L');
$pdf->SetX(45);
$pdf->SetFont('Helvetica', '', 13);
$pdf->Cell(0, 8, utf8_decode($_SESSION['Direccion']), 0, 0, 'L');
$pdf->Ln();

$pdf->SetFont('Helvetica', 'B', 13);
$pdf->Cell(0, 8, utf8_decode('Cedula-Ruc: '), 0, 0, 'L');
$pdf->SetX(48);
$pdf->SetFont('Helvetica', '', 13);
$pdf->Cell(0, 8, utf8_decode($_SESSION['CcRuc']), 0, 0, 'L');
$pdf->Ln();
if ($provincia != 'Provincia') {

    $pdf->SetFont('Helvetica', 'B', 13);
    $pdf->Cell(0, 8, utf8_decode('Vendedor: '), 0, 0, 'L');
    $pdf->SetX(44);
    $pdf->SetFont('Helvetica', '', 13);
    $pdf->Cell(0, 8, utf8_decode($_SESSION['Vendedor']), 0, 0, 'L');
    $pdf->Ln();

    $pdf->SetFont('Helvetica', 'B', 13);
    $pdf->Cell(0, 8, utf8_decode('Tipo de entrega: '), 0, 0, 'L');
    $pdf->SetX(57);
    $pdf->SetFont('Helvetica', '', 13);
    $pdf->Cell(0, 8, utf8_decode($_SESSION['Sector']), 0, 0, 'L');
    $pdf->Ln();
}

$pdf->Ln();
$pdf->SetLeftMargin(0);
$pdf->Ln();
$pdf->Ln();


if ($provincia != 'Provincia') {
$pdf->SetY(100);}
else {
$pdf->SetY(85);
}
$pdf->SetLeftMargin(0);
$pdf->Cell(0, 1, utf8_decode(''), 0, 0, 'L', true);
$pdf->Ln();
$pdf->SetTextColor(135, 135, 135);
$pdf->SetFont('Helvetica', '', 13);
$pdf->Cell(0, 10, utf8_decode('Pedido Realizado'), 0, 0, 'C');
$pdf->Ln();
$pdf->Cell(0, 1, utf8_decode(''), 0, 0, 'L', true);


$pdf->Ln();
$pdf->Ln();
$pdf->SetTextColor(243, 136, 0);
$pdf->SetFont('Helvetica', '', 12);
$pdf->Cell(0, 10, utf8_decode('Número de lámina = cantidad de láminas'), 0, 0, 'C');

$pdf->Ln();
$pdf->Ln();

$pdf->SetFont('Helvetica', '', 12);
$pdf->SetTextColor(0);
$pdf->SetLeftMargin(20);

$pdf->SetTextColor(0);
foreach ($data as $ds) {
    $pdf->SetLeftMargin(20);
    $count++;
    $pdf->Cell(50, 10, $ds);
//echo $count;    
    if ($count % 4 == 0) {
        $pdf->Ln();
    }
}




$pdf->Ln();


$pdf->Output('../pdfGenerado/Pedido' . $_SESSION['Pedido'] . '.pdf', 'F');


require_once 'emailClient.php';
