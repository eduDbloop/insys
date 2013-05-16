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

<h1><? if ($auswahl == 0){echo "Neuen Kochfeldhersteller";}
	  if ($auswahl == 1){echo "Neuen Sp&uuml;lehersteller";}?> anlegen</h1>

<form name="kochfeld_add" action="st1866hf_hersteller_neuka.php?auswahl=<?php echo $auswahl; ?>" method="post" >
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
            ?></select></td> 
  </tr>
    <tr>
  <td>*Pflichtfeld</td>
  </tr>
  </table>
  <br />
  <input type="submit" name="k_speichern" value="Speichern">
<input type="reset" value="Zur&uuml;cksetzen" />
</form>


Alle <? if ($auswahl == 0){echo "Kochfeldhersteller";}
	  if ($auswahl == 1){echo "Sp&uuml;lenhersteller";}?> in der Datenbank <a href="st1866hf_hersteller.php?auswahl=<?php echo $auswahl; ?>">anzeigen</a>, die auf Insystec.eu zur Auswahl stehen.
</td></tr></table>
</body>
</html>
