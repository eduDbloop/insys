<?php 
	include('dbconnection.php');
	$filas = count($_POST['hersteller']);
	
	for( $i = 0 ; $i < $filas ; $i++) {
		
		$hersteller[] = $_POST['hersteller'][$i];
		$model[] = $_POST['model'][$i];
		$laenge[] = $_POST['laenge'][$i];
		$breite[] = $_POST['breite'][$i];
		$eckradius[] = $_POST['eckradius'][$i];
		
	}
	
	for($a = 0; $a< $filas;$a++) {
	
			mysql_query("INSERT INTO spuelen(Hersteller, Model, Lange, Breite, Eckradius) VALUES ('$hersteller[$a]','$model[$a]','$laenge[$a]','$breite[$a]','$eckradius[$a]')");		
	}

	
?>
