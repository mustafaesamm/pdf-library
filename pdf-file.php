<?php
$thedate=date("Y-m-d");
require('fpdf.php');
$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',36);
// $pdf->image('cbccerrotate.jpeg', 0, 0, 211,297.5);
// $pdf->image('cbc2.jpg', 221,300.5, 211,297.5);
// $pdf->Cell(1,15,'Hello World!');
// $pdf->Cell(1,1,'Hello World!');

$files = glob('thecer/*');
foreach($files as $file){ 
  if(is_file($file)) {

   
$pdf->Cell(380, 380, $pdf->Image($file,0,0,210.22,297.322,""));

// $pdf->Cell(380, 380, $pdf->Image('mustafa.jpg',0,0,211,0,""));
// $pdf->Cell(380, 380, $pdf->Image('leth.jpg',0,0,211,0,""));
//$pdf->Cell(0, 0, $pdf->Image('thecer\sameer.jpg',0,0,211,0,""));
}}

$pdf->Output('cbc course', 'i');
// $files = glob('thecer/*');
// foreach($files as $file){ 
//   if(is_file($file)) {
//     unlink($file);
//   }
// }

    
        

