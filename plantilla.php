<?php
require 'fpdf/fpdf.php';
class PDF extends FPDF
{
    function Header(){
        
        
        $this->SetFont('Arial','B',15);
        $this->Cell(30);
        $this->Cell(120,10,'Reporte de Alumnos',0,0,'C');
        
        $this->Ln(20);
    }
    

}


?>