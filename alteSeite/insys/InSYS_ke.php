<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ausschnittma&szlig; Kochfeld</title>
<link href="../templates/jooorange/css/template_css_ohne_bg.css" rel="stylesheet" type="text/css" />
</head>

<body>

<br />
<br />
<?php
 include_once 'config.php';
   if ($manuell != 0) 
   
   //Eingabe, wenn Kochfeld aus Datenbank
      
   {
      
$db = mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db($dbname,$db);


 $res = mysql_db_query($dbname,"select * from insys_kochfeld where name='$kochfeld'");
   		   $num = mysql_num_rows($res);
		   
		   if ($num==0)
      echo "keinen passenden Datensatz gefunden";
  // echo "$num Datensätze gefunden<br>";
   for ($i=0; $i<$num; $i++)
   {
       $hersteller = mysql_result($res, $i, "hersteller");
      $laenge = mysql_result($res, $i, "laenge");
	  $breite = mysql_result($res, $i, "breite");
	  $name = mysql_result($res, $i, "name");
	  $r = mysql_result($res, $i, "r");
    //  echo "$laenge <br>";
   }
   mysql_close($db);  
   
   
   echo "Kochfeld <strong>$hersteller $kochfeld</strong>";
   echo " mit den Abmessungen: <br />";
echo "<table border='0'>
  <tr>
    <td>L&auml;nge:</td>
    <td><div align='right'>$laenge mm</div></td>
  </tr>
  <tr>
    <td>Breite:</td>
    <td><div align='right'>$breite mm</div></td>
  </tr>
  <tr>
    <td>Eckradius:</td>
    <td><div align='right'>$r mm</div></td>
  </tr>
  </table>
";
echo "ist ausgewählt<br />";
   
   
   $fehlen="";
if ($kfv<5.8){$fehlen=$fehlen."<li>Der Abstand des Kochfelds von der Vorderkante mu&szlig; gr&ouml;&szlig;er 5.8 mm sein!";}
if ($kfs<5.8){$fehlen=$fehlen."<li>Der Abstand des Kochfelds von der Seitenkantem mu&szlig; gr&ouml;&szlig;er 5.8 mm sein!";}
if (!empty($fehlen)){
echo "<br>Das Ausschnittma&szlig; konnte nicht berechnet werden.<br>";
echo "Es fehlen folgende Angaben: <br><br>";
echo "<div class='fehler'>$fehlen</div><br><br>";
echo "Bitte gehen Sie <a href='InSYS_k.php'>zur&uuml;ck</a> zum Formular.<br><br>";
}	 

else
{

$db = mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db($dbname,$db);


 $res = mysql_db_query($dbname,"select * from insys_kochfeld where name='$kochfeld'");
   		   $num = mysql_num_rows($res);
		   
		   if ($num==0)
      echo "keinen passenden Datensatz gefunden";
  // echo "$num Datensätze gefunden<br>";
   for ($i=0; $i<$num; $i++)
   {
      $laenge = mysql_result($res, $i, "laenge");
	  $breite = mysql_result($res, $i, "breite");
	  $name = mysql_result($res, $i, "name");
	  $r = mysql_result($res, $i, "r");
    //  echo "$laenge <br>";
   }
  
 
 $sqlab_ir = "select * from insys_masse where art='kochfeld'";
	 
   $res_ir = mysql_db_query($dbname, $sqlab_ir);
   $art = mysql_result($res_ir, 0, "art");
		$lau = mysql_result($res_ir, 0, "lau");
	  $bau = mysql_result($res_ir, 0, "bau");
	  $rau = mysql_result($res_ir, 0, "rau");
	  $aauv = mysql_result($res_ir, 0, "aauv");
	  $aaus = mysql_result($res_ir, 0, "aaus");
  mysql_close($db);
 
 $laenge = $laenge+$lau;
   $breite = $breite+$bau;
   $r = $r+$rau;
   $auv= $kfv-$aauv;
   $aus=$kfs-$aaus;
   
   
echo "<br /><strong>Gr&ouml;&szlig;e des Ausschnitts:</strong> <br />";
echo "<table border='0'>
  <tr>
    <td>L&auml;nge des Ausschnitts:</td>
    <td><div align='right'>$laenge mm</div></td>
  </tr>
  <tr>
    <td>Breite des Ausschnitts:</td>
    <td><div align='right'>$breite mm</div></td>
  </tr>
  <tr>
    <td>Eckradius des Ausschnitts:</td>
    <td><div align='right'>$r mm</div></td>
  </tr>
  <tr>
    <td>Abstand des Ausschnitts von der Vorderkante:</td>
    <td><div align='right'>$auv mm</div></td>
  </tr>
  <tr>
    <td>Abstand des Ausschnitts von der Seitenkante:</td>
    <td><div align='right'>$aus mm</div></td>
  </tr>
</table>
<br /><small>alle Angaben sind vorbehaltlich technischer &Auml;nderungen.</small>
<br /><br />
<img src='bild.php?laenge=$laenge&breite=$breite&r=$r&auv=$auv&aus=$aus' />
";
   }
   
   
   }
   else
   //hier faengt die manuelle Eingabe an
   { 
    
	 $fehlen="";
if (empty($laenge)){$fehlen=$fehlen."<li>Die L&auml;nge des Kochfelds.";}
if (empty($breite)){$fehlen=$fehlen."<li>Die Breite des Kochfelds.";}
if (empty($r)){$fehlen=$fehlen."<li>Der Eckradius des Kochfelds.";}
/*if (empty($auv)){$fehlen=$fehlen."<li>Der Abstand des Kochfelds von der Vorderkante";}
if (empty($aus)){$fehlen=$fehlen."<li>Der Abstand des Kochfelds von der Seitenkante";}*/
if ($kfv<5.8){$fehlen=$fehlen."<li>Der Abstand des Kochfelds von der Vorderkante mu&szlig; gr&ouml;&szlig;er 5.8 mm sein!";}
if ($kfs<5.8){$fehlen=$fehlen."<li>Der Abstand des Kochfelds von der Seitenkantem mu&szlig; gr&ouml;&szlig;er 5.8 mm sein!";}
if (!empty($fehlen)){
echo "<br>Das Ausschnittma&szlig; konnte nicht berechnet werden.<br>";
echo "Es fehlen folgende Angaben: <br><br>";
echo "<div class='fehler'>$fehlen</div><br><br>";
echo "Bitte gehen Sie <a href='InSYS_k.php'>zur&uuml;ck</a> zum Formular.<br><br>";
}	 
else
{
 $laenge = $laenge+10.8;
   $breite = $breite+10.8;
   $r = $r+5.4;
   $auv= $kfv-5.4;
   $aus=$kfs-5.4;

echo "<strong>Gr&ouml;&szlig;e des Ausschnitts:</strong> <br />";
echo "<table border='0'>
  <tr>
    <td>L&auml;nge des Ausschnitts:</td>
    <td><div align='right'>$laenge mm</div></td>
  </tr>
  <tr>
    <td>Breite des Ausschnitts:</td>
    <td><div align='right'>$breite mm</div></td>
  </tr>
  <tr>
    <td>Eckradius des Ausschnitts:</td>
    <td><div align='right'>$r mm</div></td>
  </tr>
  <tr>
    <td>Abstand des Ausschnitts von der Vorderkante:</td>
    <td><div align='right'>$auv mm</div></td>
  </tr>
  <tr>
    <td>Abstand des Ausschnitts von der Seitenkante:</td>
    <td><div align='right'>$aus mm</div></td>
  </tr>
</table>
<br /><small>alle Angaben sind vorbehaltlich technischer &Auml;nderungen.</small>
<br /><br />
<img src='bild.php?laenge=$laenge&breite=$breite&r=$r&auv=$auv&aus=$aus' />
";
   }}
?>
<br /><br /><br />
<img src="http://www.insystec.eu/insys/bilder/falzinnenmass.gif" alt="Falzinnenma&szlig;" />
<br /><br />
<?php echo "<a href='pdf.erstellen.php?auswahl=0&hersteller=$hersteller&name=$name&laenge=$laenge&breite=$breite&r=$r&auv=$auv&aus=$aus' target='_blank'>Zeichnung speichern/drucken</a>"; ?>
</body>
</html>
