<?php include('auth.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Hersteller Auswahl</title>
<link href="../templates/jooorange/css/template_css_ohne_bg.css" rel="stylesheet" type="text/css" />
</head>

<body>
<br />
<table><tr><td valign="top"><? include("inc.nav.php"); ?></td><td valign="top">
<?php if ($auswahl == 0)
   {
     echo "<h1>Kochfeld Hersteller</h1><br />";
	$tabelle="insys_hersteller_kochfeld";
   }
   
   
   if ($auswahl == 1)
   {
     echo "<h1>Sp&uuml;lenhersteller </h1><br />";
$tabelle="insys_hersteller_spuele";
	
   }
   ?>
  Die Hersteller die auf dieser Seite angezeigt werden, können auf der Internetseite ausgewählt
  werden.<br />
  <br />
    <?php
include_once 'config.php';
  
      	 
$db = mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db($dbuser,$db);
// Sortierung der Spalten
if ($spalte)
 {
 $res = mysql_db_query($dbname,"select * from $tabelle ORDER BY $spalte $sort");
 }
 else
{ $res = mysql_db_query($dbname,"select * from $tabelle ORDER BY hersteller asc");}
   		   $num = mysql_num_rows($res);
		   
		   if ($num==0)
      echo "keinen Datensatz gefunden<br />";
   echo "Es befinden sich <strong>$num</strong> "; ?>
   <? if ($auswahl == 0){echo "Kochfeldhersteller";}
	  if ($auswahl == 1){echo "Sp&uuml;lenhersteller";}?>
<?   echo" in der Datenbank, die auf Insystec.eu zur Auswahl stehen<br/>";    ?>
<br />
  
	 <a href="st1866hf_hersteller_neu.php?action=add&auswahl=<?php echo $auswahl; ?>">
	 <? if ($auswahl == 0){echo "Kochfeldhersteller";}
	  if ($auswahl == 1){echo "Sp&uuml;lenhersteller";}?>
	 hinzuf&uuml;gen</a></p>	
    
  <table border="1" rules="groups"  class='tab'>
  <tr> <td><h3>ID</h3></td><td><h3>Hersteller</h3></td><h3>
  </tr>
 <!-- Sortierspalte -->
 <tr> <td><small><?php echo "<a href='st1866hf_hersteller.php?auswahl=$auswahl&spalte=ID&sort=asc'>"; ?>/\</a> <?php echo "<a href='st1866hf_hersteller.php?auswahl=$auswahl&spalte=ID&sort=desc'>"; ?>\/</a></small></td><td><small><?php echo "<a href='st1866hf_hersteller.php?auswahl=$auswahl&spalte=hersteller&sort=asc'>"; ?>/\</a> <?php echo "<a href='st1866hf_hersteller.php?auswahl=$auswahl&spalte=hersteller&sort=desc'>"; ?>\/</a></small></td>
  </tr>
  <?php
   for ($i=0; $i<$num; $i++)
   {	// 0 ist Kochfeld und 1 ist Spüle
        $id = mysql_result($res, $i, "id");
		$hersteller = mysql_result($res, $i, "hersteller");
		
	       
	 //um in jeder 2. Spalte eine andere Farbe anzuzeigen
	  if($Hintergrundfarbe == "EBEBEE")
    {
        $Hintergrundfarbe = "white";
    }
    else
    {
        $Hintergrundfarbe = "EBEBEE";
    }
	  
	  //in Tabelle einfügen
	  echo "<tr bgcolor='$Hintergrundfarbe'><td>$id</td><td>$hersteller</td><td>
	  <td><a href='st1866hf_hersteller_loesch.php?auswahl=$auswahl&ID=$id'>l&ouml;schen</a></td></tr>";
    }?>
	</table>
	<br/>
	<? if ($auswahl == 0){$resanzeigen = mysql_db_query($dbname,"select anzeigen from insys_hersteller_anzeigen where art='kochfeld'");}
	  if ($auswahl == 1){$resanzeigen = mysql_db_query($dbname,"select anzeigen from insys_hersteller_anzeigen where art='spuele'");}
	 
	 
      $anzeigen = mysql_result($resanzeigen, 0); 
	  	?>
	<form name="auswahl" action="st1866hf_hersteller_aktiv.php?auswahl=<? echo $auswahl; ?>&aktiv=<? echo $anzeigen; ?>" method="post">
	  Liste <? if ($anzeigen==0)  
{echo "deaktiviert";}
else
{echo "aktiviert";}?>:
	  <input type="checkbox" name="aktiv" value="<? echo $anzeigen ?>" <?php if ($anzeigen==1) {echo "checked='checked'";} ?>/>
	<input type="submit" name="Submit2" value=
<?php if ($anzeigen==1) {echo "deaktivieren";} else echo "aktivieren" ?> />
	</form>      
   
   
	 	
	
	<?php
 
   mysql_close($db); ?>
 
  <?php
    

?>
<br />Zur Auswahl <a href="st1866hf.php">zur&uuml;ck</a>


</td></tr></table>
</body>
</html>
