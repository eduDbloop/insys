<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>InSYS - Passwort vergessen</title>
<link href="../templates/jooorange/css/template_css_ohne_bg.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php
include_once 'config.php';

$db = mysql_connect($dbhost, $dbuser, $dbpass);
$sqlab = "select * from insys_user where userName='$name'";
$res = mysql_db_query($dbname, $sqlab);

   $username = mysql_result($res, 0, "userName");
   $pass = mysql_result($res, 0, "userPass");
   $mail = mysql_result($res, 0, "mail");

 mysql_close($db);

if ($pass == a9d78c8aead33908c7946a35e3de4641)
{$pass=maste1866hf;}

$fehlen="";
if (empty($name)){$fehlen=$fehlen."Geben sie Ihren Benutzernamen ein!";}
if (!empty($fehlen)){
echo "<br>Ihr Passwort konnte leider nicht versendet werden.<br>";
echo "$fehlen<br /><br />";
echo "Bitte gehen Sie <a href='login.php'>zur&uuml;ck</a> zum Formular.<br /><br />
<br /><br />
Um den Benutzernamen zu &auml;ndern, geben sie ihn bitte unter <em>Benutzername</em> ein und dr&uuml;cken sie <em>Anmelden</em>.<br /> Danach ist der neue Benutzername aktiviert. Nun k&ouml;nnen Sie, zur Anforderung des Passworts, wieder auf <em>Passwort vergessen</em>  klicken und Ihr Passwort wird Ihnen zugesendet.";
die();
}

if ($username == $name)
{

//Mailroutine
$cr=chr(13);
$lf=chr(10);
$ret=$cr.$lf;
$space=chr(32);
$dRet=$ret.$ret;
$absatzmarke=chr(7);

$nachricht = "Das Passwort für Ihren Zugang auf InSYStec.eu/insys lautet: $pass";

$betreff = "InSYStec.eu/insys: Ihre angeforderten Zugangsdaten";

$nachricht=str_replace($dRet,$absatzmarke,$nachricht);
$nachricht=str_replace($ret,$space,$nachricht);

$absaetze=explode($absatzmarke, $nachricht);

$max=count($absaetze);
$message="";

for ($i=0;$i<$max;$i++)
{
$string=format($absaetze[$i],55);
$message=$message.$string.$dRet;
}


mail($mail, $betreff, $message);

echo "<br />An die eMail Adresse $mail wurde soeben Ihr Passwort versendet.<br /><br />";

}
else
{echo "<br />Sie haben einen falschen Benutzernamen eingegeben.<br />Ihr Passwort konnte leider nicht versendet werden.<br /><br />
Bitte gehen Sie <a href='login.php'>zur&uuml;ck</a> zum Formular.<br /><br />
Um den Benutzernamen zu &auml;ndern, geben sie ihn bitte unter <em>Benutzername</em> ein und dr&uuml;cken sie <em>Anmelden</em>.<br /> Danach ist der neue Benutzername aktiviert. Nun k&ouml;nnen Sie, zur Anforderung des Passworts, wieder auf <em>Passwort vergessen</em>  klicken und Ihr Passwort wird Ihnen zugesendet.";}


function format ($string,$laenge){
global $ret;
global $space;
$giveBack="";
$fertig=false;
while(!$fertig){

//teil1
$pos=$laenge;

if (strlen($string)<=$pos){
$neueZeile=trim($string);
$giveBack=$giveBack.$neueZeile;
$fertig=true;
}
else
{

//teil2
$out=false;
while(!$out){

//teil3
$zeichen=substr($string,$pos,1);
$is_blank=($zeichen==$space);

if ($is_blank){
$neueZeile=trim(substr($string,0,$pos));
$giveBack=$giveBack.$neueZeile.$ret;
$string=substr($string,$pos);
$out=true;
}
else
{$pos--;}

}
}


}

return $giveBack;
}


?>




</body>
</html>
