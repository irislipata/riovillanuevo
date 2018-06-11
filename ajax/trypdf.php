<?php
use setasign\Fpdi\Fpdi;

// setup the autoload function
require_once '../autoload.php';

$pdf = new Fpdi();
$pdf->AddPage();
$pdf->SetFont('Arial');
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFontSize('10');
$pdf->SetFont('Arial', 'B', '9');
$pdf->SetXY(0, 100);
$pdf->Write(0, "Hello World");
$pdf->Output();
?>