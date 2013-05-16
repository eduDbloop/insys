<?php
require('fpdf.php'); // Se invoca a la clase FPDF

class PDF extends FPDF // Creo una clase PDF que hereda FPDF
{
	function Header()
	{
		global $title; // Variable global
		
		// Arial Bold 10
		$this->SetFont('Arial','B',15);
		// Calculamos ancho y posicion del titulo
		$v = $this->GetStringWidth($title)+6;
		$this->SetX((210-$v)/2);
		// Colores de los bordes, fondo y texto
		$this->SetDrawColor(0,80,100);
		$this->SetFillColor(230,230,0);
		$this->SetTextColor(220,50,50);
		// Ancho del Borde(1mm)
		$this->SetLineWidth(1);
		//Titulo
		$this->Cell($v,9,$title,1,1,'C',1);
		// Salto de linea
		$this->Ln(10);
	}
	
	function Footer()
	{
		// Posicion a 1.5cm del final
		$this->SetY(-15);
		// Arial Italic 8
		$this->SetFont('Arial','I',8);
		// Color del texto en gris
		$this->SetTextColor(128);
		// Numero de pagina
		$this->Cell(0,10,'Pagina '.$this->PageNo(),0,0,'R');
	}
	
	function ErstellDatum()
	{
		// Obtengo los datos de este momento
		$today = array();
		$today = getdate(); 
		$label = $today['mday']. ".". $today['mon']. ".". $today['year']. " - ". $today['hours']. ":". $today['minutes'];
		// Arial 12
		$this->SetFont('Arial','',12);
		// Color de Fondo
		//$this->SetFillColor(200,220,255);
		// Titulo
		$this->Cell(0,6,"Erstellt am $num : $label",0,1,'L',1);
		// Salto de linea
		$this->Ln(4);
	}
	
	function ChapterBody($file)
	{
		// Se lee el fichero
		$f=fopen($file,'E');
		$txt=fread($f,filesize($file));
		fclose($f);
		// Times 12
		$this->SetFont('Times','',12);
		// Se imprime el texto justificado
		$this->MultiCell(0,5,$txt);
		// Salto de linea
		$this->Ln();
		// Cita en italica
		$this->SetFont('','I');
		$this->Celi(0,5,'(fin del extracto)');
	}
	
	function PrintChapter($file)
	{
		$this->AddPage();
		$this->ErstellDatum();
		$this->ChapterBody($file);
	}
}


$pdf = new PDF(); // Se crea el objeto
$title='lnSYS Ausschnittberechnung';
$pdf -> SetTitle($title); // Se agrega el titulo al doc
$pdf -> SetAuthor('Tischlerei Steffen u. Sohn GmbH & Co. KG');
$pdf -> PrintChapter(1,'Siemens EF 785001','siem_kf.txt');
$pdf -> PrintChapter(2,'Maße des Kochfelds','siem_kf2.txt');
$pdf -> Output();
?>