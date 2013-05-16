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
if (!empty($fehlen)){
echo "<br><h3>"; 
 if ($auswahl == 0){echo "Der Kochfeldhersteller";}
 if ($auswahl == 1){echo "Der Sp&uuml;lenhersteller";}
echo " konnte nicht in die Datenbank eingefügt werden.</h3><br>";
echo "Es fehlen folgende Angaben: <br><br>";
echo "<div class='fehler'>$fehlen</div><br><br>";
echo "Bitte gehen Sie <a href='st1866hf_hersteller_neu.php?auswahl=$auswahl'>zur&uuml;ck</a> zum Formular.<br><br>";
}
else
{	 
	 
$db = mysql_connect($dbhost, $dbuser, $dbpass);
      mysql_select_db($dbname,$db);

if ($auswahl == 0){$k_ins = "insert insys_hersteller_kochfeld";
$k_ins .= "(hersteller) ";
      $k_ins .= "values ('$hersteller')";}
 if ($auswahl == 1){$k_ins = "insert insys_hersteller_spuele";
 $k_ins .= "(hersteller) ";
      $k_ins .= "values ('$hersteller')";}
      
      mysql_db_query($dbname, $k_ins);

      $num = mysql_affected_rows();
      if ($num>0)
	  {
	     echo "Es wurde ";
		 if ($auswahl == 0){echo "Kochfeldhersteller";}
	  if ($auswahl == 1){echo "Sp&uuml;lenhersteller";}
	  echo "<strong> $hersteller</strong> zur Datenbank hinzugefügt";
		 		
				 
	echo "<br /><br /><a href='st1866hf_hersteller_neu.php?auswahl=$auswahl'>";
    if ($auswahl == 0){echo "weiteren Kochfeldhersteller";}
	  if ($auswahl == 1){echo "weiteren Sp&uuml;lenhersteller";}
		  echo " anlegen</a>, der auf Insystec.eu zur Auswahl stehen soll.";	
	echo "<br /><br />Alle ";
	 if ($auswahl == 0){echo "Kochfeldhersteller";}
	  if ($auswahl == 1){echo "Sp&uuml;lenhersteller";}
	echo " in der Datenbank <a href='st1866hf_hersteller.php?auswahl=$auswahl'>anzeigen</a>, die auf Insystec.eu zur Auswahl stehen."; 
		} 
		 
		 
      else
      {
         echo "Es ist ein Fehler aufgetreten, ";
         echo "es wurde kein Datensatz hinzugefügt.";
		 echo "<br />Bitte gehen Sie <a href='st1866_hersteller_neu.php?auswahl=$auswahl'>zur&uuml;ck</a> zum Formular.<br><br>";
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
