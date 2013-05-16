<?php
 header("Content-type: application/vnd-ms-excel"); 
 header("Content-Disposition: attachment; filename=InSYS_IR.xls");
?>

<?php
  //Beginn Kochfeld
   if ($auswahl == 0)
   {
     echo "<h1>InSYS Kochfelder</h1><br />";
	$tabelle="insys_kochfeld";
   }
   
   //Beginn Spuele
   if ($auswahl == 1)
   {
     echo "<h1>InSYS Sp&uuml;len</h1><br />";
$tabelle="insys_spuele";
	
   }
   
     
   	  $db = mysql_connect('db96.puretec.de', 'dbo169981072', 'jusxbDhz');
mysql_select_db("db169981072",$db);
// Sortierung der Spalten
if ($spalte)
 {
 $res = mysql_db_query("db169981072","select * from $tabelle ORDER BY $spalte $sort");
 }
 else
{ $res = mysql_db_query("db169981072","select * from $tabelle");}
   		   $num = mysql_num_rows($res);
		   
		   if ($num==0)
      echo "keinen Datensatz gefunden";?>
   	 
    
  <table border="1" rules="groups">
  <tr>
  <td colspan="3">Alle Ma&szlig;angaben in mm</td>
  <td colspan="5"><h3><? if ($auswahl == 0){echo "Kochfeld";}
	  if ($auswahl == 1){echo "Sp&uuml;len";}	 ?>ma&szlig;e</h3></td><td colspan="3"><h3>Ausschnittma&szlig;e</h3></td></tr>
 <tr bgcolor="#9999FF"> <td><h3>ID</h3></td><td><h3>Hersteller</h3></td><td><h3>Modell</h3></td><td><h3>L&auml;nge</h3></td><td><h3>Breite</h3></td><td><h3>
  <? if ($auswahl == 0){echo "St&auml;rke";}
	  if ($auswahl == 1){echo "Dicke";}?>
 </h3></td><td><h3>Aufma&szlig;</h3></td><td><h3>Radius</h3></td><td><h3>L&auml;nge
     AU</h3></td><td><h3>Breite AU</h3></td><td><h3>Radius AU</h3></td>  </tr>
 <!-- Sortierspalte -->
 
  <?php
   for ($i=0; $i<$num; $i++)
   {	// 0 ist Kochfeld und 1 ist Spüle
        $id = mysql_result($res, $i, "id");
		$hersteller = mysql_result($res, $i, "hersteller");
		$name = mysql_result($res, $i, "name");
	  $laenge = mysql_result($res, $i, "laenge");
	  $breite = mysql_result($res, $i, "breite");
	 //berechnung der IR Maße Kochfeld
 if ($auswahl == 0){$IRlaenge = $laenge+10.8;
  $IRbreite = $breite+10.8;
  $IRr = $r+5.4;}
	  //berechnung der IR Maße Spüle
	  if ($auswahl == 1){$IRlaenge = $laenge+7.8;
  $IRbreite = $breite+7.8;
  $IRr = $r+3.9;}
  
     
	  if ($auswahl == 0){$staerke = mysql_result($res, $i, "staerke");
	  $staerke = str_replace( ".", ",", $staerke );}
	  if ($auswahl == 1){$d = mysql_result($res, $i, "d");
	  $d = str_replace( ".", ",", $d );
	  }
	  $aufmass = mysql_result($res, $i, "aufmass");
	  $r = mysql_result($res, $i, "r");
	  
	  //Punkt durch Komma ersetzten
	   $laenge = str_replace( ".", ",", $laenge );
  $breite = str_replace( ".", ",", $breite );
  $aufmass = str_replace( ".", ",", $aufmass);
  $r = str_replace( ".", ",", $r );
  $IRlaenge = str_replace( ".", ",", $IRlaenge );
  $IRbreite = str_replace( ".", ",", $IRbreite  );
  $IRr = str_replace( ".", ",", $IRr );
	  
	  
if($Hintergrundfarbe == "lightgrey")
    {
        $Hintergrundfarbe = "white";
    }
    else
    {
        $Hintergrundfarbe = "lightgrey";
    }
	  
	  
echo     "<tr bgcolor='$Hintergrundfarbe'><td>$id</td><td>$hersteller</td><td>$name</td><td>$laenge </td><td>$breite</td><td>";
	  if ($auswahl == 0){echo $staerke;}
	  if ($auswahl == 1){echo $d;}	  
	   echo "</td><td>$aufmass</td><td>$r</td><td>$IRlaenge</td><td>$IRbreite</td><td>$IRr</td></tr>";
    }?>
	</table>
	
	<?php
 
   mysql_close($db); ?>