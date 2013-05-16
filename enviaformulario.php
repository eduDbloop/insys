<?php

$mensaje = $_POST["radio"]. " ". $_POST["name"]."<br>Straße: ". $_POST["str"]."<br>PLZ, Ort: ". $_POST["plzort"]."<br>Telefon: ". $_POST["tel"]."<br>Fax: ". $_POST["fax"]."<br>Email: ". $_POST["email"]."<br>Nachricht: <br>". $_POST["text"];
$destino = 'emelgarejo0411@gmail.com';
$asunto = 'InSYS Kontakt';

$enviado = mail($destino,$asunto,$mensaje);

if($enviado) { echo("Vielen Dank für Ihre Nachricht. Wir werden uns kurzfristig melden.");}

?>