<?php
     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      session_start();

      $username = $_POST['username'];
      $passwort = $_POST['passwort'];
$passwort = md5($passwort);

      $hostname = $_SERVER['HTTP_HOST'];
      $path = dirname($_SERVER['PHP_SELF']);

      // Benutzername und Passwort werden überprüft
   $db = mysql_connect('db96.puretec.de', 'dbo169981072', 'jusxbDhz');
mysql_select_db("db169981072",$db);


 $res = mysql_db_query("db169981072","select * from insys_user ");
   		   $num = mysql_num_rows($res);  
		   
		       
		   
   for ($i=0; $i<$num; $i++)
   {
      $user = mysql_result($res, $i, "userName");
	  $pass = mysql_result($res, $i, "userPass");
	     }
   mysql_close($db);  
	  
	    
	  
      if ($username == $user && $passwort == $pass) {
       $_SESSION['angemeldet'] = true;

       // Weiterleitung zur geschützten Startseite
       if ($_SERVER['SERVER_PROTOCOL'] == 'HTTP/1.1') {
        if (php_sapi_name() == 'cgi') {
         header('Status: 303 See Other');
         }
        else {
         header('HTTP/1.1 303 See Other');
         }
        }

       header('Location: http://'.$hostname.($path == '/' ? '' : $path).'/st1866hf.php');
       exit;
       }
      }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
 <head>
 <link href="../templates/jooorange/css/template_css_ohne_bg.css" rel="stylesheet" type="text/css" />
  <title>InSYS - Gesch&uuml;tzter Bereich</title>
  <style type="text/css">
<!--
html, body { width:100%; height:80%; margin:0; padding:0; }
div.tabelle { width:100%; height:100%; margin:0; padding:0; display:table; }
div.tabellentd { width:100%; height:100%; margin:0; padding:0; display:table-cell; vertical-align:middle; }
div.content { width:750; margin-left:auto; margin-right:auto; text-align:left; }
-->
</style>
 </head>
 <body>
 <br /><div align="center"><img src="../templates/ja_acrus/images/ja-logo-01.png" alt="" /></div>
 
 <div class="tabelle">
<div class="tabellentd">
<div class="content">
  

 <table width="400" border="0" cellspacing="5" cellpadding="0" align="center" class="mittig">
  <tr><td class="hinter">&nbsp;</td></tr>
  <tr><td><div align="center"><h1>LOGIN</h1></div></td></tr>
  <tr>
   	<td>
	<table border="0">
	<tr>
	
	<td>	
	 <table border="0" width="300">
     <tr>
	 <td><form action="login.php" method="post">Benutzer: </td><td><input type="text" name="username" <? echo "value='$username'"; ?>/></td>
	 </tr>
  <tr>
  <td>Passwort: </td><td><input type="password" name="passwort" /></td>
  </tr>
  <tr>
  <td colspan='2'><br /><input type="submit" value="Anmelden" /></td>
  </tr>  
  </table>
      </td>
	
	<td>
	<table border="0">
	<tr>
	<td>
	<img src="../images/stories/security.png" alt="" />
	</td>
	</tr>
	</table>
	</td>
	
  </tr>
  </table>
  </td>
     </tr>
  
  <tr>
  <td class="hinter">&nbsp;</td>   
  </tr>
  
   <?
   
   if ($_SERVER['REQUEST_METHOD'] == 'POST')
   { ?>
   <tr>
  <td >
   <? echo "<a href='mail.php?name=$username'>" ?>
  Passwort vergessen?</a>
  </td>   
  </tr>
<?   }
   
   ?>
   
    
 </table>
 </div>
</div>
</div>
 </body>
</html>