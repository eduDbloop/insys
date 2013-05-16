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
$db = mysql_connect($dbhost, $dbuser, $dbpass);

$lau = str_replace( ",", ".", $lau );
$bau = str_replace( ",", ".", $bau );
$rau = str_replace( ",", ".", $rau );
$aauv = str_replace( ",", ".", $aauv );
$aaus = str_replace( ",", ".", $aaus );

    $sqlab = "update insys_masse set lau = '$lau',";
   $sqlab .= "bau = '$bau',";
   $sqlab .= "rau = '$rau',";
   $sqlab .= "aauv = '$aauv',";
   $sqlab .= "aaus = '$aaus'";
  if ($auswahl == 0){$sqlab.=  "where art='kochfeld'";}
  if ($auswahl == 1){$sqlab.= "where art='spuele'";}  
  
  

   mysql_db_query($dbname, $sqlab);
   
   $num = mysql_affected_rows();
   if ($num>0)
      echo "Der Datensatz wurde geändert<p>";
   else
      echo "Der Datensatz wurde nicht geändert<p>";

   mysql_close($db);
?>
<br />Zurück zur <a href="st1866hf_admin.php?auswahl=<?php echo $auswahl; ?>">&Uuml;bersicht</a>
</td></tr></table>
</body>
</html>
