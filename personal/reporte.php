<?php
require_once 'plantilla.php';
require_once '../../.././personal/modelo/gestiondao.php';
ob_clean();
$dao=new GestionDao();
$usuarios=$dao->estudianteinasistencia();
$pdf=new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(30,6,'NUMERO ID',1,0,'C',1);
$pdf->Cell(40,6,'NOMBRE',1,0,'C',1);
$pdf->Cell(40,6,'APELLIDO',1,0,'C',1);
$pdf->Cell(20,6,'FECHA',1,0,'C',1);
$pdf->Cell(25,6,'CARGO',1,0,'C',1);
$pdf->Cell(20,6,'GRADO',1,0,'C',1);
$pdf->Cell(20,6,'FALTA',1,0,'C',1);
$pdf->SetFont('Arial','',10);
$pdf->Ln();
foreach($usuarios as $usuario){
    $pdf->Cell(30,6,utf8_decode($usuario["identidad_id"]),1,0,'C');
    $pdf->Cell(40,6,utf8_decode($usuario["nombre"]),1,0,'C');
    $pdf->Cell(40,6,utf8_decode($usuario["apellido"]),1,0,'C');
    $pdf->Cell(20,6,utf8_decode($usuario["fecha"]),1,0,'C'); 
    $pdf->Cell(25,6,utf8_decode($usuario["nombre_cargo"]),1,0,'C'); 
    $pdf->Cell(20,6,utf8_decode($usuario["grado"]),1,0,'C'); 
    $pdf->Cell(20,6,utf8_decode($usuario["excusa"]),1,0,'C'); 

    $pdf->Ln();
}
$pdf->Output();


?>


