<?php include('auth.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Datensatz &auml;ndern</title>
<link href="../templates/jooorange/css/template_css_ohne_bg.css" rel="stylesheet" type="text/css" />
</head>

<body>
<br />
<table><tr><td valign="top"><? include("inc.nav.php"); include_once 'config.php'; ?></td><td>
<h1>IR-Ma&szlig;e <?php if ($auswahl == 0){echo "Kochfeld";}
	  if ($auswahl == 1){echo "Sp&uuml;le";} ?> &auml;ndern</h1>
<br />
<span class="fehler"><strong>Achtung:<br />
Alle &Auml;nderungen wirken sich Systemweit auf die Inlayrahmenberechnung
aus.</strong></span><br /><br />
<?php
  
$db = mysql_connect($dbhost, $dbuser, $dbpass);

     if ($auswahl == 0){$sqlab = "select * from insys_masse where art='kochfeld'";}
	  if ($auswahl == 1){$sqlab = "select * from insys_masse where art='spuele'";}  
 

   $res = mysql_db_query($dbname, $sqlab);

   $art = mysql_result($res, 0, "art");
		$lau = mysql_result($res, 0, "lau");
	  $bau = mysql_result($res, 0, "bau");
	  $rau = mysql_result($res, 0, "rau");
	  $aauv = mysql_result($res, 0, "aauv");
	  $aaus = mysql_result($res, 0, "aaus");
	  
mysql_close($db);

    echo "<table style='table-layout:fixed' border='0'>
		<tr>
 		 <td valign='top'>addieren zur L&auml;nge des Ausschnitts:</td>
 		 <td >
		 $lau mm</td>
		  </tr>
		  <tr>
		  <td >addieren zur Breite des Ausschnitts:</td>
		  <td >$bau mm</td>
		  </tr>
		<tr>
		  <td >addieren zum Eckradius des Ausschnitts:</td>
		  <td >$rau mm</td>
		  </tr>
		<tr><td>subtrahieren vom Abstand Ausschnitt-Vorderkante:</td>
		<td>$aauv mm</td></tr>
		<tr>
		  <td>subtrahieren vom Abstand Ausschnitt-Seitenkante:</td>
		  <td>$aaus mm</td></tr>
		  <td>
		   <br />
		    <a href='st1866hf_admin_aend.php?auswahl=$auswahl'><input type='button' value='&Auml;ndern'><br /><br />
		   <a href='st1866hf_a.php?auswahl=$auswahl'><input type='button' value='Abbrechen'></a>
		  </td></tr>
		  			</table>
				 ";
   

   



?>
<br />
Zur�ck zur <a href="st1866hf_a.php?auswahl=<?php echo $auswahl; ?>">&Uuml;bersicht</a>
</td></tr></table>
</body>
</html>
