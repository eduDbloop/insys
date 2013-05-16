<?php include('auth.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Liste <? if ($aktiv==0)  
{echo "aktivieren";}
else
{echo "deaktivieren";} ?></title>
<link href="../templates/jooorange/css/template_css_ohne_bg.css" rel="stylesheet" type="text/css" />
</head>

<body>
<br />
<table><tr><td valign="top"><? include("inc.nav.php"); include_once 'config.php'; ?></td><td>
<?php

if ($aktiv==0)  
{$aktiv1=1;}
else
{$aktiv1=0;}
 
$db = mysql_connect($dbhost, $dbuser, $dbpass);

    if ($auswahl == 0){$sqlab = "update insys_hersteller_anzeigen set anzeigen = '$aktiv1' where art='kochfeld'";}
	  if ($auswahl == 1){$sqlab = "update insys_hersteller_anzeigen set anzeigen = '$aktiv1' where art='spuele'";}  
   
   mysql_db_query($dbname, $sqlab);
   
   $num = mysql_affected_rows();
   if ($num>0)
     {
	 if ($aktiv1==0)  
{echo "Die Liste wurde deaktiviert.<br />Es werden jetzt alle in der Datenbank befindlichen "; if ($auswahl == 0){echo "Kochfeldhersteller";}
	  if ($auswahl == 1){echo "Sp&uuml;lenhersteller";} echo " angezeigt.";}
else
{echo "Die Liste wurde aktiviert.<br />Es werden jetzt nur die hier angezeigten "; if ($auswahl == 0){echo "Kochfeldhersteller";}
	  if ($auswahl == 1){echo "Sp&uuml;lenhersteller";} echo " angezeigt.";}
	 }
   else
      echo "Es ist ein Fehler aufgetreten.<br/>Es wurde kein Datensatz ge&auml;ndert!";

   mysql_close($db);
?>
<br /><br />Zurück zur <a href="st1866hf_hersteller.php?auswahl=<?php echo $auswahl; ?>">&Uuml;bersicht</a>
</td></tr></table>
</body>
</html>
