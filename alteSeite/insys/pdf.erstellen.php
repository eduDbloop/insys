<?php
$timestamp = time();
 $datum = date("d.m.Y",$timestamp);
  $uhrzeit = date("H:i",$timestamp);
  
    
require('fpdf/fpdf.php');

class PDF extends FPDF
{
//Page header
function Header()
{
    //Logo
    $this->Image('../images/stories/LogoInSYS.png',150,8,50);
    //Arial bold 15
    $this->SetFont('Arial','B',20);
    //Move to the right
    //$this->Cell(80);
    //Title
    $this->Cell(120,10,'InSYS Ausschnittberechnung',0,2);
	//Line break
    $this->Ln(1);
}

//Page footer
function Footer()
{
    //Position at 1.5 cm from bottom
    $this->SetY(-15);
    //Arial italic 8
    $this->SetFont('Arial','I',8);
	 $this->Cell(0,10,'mit freundlicher Unterstützung von www.insystec.eu',0,0,'L');
    //Page number
    $this->Cell(0,10,'Seite '.$this->PageNo().'/{nb}',0,0,'R');
}
}

//Instanciation of inherited class
$pdf=new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','I',8);
$pdf->Cell(0,10,'erstellt am '.$datum.' - '.$uhrzeit.' Uhr',0,1);
$pdf->Ln(15);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,5,$hersteller.' '.$name,0,1);
$pdf->Ln(5);
$pdf->Cell(0,10,'Ausschnittmaße in der Arbeitsplatte:',0,1);
$pdf->SetFont('Arial','',12);
$pdf->Cell(0,8,'Länge des Ausschnitts: '.$laenge.'mm',0,1);
$pdf->Cell(0,8,'Breite des Ausschnitts: '.$breite.'mm',0,1);
$pdf->Cell(0,8,'Eckradius des Ausschnitts : '.$r.'mm',0,1);
$pdf->Cell(0,8,'Abstand des Ausschnitts von der Vorderkante: '.$auv.'mm',0,1);
$pdf->Cell(0,8,'Abstand des Ausschnitts von der Seitenkante: '.$aus.'mm',0,1);
//Bild
$pdf->Image('../images/stories/cad/insys_cad.png',32,134,150, 100);
$pdf->SetFont('Times','',12);
$pdf->Ln(35);
$pdf->Cell(85);
$pdf->Cell(0,5,'Länge: '.$laenge.'mm',0,1);
$pdf->Ln(30);
$pdf->Cell(0,5,'Breite:',0,1);
$pdf->Cell(0,5,$breite.'mm',0,1);
$pdf->Ln(20);
$pdf->Cell(60);
$pdf->Cell(0,5,'Radius: '.$r.'mm',0,1);
$pdf->Cell(169);
$pdf->Cell(0,5,'Abstand ',0,1);
$pdf->Cell(169);
$pdf->Cell(0,5,'Vorderkante: ',0,1);
$pdf->Cell(169);
$pdf->Cell(0,5,$auv.'mm',0,1);
$pdf->Ln(2);
$pdf->Cell(50);
$pdf->Cell(0,5,'Abstand Seitenkante: '.$aus.'mm',0,1);
$pdf->Image('bilder/falzinnenmass.png',38,235,60);


//beschriftung Bild
$pdf->Output();
?>