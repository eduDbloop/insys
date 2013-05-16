<?php
    // Ausgabe von HTTP-Headern zum Unterbinden von Caching
  header("Content-type: image/png");
    header("Expires: Sun, 11 Aug 2002 05:00:00 GMT");
    header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");  
    header("Cache-Control: no-store, no-cache, must-revalidate");  
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");


	$bild = ImageCreateFromPNG("../images/stories/cad/insys_cad.png") or die("Bild kann nicht erstellt werden");
	 $farbe = imagecolorallocate($bild,54,43,42);
imagestring ( $bild, 5, 240, 25, "L�nge: $laenge mm", $farbe );
imagestringup ( $bild, 5, 25, 250, "Breite: $breite mm", $farbe );
imagestring ( $bild, 5, 150, 280, "Eckradius: $r mm", $farbe );
imagestringup ( $bild, 5, 570, 320, "Abstand Vorderkante: $auv mm", $farbe );
imagestring ( $bild, 5, 110, 360, "Abstand Seitenkante: $aus mm", $farbe );

	
ImagePNG($bild); 

?>