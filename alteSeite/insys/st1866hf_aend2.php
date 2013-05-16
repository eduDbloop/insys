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
<?php
  
if ($neuh2!="")
{$neuh=$neuh2;}

   
$db = mysql_connect($dbhost, $dbuser, $dbpass);

    if ($auswahl == 0){$sqlab = "update insys_kochfeld set staerke = '$neus',";}
	  if ($auswahl == 1){$sqlab = "update insys_spuele set d = '$neus',";}  
   $sqlab .= "name = '$neun',";
   $sqlab .= "laenge = '$neul',";
   $sqlab .= "breite = '$neub',";
   $sqlab .= "hersteller = '$neuh',";
   $sqlab .= "aufmass = '$neua',";
   $sqlab .= "r = '$neur'";
   $sqlab .= "where id = $ID";

   mysql_db_query($dbname, $sqlab);
   
   $num = mysql_affected_rows();
   if ($num>0)
      echo "Der Datensatz wurde geändert<p>";
   else
      echo "Der Datensatz wurde nicht geändert<p>";

   mysql_close($db);
?>
<br />Zurück zur <a href="st1866hf_a.php?auswahl=<?php echo $auswahl; ?>">&Uuml;bersicht</a>
</td></tr></table>
</body>
</html>
