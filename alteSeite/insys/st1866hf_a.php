<?php include('auth.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Datenbank bearbeiten</title>
<link href="../templates/jooorange/css/template_css_ohne_bg.css" rel="stylesheet" type="text/css" />
</head>

<body>
<br />
<table><tr><td valign="top"><? include("inc.nav.php"); ?></td><td>
<?php
include_once 'config.php';

  //Beginn Kochfeld
   if ($auswahl == 0)
   {
     echo "<h1>Kochfeld bearbeiten</h1><br />";
	$tabelle="insys_kochfeld";
   }
   
   //Beginn Spuele
   if ($auswahl == 1)
   {
     echo "<h1>Sp&uuml;le bearbeiten</h1><br />";
$tabelle="insys_spuele";
	
   }
   
     
   	 
$db = mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db($dbuser,$db);
// Sortierung der Spalten
if ($spalte)
 {
 $res = mysql_db_query($dbname,"select * from $tabelle ORDER BY $spalte $sort");
 }
 else
{ $res = mysql_db_query($dbname,"select * from $tabelle");}
   		   $num = mysql_num_rows($res);
		   
		   if ($num==0)
      echo "keinen Datensatz gefunden";
   echo "Es befinden sich <strong>$num</strong> "; ?>
   <? if ($auswahl == 0){echo "Kochfelder";}
	  if ($auswahl == 1){echo "Sp&uuml;len";}?>
<?   echo" in der Datenbank<br/>";    ?>
<?php echo "<a href='excel.export.php?auswahl=$auswahl'>"; ?>nach Excel exportieren</a><br /><br />
  
	 <p>
	 
	 <a href="st1866hf_neuk.php?action=add&auswahl=<?php echo $auswahl; ?>">
	 <? if ($auswahl == 0){echo "Kochfeld";}
	  if ($auswahl == 1){echo "Sp&uuml;le";}?>
	 hinzuf&uuml;gen</a></p>	
    
  <table border="1" rules="groups"  class='tab'>
  <tr>
  <td colspan="3">alle Angaben in mm</td>
  <td colspan="5"><h3><? if ($auswahl == 0){echo "Kochfeld";}
	  if ($auswahl == 1){echo "Sp&uuml;len";}	 ?>ma&szlig;e</h3></td><td colspan="3"><h3>Ausschnittma&szlig;e</h3></td></tr>
 <tr> <td><h3>ID</h3></td><td><h3>Hersteller</h3></td><td><h3>Modell</h3></td><td><h3>L&auml;nge</h3></td><td><h3>Breite</h3></td><td><h3>
  <? if ($auswahl == 0){echo "St&auml;rke";}
	  if ($auswahl == 1){echo "Dicke";}?>
 </h3></td><td><h3>Aufma&szlig;</h3></td><td><h3>Radius</h3></td><td><h3>L&auml;nge
     AU</h3></td><td><h3>Breite AU</h3></td><td><h3>Radius AU</h3></td>  </tr>
 <!-- Sortierspalte -->
 <tr> <td><small><?php echo "<a href='st1866hf_a.php?auswahl=$auswahl&spalte=ID&sort=asc'>"; ?>/\</a> <?php echo "<a href='st1866hf_a.php?auswahl=$auswahl&spalte=ID&sort=desc'>"; ?>\/</a></small></td><td><small><?php echo "<a href='st1866hf_a.php?auswahl=$auswahl&spalte=hersteller&sort=asc'>"; ?>/\</a> <?php echo "<a href='st1866hf_a.php?auswahl=$auswahl&spalte=hersteller&sort=desc'>"; ?>\/</a></small></td><td><small><?php echo "<a href='st1866hf_a.php?auswahl=$auswahl&spalte=name&sort=asc'>"; ?>/\</a> <?php echo "<a href='st1866hf_a.php?auswahl=$auswahl&spalte=name&sort=desc'>"; ?>\/</a></small></td><td><small><?php echo "<a href='st1866hf_a.php?auswahl=$auswahl&spalte=laenge&sort=asc'>"; ?>/\</a> <?php echo "<a href='st1866hf_a.php?auswahl=$auswahl&spalte=laenge&sort=desc'>"; ?>\/</a></small></td><td><small><?php echo "<a href='st1866hf_a.php?auswahl=$auswahl&spalte=breite&sort=asc'>"; ?>/\</a> <?php echo "<a href='st1866hf_a.php?auswahl=$auswahl&spalte=breite&sort=desc'>"; ?>\/</a></small></td><td>
  <?php if ($auswahl == 0){echo "<small><a href='st1866hf_a.php?auswahl=$auswahl&spalte=staerke&sort=asc'>/\</a><a href='st1866hf_a.php?auswahl=$auswahl&spalte=staerke&sort=desc'>\/</a></small>";}
	  if ($auswahl == 1){echo "<small><a href='st1866hf_a.php?auswahl=$auswahl&spalte=d&sort=asc'>/\</a><a href='st1866hf_a.php?auswahl=$auswahl&spalte=d&sort=desc'>\/</a></small>";}
	  ?>
 </td><td><small><?php echo "<a href='st1866hf_a.php?auswahl=$auswahl&spalte=aufmass&sort=asc'>"; ?>/\</a> <?php echo "<a href='st1866hf_a.php?auswahl=$auswahl&spalte=aufmass&sort=desc'>"; ?>\/</a></small></td><td><small><?php echo "<a href='st1866hf_a.php?auswahl=$auswahl&spalte=r&sort=asc'>"; ?>/\</a> <?php echo "<a href='st1866hf_a.php?auswahl=$auswahl&spalte=r&sort=desc'>"; ?>\/</a></small></td><td></td><td></td><td></td> </tr>
  <?php
    if ($auswahl == 0){$sqlab_ir = "select * from insys_masse where art='kochfeld'";}
	  if ($auswahl == 1){$sqlab_ir = "select * from insys_masse where art='spuele'";}  
   $res_ir = mysql_db_query($dbname, $sqlab_ir);
   $art = mysql_result($res_ir, 0, "art");
		$lau = mysql_result($res_ir, 0, "lau");
	  $bau = mysql_result($res_ir, 0, "bau");
	  $rau = mysql_result($res_ir, 0, "rau");
	  $aauv = mysql_result($res_ir, 0, "aauv");
	  $aaus = mysql_result($res_ir, 0, "aaus");
   
   for ($i=0; $i<$num; $i++)
   {	// 0 ist Kochfeld und 1 ist Spüle
        $id = mysql_result($res, $i, "id");
		$hersteller = mysql_result($res, $i, "hersteller");
		$name = mysql_result($res, $i, "name");
	  $laenge = mysql_result($res, $i, "laenge");
	  $breite = mysql_result($res, $i, "breite");
	  $aufmass = mysql_result($res, $i, "aufmass");
	  $r = mysql_result($res, $i, "r");
	 //berechnung der IR Maße Kocfeld
  
   

 $IRlaenge = $laenge+$lau;
  $IRbreite = $breite+$bau;
  $IRr = $r+$rau;
	
     
	  if ($auswahl == 0){$staerke = mysql_result($res, $i, "staerke");}
	  if ($auswahl == 1){$d = mysql_result($res, $i, "d");}
	  
      
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
	  echo "<tr bgcolor='$Hintergrundfarbe'><td>$id</td><td>$hersteller</td><td>$name</td><td width='100'><div align='right'>$laenge</div></td><td width='100'><div align='right'>$breite</div></td><td width='100'><div align='right'>";
	  if ($auswahl == 0){echo $staerke;}
	  if ($auswahl == 1){echo $d;}	  
	   echo "</div></td><td width='50'<div align='right'>$aufmass</div></td><td width='50'><div align='right'>$r</div></td><td width='100'><div align='right'>$IRlaenge</div></td><td width='100'><div align='right'>$IRbreite</div></td><td width='50'><div align='right'>$IRr</div></td><td><a href='st1866hf_aend.php?auswahl=$auswahl&ID=$id'>&auml;ndern</a></td><td><a href='st1866hf_loesch.php?auswahl=$auswahl&ID=$id'>l&ouml;schen</a></td></tr>";
    }?>
	</table>
	
	<?php
 
   mysql_close($db); ?>
 
  <?php
    
  
  
  
/*   }
//Beginn Spuele
   if ($auswahl == 1)
   {
    echo "Spuele"; 
   } */

?>
<br />Zur Auswahl <a href="st1866hf.php">zur&uuml;ck</a>
</td></tr></table>
</body>
</html>
