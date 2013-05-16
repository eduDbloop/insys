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


if ($auswahl == 0){$res = mysql_db_query($dbname,"select * from insys_hersteller_kochfeld where ID='$ID'");}
	  if ($auswahl == 1){$res = mysql_db_query($dbname,"select * from insys_hersteller_spuele where ID='$ID'");}
 
   		   $num = mysql_num_rows($res);
		   
		   if ($num==0)
      echo "Fehler: keinen passenden Datensatz gefunden";
  
   for ($i=0; $i<$num; $i++)
   { 
   
    $hersteller = mysql_result($res, $i, "hersteller");
	
	echo "Soll ";
	if ($auswahl == 0){echo "Kochfeldhersteller";}
	  if ($auswahl == 1){echo "Sp&uuml;lenhersteller";}
	echo " <strong>$hersteller</strong> aus der Auswahl auf Insystec.eu wirklich gel&ouml;scht werden? <br /><br />";  
   				
	     }
		
   mysql_close($db);
		
	?>

<?php 
if ($zurueck)


?>
<br />
<table>
<tr><td><form name="loeschen" action="st1866hf_hersteller_loesch2.php?auswahl=<?php echo $auswahl; ?>&ID=<?php echo $ID; ?>" method="post" >
  <input type="submit" name="loeschen" value="L&ouml;schen" />
</form></td><td><form name="zurueck" action="st1866hf_hersteller.php?auswahl=<?php echo $auswahl; ?>" method="post" >
  <input type="submit" name="zurueck" value="Abbrechen" />
</form></td></tr>
</table>


     
        
</td></tr></table>		 
</body>
</html>
