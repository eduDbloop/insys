<?php
	include('dbconnect.php');

	$fecha = date("d.m.Y - H:i");
	// Variables Marca y Modelo
	$mark = $_POST["drop_1"];
	$mod = $_POST["tier_two"];
	
	$data = mysql_query("SELECT * FROM kochfelder WHERE hersteller='$mark' AND model='$mod'")
	or die(mysql_error());
	
	while($daten = mysql_fetch_array($data)) {	

		$la = $daten['laenge'].' mm';
		$ba = $daten['breite'].' mm';
		$ea = $daten['eckradius'].' mm';

	}

	$aav = $_POST["laenge2"].' mm';
	$aas = $_POST["breite2"].' mm';
	
	require ('fpdf17/fpdf.php');
	
	class PDF extends FPDF{
	
		function Footer()
		{
			// Posicion a 1.5cm del final
			$this->SetY(-14);
			// Arial Italic 8
			$this->SetFont('Arial','I',8);
			// Numero de pagina
			//$this->Cell(0,10,'Seite '.$this->PageNo(),0,0,'C');
			$this->Cell(0,5,'mit freundlicher Unterstützung von www.insystec.eu');
			$this->SetX(-25);
			$this->Cell(0,5,'Seite 1/1');
		}
	}
	
	$pdf=new PDF();
	$pdf->AddPage();  // Agregar una pagina
	$pdf->Image('Bilder/Logo/Fertige Logos/InSYS_LogovArial.jpg',137,8,-138,-138);
	$pdf->Image('formulare/Skizze.jpeg',32,134,-101.5,-98);
	$pdf->Image('formulare/img.jpeg',38,235,-103,-103);
	$pdf->SetFont('Arial','B',20); // Letra Arial,Bold, Size 20
	$pdf->Cell(0,10,'InSYS Ausschnittberechnung');
	$pdf->Ln(13.5);
	$pdf->SetFont('Arial','I');
	$pdf->SetFontSize(8);
	$pdf->Cell(0,5,'erstellt am '.$fecha.' Uhr');
	$pdf->Ln(20);
	$pdf->SetFont('Arial','B',12); // Letra Arial,Bold, Size 20
	$pdf->Cell(0,10,$mark.' '.$mod);
	$pdf->Ln(12.5);
	$pdf->SetFont('Arial','B',12); // Letra Arial,Bold, Size 20
	$pdf->Cell(0,10,'Ausschnittmaße In der Arbeitsplatte:');
	$pdf->Ln(9);
	$pdf->SetFont('Arial'); // Letra Arial, Size 12
	$pdf->Cell(0,10,'Länge des Ausschnitts: '.$la);
	$pdf->Ln(8);
	$pdf->SetFont('Arial'); // Letra Arial, Size 12
	$pdf->Cell(0,10,'Breite des Ausschnitts: '.$ba);
	$pdf->Ln(8);
	$pdf->SetFont('Arial'); // Letra Arial, Size 12
	$pdf->Cell(0,10,'Eckradius des Ausschnitts: '.$ea);
	$pdf->Ln(8);
	$pdf->SetFont('Arial'); // Letra Arial, Size 12
	$pdf->Cell(0,10,'Abstand des Ausschnitts von der Vorderkante: '.$aav);
	$pdf->Ln(8);
	$pdf->SetFont('Arial'); // Letra Arial, Size 12
	$pdf->Cell(0,10,'Abstand des Ausschnitts von der Seitenkante: '.$aas);
	$pdf->Ln(41.5);
	$pdf->SetX(95);
	$pdf->SetFont('Times'); // Letra Times New Roman, 12
	$pdf->Cell(10,10,'Länge: '.$la);
	$pdf->Ln(35);
	$pdf->SetX(10);
	$pdf->SetFont('Times'); // Letra Times New Roman, 12
	$pdf->Cell(10,10,'Breite: ');
	$pdf->Ln(5);
	$pdf->Cell(10,10,$ba);
	$pdf->Ln(25);
	$pdf->SetX(70);
	$pdf->Cell(10,10,'Radius: '.$ea);	
	$pdf->Ln(5);
	$pdf->SetX(179);
	$pdf->Cell(10,10,'Abstand');
	$pdf->Ln(5);
	$pdf->SetX(179);
	$pdf->Cell(10,10,'Vorderkante:');
	$pdf->Ln(5);
	$pdf->SetX(179);
	$pdf->Cell(10,10,$aav);
	$pdf->Ln(7);
	$pdf->SetX(60);
	$pdf->Cell(10,10,'Abstand Seitenkante: '.$aas);

	
		// Nombre del Archivo de Salida
	$pdf->Output();
	echo "<br> Se ha generado el PDF";
	
?>