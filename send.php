<?php
if(!empty($_POST["name"]) && !empty($_POST["str"]) && !empty($_POST["plzort"]) && !empty($_POST["email"]) && !empty($_POST["text"]) ){
    $fecha = date("D-M-y H:i");
	$mymail = "emelgarejo0411@gmail.com";
	$subject = "insystec.eu";
	$contenido = " Betreff :  InSYS \n\n"."Adresse: ".$_POST["str"]. "\n";
	$contenido .= $_POST["name"]." Nachricht :\n";
	$contenido .= $_POST["text"]."\n\n";
	$contenido .= "Der Nachricht würde am ".$fecha." geschrieben";
	$header = "From:".$_POST["email"]."\nReply-To:".$_POST["email"]."\n";
	$header .= "X-Mailer:PHP/".phpversion()."\n";
	$header .= "Mime-Version: 1.0\n";
	$header .= "Content-Type: text/plain";
	mail($mymail, $subject, utf8_decode($contenido) ,$header);
	?>
<html>

<body>
<script language="javascript">		
	alert('Ihre Nachricht wuerde versendet. Vielen Dank.')
	location.href='http://www.insystec.eu/edu/kontakt.html';
</script>
</body>
</html> 
<?
} else {
	?>

<html>
<body>
<script language="javascript">
	alert('Die Pflichtfelder wuerden nicht angegeben.')
	history.back()
</script>
</body>
</html> 
<?	
}
?>