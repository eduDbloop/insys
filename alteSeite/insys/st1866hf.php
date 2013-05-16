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
<form name="auswahl" action="st1866hf_a.php" method="get" >
<table align="center" border="1" rules="groups">
<tr><td>Bitte w&auml;hlen Sie unten aus, ob sie Kochfelder oder Sp&uuml;len bearbeiten wollen.<br /><br /></td></tr>
<tr><td>
<table align="center">
  <tr><td><br /><input name="auswahl" type="radio" value="0" checked="checked" />Kochfeld<br/>
	 <input type="radio" name="auswahl" value="1" />Sp&uuml;le  <br /><br /></td></tr></table>
	 </td></tr>
<tr><td><br /><input type="submit" name="Submit" value="OK" />
<input type="reset" value="Abbrechen" /></td></tr>
</table>
  <br />
   
</p>
</form>
</td></tr></table>
</body>
</html>
