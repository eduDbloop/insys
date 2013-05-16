<?php include('auth.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>hinzuf&uuml;gen</title>
<link href="../templates/jooorange/css/template_css_ohne_bg.css" rel="stylesheet" type="text/css" />


</head>

<body>
<br />
<table><tr><td valign="top"><? include("inc.nav.php");  include_once 'config.php';?></td><td>

<h1><? if ($auswahl == 0){echo "Neues Kochfeld";}
	  if ($auswahl == 1){echo "Neue Sp&uuml;le";}?> anlegen</h1>

<form name="kochfeld_add" action="st1866hf_neuka.php?auswahl=<?php echo $auswahl; ?>" method="post" >
<br />
<table style="table-layout:fixed" border="0">
<tr>
  <td style="width:250px" valign="top">Hersteller*:</td>
  <td >
  <select name="hersteller_select" style="width: 199px" onchange=
"form1.submit();">
<option value="leer">-----Hersteller ausw&auml;hlen-----</option>
<?php     
      
$db = mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db($dbname,$db);
 if ($auswahl == 0){ $res = mysql_db_query($dbname,"select distinct hersteller
from insys_kochfeld ORDER BY hersteller ASC");}
	  if ($auswahl == 1){ $res = mysql_db_query($dbname,"select distinct hersteller
from insys_spuele ORDER BY hersteller ASC");}

           $num = mysql_num_rows($res);
             if ($num==0)
      echo "keinen passenden Datensatz gefunden";
     for ($i=0; $i<$num; $i++)
   { ?>
<option value='<?php echo $hersteller_select = mysql_result($res, $i, "hersteller"); ?>'>
<?php echo $hersteller_select = mysql_result($res, $i,
"hersteller");?></option>
<?php
         }
           mysql_close($db);
            ?></select><br />
<small>oder geben Sie den Hersteller frei ein</small>
    <br />
  <input name="hersteller" type="text" size="30" maxlength="70"/></td> 
  </tr>
  <tr>
  <td style="width:250px">Modell*:</td>
  <td ><input name="name" type="text" size="30" maxlength="70"/></td>
  </tr>
<tr>
  <td style="width:250px">L&auml;nge*:</td>
  <td ><input name="laenge" type="text" size="15" maxlength="30"/>mm</td>
  </tr>
<tr><td>Breite*:</td>
<td><input name="breite" type="text" size="15" maxlength="30"/>mm</td></tr>
<tr>
  <td>
   <? if ($auswahl == 0){echo "Glasst&auml;rke:";}
	  if ($auswahl == 1){echo "Dicke:";}?>
  </td>
  <td><input name="<? if ($auswahl == 0){echo "staerke";}
	  if ($auswahl == 1){echo "d";}?>" type="text" size="15" maxlength="30"/>mm</td></tr>
  <tr>
  <td>Aufma&szlig;:</td>
  <td><input name="aufmass" type="text" size="15" maxlength="30"/>mm</td></tr>
<tr>
  <td>Eckradius*:</td>
  <td><input name="r" type="text" size="15" maxlength="30"/>mm</td></tr>
  <tr>
  <td>*Pflichtfeld</td>
  </tr>
  </table>
  <br />
  <input type="submit" name="k_speichern" value="Speichern">
<input type="reset" value="Zur&uuml;cksetzen" />
</form>


Alle <? if ($auswahl == 0){echo "Kochfelder";}
	  if ($auswahl == 1){echo "Sp&uuml;len";}?> in der Datenbank <a href="st1866hf_a.php?auswahl=<?php echo $auswahl; ?>">anzeigen</a>
</td></tr></table>
</body>
</html>
