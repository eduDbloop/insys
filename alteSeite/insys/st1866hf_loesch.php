<?php include('auth.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Datensatz l&ouml;schen</title>
<link href="../templates/jooorange/css/template_css_ohne_bg.css" rel="stylesheet" type="text/css" />
</head>

<body>
<br />
<table><tr><td valign="top"><? include("inc.nav.php"); include_once 'config.php'; ?></td><td>
<h1>Kochfeld l&ouml;schen</h1><br />
<?php
    
$db = mysql_connect($dbhost, $dbuser, $dbpass);
      mysql_select_db($dbname,$db);


if ($auswahl == 0){$res = mysql_db_query($dbname,"select * from insys_kochfeld where ID='$ID'");}
	  if ($auswahl == 1){$res = mysql_db_query($dbname,"select * from insys_spuele where ID='$ID'");}
 
   		   $num = mysql_num_rows($res);
		   
		   if ($num==0)
      echo "Fehler: keinen passenden Datensatz gefunden";
  
   for ($i=0; $i<$num; $i++)
   { 
   
    $hersteller = mysql_result($res, $i, "hersteller");
	$name = mysql_result($res, $i, "name");
	$laenge = mysql_result($res, $i, "laenge");
	  $breite = mysql_result($res, $i, "breite");
		if ($auswahl == 0){$staerke = mysql_result($res, $i, "staerke");}
	  if ($auswahl == 1){$d = mysql_result($res, $i, "d");}
	
	 $aufmass = mysql_result($res, $i, "aufmass");
	  $r = mysql_result($res, $i, "r");
	echo "Soll ";
	if ($auswahl == 0){echo "Kochfeld";}
	  if ($auswahl == 1){echo "Sp&uuml;le";}
	echo " <strong>$hersteller $name</strong> mit folgenden Daten wirklich gel&ouml;scht werden? <br /><br />";  
   echo "<table style='table-layout:fixed' border='0'>
		<tr>
 		 <td style='width:250px'>Hersteller:</td>
 		 <td >$hersteller</td>
		  </tr>
		  <tr>
		  <td style='width:250px'>Modell:</td>
		  <td >$name</td>
		  </tr>
		<tr>
		  <td style='width:250px'>L&auml;nge:</td>
		  <td >$laenge mm</td>
		  </tr>
		<tr><td>Breite:</td>
		<td>$breite mm</td></tr>
		<tr>
		  <td>";
		  if ($auswahl == 0){echo "Glasst&auml;rke:";}
	  if ($auswahl == 1){echo "Dicke:";}
	  echo "</td>
		  <td>";
		   if ($auswahl == 0){echo $staerke;}
	  if ($auswahl == 1){echo $d;}		  
		  echo " mm</td></tr>
		  <tr>
		  <td>Aufma&szlig;:</td>
		  <td>$aufmass mm</td></tr>
		<tr>
		  <td>Eckradius:</td>
		  <td>$r mm</td></tr>
			</table>
				 ";
				
	     }
		
   mysql_close($db);
		
	?>

<?php 
if ($zurueck)


?>
<br />
<table>
<tr><td><form name="loeschen" action="st1866hf_loesch2.php?auswahl=<?php echo $auswahl; ?>&ID=<?php echo $ID; ?>" method="post" >
  <input type="submit" name="loeschen" value="L&ouml;schen" />
</form></td><td><form name="zurueck" action="st1866hf_a.php?auswahl=<?php echo $auswahl; ?>" method="post" >
  <input type="submit" name="zurueck" value="Abbrechen" />
</form></td></tr>
</table>


     
        
</td></tr></table>		 
</body>
</html>
