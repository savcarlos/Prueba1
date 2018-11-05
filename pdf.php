<?php
include 'plantilla.php';
include("conexion.php");
$sql="SELECT * FROM Alumnos";
    $resultado= mysqli_query($conexion, $sql);

$pdf = new PDF();
//$pdf->AliasPages();

$pdf->AddPage();
$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',12);
$pdf->Cell (10,6,'Id',1,1,'C',1);
$pdf->Cell (30,6,'Nombre',1,0,'C',1);
$pdf->Cell (30,6,'Apellido Paterno',1,0,'C',1);
$pdf->Cell (30,6,'Apellido Materno',1,0,'C',1);

$pdf->SetFont('Arial','',9);

while($filas=mysqli_fetch_assoc($resultado))        
{
$pdf->Cell (10,6,$filas['idAlumnos'],1,1,'C',1);
$pdf->Cell (30,6,$filas['Nombre'],1,0,'C',1);
$pdf->Cell (30,6,$filas['Apellido_Paterno'],1,0,'C',1); 
$pdf->Cell (30,6,$filas['Apellido_Materno'],1,0,'C',1); 

}
$pdf->Output();

?>