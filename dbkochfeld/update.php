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
	
			mysql_query("INSERT INTO kochfelder(Hersteller, Model, Lange, Breite, Eckradius) VALUES ('$hersteller[$a]','$model[$a]','$laenge[$a]','$breite[$a]','$eckradius[$a]')");		
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<script language="javascript">
if(confirm("Möchten Sie wieder zur Startseite?")) { document.location = 'http://www.insystec.eu';
} else {
	document.location = 'http://www.insystec.eu/dbkochfeld';
}

</script>
<body onLoad="index.php">
</body>
</html>