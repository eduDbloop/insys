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
<table><tr><td valign="top"><? include("inc.nav.php");  include_once 'config.php'; ?></td><td>
<?php
if ($ID)
{
  
$db = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if ($auswahl == 0){$sqlab = "delete from insys_kochfeld where";
   $sqlab .= " ID = '$ID'";}
	  if ($auswahl == 1){$sqlab = "delete from insys_spuele where";
   $sqlab .= " ID = '$ID'";}
   
   mysql_db_query($dbname, $sqlab);

   
   $num = mysql_affected_rows();
   if ($num>0)
      echo "Der Datensatz wurde gelöscht<p>";
   else
      echo "Es ist ein Fehler aufgetreten.<br />Der Datensatz wurde nicht gelöscht<p>";

   mysql_close($db);
}
else
   echo "Es wurde kein Datensatz ausgewählt<p>";

?>
<br />Zurück zur <a href="st1866hf_a.php?auswahl=<?php echo $auswahl; ?>">&Uuml;bersicht</a>
</td></tr></table>
</body>
</html>
