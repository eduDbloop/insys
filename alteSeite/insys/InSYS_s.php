<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Berechnen des Arbeitsplattenma&szlig;es</title>
<link href='../templates/jooorange/css/template_css_ohne_bg.css' rel='stylesheet' type='text/css' />
</head>

<body>
<br />
<br />
 <?   include_once 'config.php'; ?>
 <?php 
 $manuell= 0;
 
$db = mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db($dbname,$db);

$resanzeigen = mysql_db_query($dbname,"select anzeigen from insys_hersteller_anzeigen where art='spuele'"); 
$anzeigen = mysql_result($resanzeigen, 0); 
 
if ($Submit2)
{$manuell=1;
?> 

<h2>1.</h2>

W&auml;hlen Sie die gew&uuml;nschte Sp&uuml;le aus:<br />
<form name="kher_auswahl" action="InSYS_s.php" method="post">
<select name="kher" style="width: 185px" onchange=
"form1.submit();">
<option value="<?php $kher ?>"><?php echo $kher; ?></option>
<?php     
      
if ($anzeigen==0)
{$res = mysql_db_query($dbname,"select distinct insys_spuele.hersteller
from insys_spuele ORDER BY insys_spuele.hersteller ASC");}
else
 {$res = mysql_db_query($dbname,"select distinct insys_hersteller_spuele.hersteller
from insys_hersteller_spuele ORDER BY insys_hersteller_spuele.hersteller ASC");}
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
"Ausw&auml;hlen" />&nbsp;&nbsp;<a href="InSYS_s.php"><input type=
"button" value="Zur&uuml;cksetzen" /></a></form>

<?php 
}
else
{ ?>
<h2>1.</h2>

W&auml;hlen Sie die gew&uuml;nschte Sp&uuml;le aus:<br />
<form name="kher_auswahl" action="InSYS_s.php" method="post">
<select name="kher" style="width: 185px" onchange=
"form1.submit();">
<option value="0">---- Hersteller ausw&auml;hlen ----</option>
<?php     
       
 if ($anzeigen==0)
{$res = mysql_db_query($dbname,"select distinct insys_spuele.hersteller
from insys_spuele ORDER BY insys_spuele.hersteller ASC");}
else
 {$res = mysql_db_query($dbname,"select distinct insys_hersteller_spuele.hersteller
from insys_hersteller_spuele ORDER BY insys_hersteller_spuele.hersteller ASC");}
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
<form name="insys_s" action="InSYS_se.php" method="post"><?php 


   if ($Submit2)
   {?><select name="spuele" style="width: 185px" onchange=
"form1.submit();">
<option value="0">---- Modell ausw&auml;hlen ----</option>
<?php     
    
  
$db = mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db($dbname,$db);


 $res = mysql_db_query($dbname,"select name from
insys_spuele where hersteller='$kher' ORDER BY name ASC");
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
         ?> <select name="spuele" style="width: 185px" onchange=
"form1.submit();" disabled>
<option value="0">---- Modell ausw&auml;hlen ----</option>
</select> <?php
         }?><br />
<br />
 <strong>oder</strong> geben Sie die Ma&szlig;e der Sp&uuml;le ein: 

 <table style="table-layout:fixed" border="0">
<tr>
<td style="width:250px">L&auml;nge Sp&uuml;le:</td>
<td><input name="laenge" type="text" size="15" maxlength=
"30" />mm</td>
</tr>

<tr>
<td>Breite Sp&uuml;le:</td>
<td><input name="breite" type="text" size="15" maxlength=
"30" />mm</td>
</tr>

<tr>
<td>Eckradius Sp&uuml;le:</td>
<td><input name="r" type="text" size="15" maxlength="30" />mm</td>
</tr>
</table>

<br />
<h2>2.</h2>

<strong>und</strong> geben Sie hier die Position der Sp&uuml;le in
der Arbeitsplatte an: 

<table style="table-layout:fixed" border="0">
<tr>
<td style="width:250px">Abstand Sp&uuml;le Vorderkante:</td>
<td><input name="kfv" type="text" size="15" maxlength=
"30" />mm</td>
</tr>

<tr>
<td>Abstand Sp&uuml;le Seitenkante:</td>
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
