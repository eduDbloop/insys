<?php include('auth.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Kochfeld hinzuf&uuml;gen</title>
<link href="../templates/jooorange/css/template_css_ohne_bg.css" rel="stylesheet" type="text/css" />
<table><tr><td valign="top"><? include("inc.nav.php"); include_once 'config.php'; ?></td><td>
<?php

   if ($k_speichern)
   {
     if ($hersteller_select!='leer')
{$hersteller=$hersteller_select;}
	 $fehlen="";
if (empty($hersteller)){$fehlen=$fehlen."<li>Der Hersteller.";}
if (empty($name)){$fehlen=$fehlen."<li>Der Modellname.";}
if (empty($laenge)){$fehlen=$fehlen."<li>Die L&auml;nge.";}
if (empty($breite)){$fehlen=$fehlen."<li>Die Breite.";}
if (empty($r)){$fehlen=$fehlen."<li>Der Radius.";}
if (!empty($fehlen)){
echo "<br><h3>"; 
 if ($auswahl == 0){echo "Das Kochfeld";}
 if ($auswahl == 1){echo "Die Sp&uuml;le";}
echo " konnte nicht in die Datenbank eingefügt werden.</h3><br>";
echo "Es fehlen folgende Angaben: <br><br>";
echo "<div class='fehler'>$fehlen</div><br><br>";
echo "Bitte gehen Sie <a href='st1866hf_neuk.php?auswahl=$auswahl'>zur&uuml;ck</a> zum Formular.<br><br>";
}
else
{	 
	 
$db = mysql_connect($dbhost, $dbuser, $dbpass);
      mysql_select_db($dbname,$db);

$laenge = str_replace( ",", ".", $laenge );
$breite = str_replace( ",", ".", $breite );
$staerke = str_replace( ",", ".", $staerke );
$aufmass = str_replace( ",", ".", $aufmass );
$r = str_replace( ",", ".", $r );


if ($auswahl == 0){$k_ins = "insert insys_kochfeld";
$k_ins .= "(hersteller, name, laenge, breite, staerke, aufmass, r) ";
      $k_ins .= "values ('$hersteller', '$name', '$laenge', '$breite', '$staerke', '$aufmass', '$r')";}
 if ($auswahl == 1){$k_ins = "insert insys_spuele";
 $k_ins .= "(hersteller, name, laenge, breite, d, aufmass, r) ";
      $k_ins .= "values ('$hersteller', '$name', '$laenge', '$breite', '$d', '$aufmass', '$r')";}
      
      mysql_db_query($dbname, $k_ins);

      $num = mysql_affected_rows();
      if ($num>0)
	  {
	     echo "Es wurde ";
		 if ($auswahl == 0){echo "Kochfeld";}
	  if ($auswahl == 1){echo "Sp&uuml;le";}
	  echo "<strong> $hersteller $name</strong> zur Datenbank hinzugefügt";
		 echo "<br /><br />Mit folgenden Daten:<br />";
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
    if ($auswahl == 0){echo "$staerke";}
	  if ($auswahl == 1){echo "$d";}
		  echo " mm</td></tr>
		  <tr>
		  <td>Aufma&szlig;:</td>
		  <td>$aufmass mm</td></tr>
		<tr>
		  <td>Eckradius:</td>
		  <td>$r mm</td></tr>
			</table>
				 ";
		
				 
	echo "<br /><br /><a href='st1866hf_neuk.php?auswahl=$auswahl'>";
    if ($auswahl == 0){echo "weiteres Kochfeld";}
	  if ($auswahl == 1){echo "weitere Sp&uuml;le";}
		  echo " anlegen</a>";	
	echo "<br /><br />Alle ";
	 if ($auswahl == 0){echo "Kochfelder";}
	  if ($auswahl == 1){echo "Sp&uuml;len";}
	echo " in der Datenbank <a href='st1866hf_a.php?auswahl=$auswahl'>anzeigen</a>"; 
		} 
		 
		 
      else
      {
         echo "Es ist ein Fehler aufgetreten, ";
         echo "es wurde kein Datensatz hinzugefügt.";
		 echo "<br />Bitte gehen Sie <a href='st1866_neuk.php?auswahl=$auswahl'>zur&uuml;ck</a> zum Formular.<br><br>";
      }
      mysql_close($db);
	  
	  
	  
	  }
	  
   }
?>
</head>
</td></td></td>
<body>

</body>
</html>
