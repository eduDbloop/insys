<?php
$_valor = $_GET['valor'];
$o = 0;
$file = fopen("txt\Kochfeld.txt","r");

	while(!feof($file))
	{
		$daten = explode('.',fgets($file)); 
		if($daten[0] == $_valor) {
			$o++;
			$data = $daten[1];
			$_arreglo[] = array('id' => $data, 'data' => $data);
		}
	}

fclose($file);


echo json_encode($_arreglo);
?>