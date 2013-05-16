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
<h1><?php if ($auswahl == 0){echo "Kochfeld";}
	  if ($auswahl == 1){echo "Sp&uuml;le";} ?> &auml;ndern</h1><br />
<?php

if ($ID)
{
    
$db = mysql_connect($dbhost, $dbuser, $dbpass);

     if ($auswahl == 0){$sqlab = "select * from insys_kochfeld where";}
	  if ($auswahl == 1){$sqlab = "select * from insys_spuele where";}
   
   
   $sqlab .= " id = $ID";

   $res = mysql_db_query($dbname, $sqlab);

   $hersteller = mysql_result($res, 0, "hersteller");
		$name = mysql_result($res, 0, "name");
	  $laenge = mysql_result($res, 0, "laenge");
	  $breite = mysql_result($res, 0, "breite");
	   if ($auswahl == 0){$staerke = mysql_result($res, 0, "staerke");}
	  if ($auswahl == 1){$staerke = mysql_result($res, 0, "d");}
	  	  $aufmass = mysql_result($res, 0, "aufmass");
	  $r = mysql_result($res, 0, "r");

   echo "Führen Sie die Änderungen durch,<p>";
   echo "betätigen Sie anschließend den Button<p>";

   echo "<form action = 'st1866hf_aend2.php?auswahl=$auswahl' ";
   echo " method = 'post'>";

  echo "<table style='table-layout:fixed' border='0'>
		<tr>
 		 <td style='width:175px' valign='top'>Hersteller:</td>
 		 <td >";
		 ?>		
		<select name="neuh" style="width: 145px" onchange=
"form1.submit();">
<option value="<? echo $hersteller; ?>"><? echo $hersteller; ?></option>
<?php     
   if ($auswahl == 0){ $res = mysql_db_query($dbname,"select distinct hersteller
from insys_kochfeld ORDER BY hersteller ASC");}
	  if ($auswahl == 1){ $res = mysql_db_query($dbname,"select distinct hersteller
from insys_spuele ORDER BY hersteller ASC");}
   
           $num = mysql_num_rows($res);
             if ($num==0)
      echo "keinen passenden Datensatz gefunden";
     for ($i=0; $i<$num; $i++)
   { ?>
<option value='<?php echo $hersteller = mysql_result($res, $i,
"hersteller");?>'><?php echo $hersteller = mysql_result($res, $i,
"hersteller");?></option>
<?php
         }          
            ?></select>
		
<? echo "<br /><small>oder &auml;ndern Sie dern Hersteller manuell</samll><br />
		 <input name='neuh2' ></td>
		  </tr>
		  <tr>
		  <td style='width:175px'>Modell:</td>
		  <td ><input name='neun' value='$name'></td>
		  </tr>
		<tr>
		  <td style='width:175px'>L&auml;nge:</td>
		  <td ><input name='neul' value='$laenge'> mm</td>
		  </tr>
		<tr><td>Breite:</td>
		<td><input name='neub' value='$breite'> mm</td></tr>
		<tr>
		  <td>"; 
		   if ($auswahl == 0){echo "Glasst&auml;rke:";}
	  if ($auswahl == 1){echo "Dicke:";}
		   echo "</td>
		  <td><input name='neus' value='"; if ($auswahl == 0){echo "$staerke";}
	  if ($auswahl == 1){echo "$d";}
	  echo "'> mm</td></tr>
		  <tr>
		  <td>Aufma&szlig;:</td>
		  <td><input name='neua' value='$aufmass'> mm</td></tr>
		<tr>
		  <td>Eckradius:</td>
		  <td><input name='neur' value='$r'> mm</td></tr>
		  <tr><td>
		   <br /><input type='submit' value='&Auml;nderungen speichern'><br /><br /><a href='st1866hf_a.php?auswahl=$auswahl'><input type='button' value='Abbrechen'></a>
		  </td></tr>
			</table>
				 ";

echo "<input type='hidden' name='ID' value='$ID'>";
   echo "</form>";

   mysql_close($db);
}

else
   echo "Es wurde kein Datensatz ausgewählt<p>";
?>
</td></tr></table>
</body>
</html>
