<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="generator" content="HTML Tidy, see www.w3.org" />
<meta http-equiv="Content-Type" content=
"text/html; charset=iso-8859-1" />
<title>Berechnen des Arbeitsplattenma&szlig;es</title>
<link href="../templates/jooorange/css/template_css_ohne_bg.css"
rel="stylesheet" type="text/css" />
</head>
<body>
<br />
<br />
 <?php 
  include_once 'config.php';
 $manuell= 0;
 
 
 $db = mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db($dbname,$db);

$resanzeigen = mysql_db_query($dbname,"select anzeigen from insys_hersteller_anzeigen where art='kochfeld'"); 
$anzeigen = mysql_result($resanzeigen, 0); 
	 
if ($Submit2)
{ $manuell=1;
?> 

<h2>1.</h2>

W&auml;hlen Sie das gew&uuml;nschte Kochfeld aus:<br />
<form name="kher_auswahl" action="InSYS_k.php" method="post">
<select name="kher" style="width: 185px" onchange=
"form1.submit();">
<option value="<?php $kher ?>"><?php echo $kher; ?></option>
<?php     
   
   //Herstellerauswahl, bei aktivier Modellauswahl
      
if ($anzeigen==0)
{$res = mysql_db_query($dbname,"select distinct insys_kochfeld.hersteller
from insys_kochfeld ORDER BY insys_kochfeld.hersteller ASC");}
else
 {$res = mysql_db_query($dbname,"select distinct insys_hersteller_kochfeld.hersteller
from insys_hersteller_kochfeld ORDER BY insys_hersteller_kochfeld.hersteller ASC");}
           $num = mysql_num_rows($res);
             if ($num==0)
      echo "keinen passenden Datensatz gefunden";
     for ($i=0; $i<$num; $i++)
   { ?>
<option value=
'<?php echo $khersteller = mysql_result($res, $i, "hersteller"); ?>'>
<?php echo $khersteller = mysql_result($res, $i,
"hersteller");?></option>
<?php
         }
           mysql_close($db);
            ?></select> <input type="submit" name="Submit2" value=
"Ausw&auml;hlen" />&nbsp;&nbsp;<a href="InSYS_K.php"><input type=
"button" value="Zur&uuml;cksetzen" /></a></form>

<?php 
}
else
{ 
 ?>
<h2>1.</h2>
W&auml;hlen Sie das gew&uuml;nschte Kochfeld aus:<br />
<form name="kher_auswahl" action="InSYS_k.php" method="post">
<select name="kher" style="width: 185px" onchange=
"form1.submit();">
<option value="nichts">---- Hersteller ausw&auml;hlen ----</option>
<?php     

if ($anzeigen==0)
{$res = mysql_db_query($dbname,"select distinct insys_kochfeld.hersteller
from insys_kochfeld ORDER BY insys_kochfeld.hersteller ASC");}
else
 {$res = mysql_db_query($dbname,"select distinct insys_hersteller_kochfeld.hersteller
from insys_hersteller_kochfeld ORDER BY insys_hersteller_kochfeld.hersteller ASC");}


            $num = mysql_num_rows($res);
             if ($num==0)
      echo "keinen passenden Datensatz gefunden";
     for ($i=0; $i<$num; $i++)
   { ?>
<option value=
'<?php echo $khersteller = mysql_result($res, $i, "hersteller"); ?>'>
<?php echo $khersteller = mysql_result($res, $i,
"hersteller");?></option>
<?php
         }
           mysql_close($db);
            ?></select> <input type="submit" name="Submit2" value=
"Ausw&auml;hlen" /></form>

<?php }?>
<form name="insys_k" action="InSYS_ke.php" method="post"><?php 


   if ($Submit2)
   {?><select name="kochfeld" style="width: 185px" onchange=
"form1.submit();">
<option value="nichts">---- Modell ausw&auml;hlen ----</option>
<?php     
    
      $db = mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db($dbname,$db);


 $res = mysql_db_query($dbname,"select name from
insys_kochfeld where hersteller='$kher' ORDER BY name ASC");
           $num = mysql_num_rows($res);
           
           if ($num==0)
      echo "keinen passenden Datensatz gefunden";
  
   for ($i=0; $i<$num; $i++)
   { ?>
<option value=
'<?php echo $kname = mysql_result($res, $i, "name"); ?>'><?php echo
$kname = mysql_result($res, $i, "name");?></option>
<?php
         }
         
        
   mysql_close($db);
        
    ?></select> <?php  } 

else
         {
         ?> <select name="kochfeld" style="width: 185px" onchange=
"form1.submit();" disabled>
<option value="nichts">---- Modell ausw&auml;hlen ----</option>
</select> <?php
         }?><br />
<br />
 <strong>oder</strong> geben Sie die Ma&szlig;e des Kochfelds ein: 

<table style="table-layout:fixed" border="0">
<tr>
<td style="width:250px">L&auml;nge Kochfeld:</td>
<td><input name="laenge" type="text" size="15" maxlength=
"30" />mm</td>
</tr>

<tr>
<td>Breite Kochfeld:</td>
<td><input name="breite" type="text" size="15" maxlength=
"30" />mm</td>
</tr>

<tr>
<td>Eckradius Kochfeld:</td>
<td><input name="r" type="text" size="15" maxlength="30" />mm</td>
</tr>
</table>

<br />
<h2>2.</h2>

<strong>und</strong> geben Sie hier die Position des Kochfelds in
der Arbeitsplatte an: 

<table style="table-layout:fixed" border="0">
<tr>
<td style="width:250px">Abstand Kochfeld Vorderkante:</td>
<td><input name="kfv" type="text" size="15" maxlength=
"30" />mm</td>
</tr>

<tr>
<td>Abstand Kochfeld Seitenkante:</td>
<td><input name="kfs" type="text" size="15" maxlength=
"30" />mm</td>
</tr>
</table>
<input name="manuell" type="hidden" value="<?php echo  $manuell ?>" />
<br />
<input type="submit" name="Submit" value="OK" /> <input type=
"reset" value="Zur&uuml;cksetzen" /></form>
</body>
</html>

