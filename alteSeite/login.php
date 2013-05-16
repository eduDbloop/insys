<?php
     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      session_start();

      $username = $_POST['username'];
      $passwort = $_POST['passwort'];

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
  <title>Geschützter Bereich</title>
 </head>
 <body>
 <br />
 <div align="center"><img src="../images/stories/LogoInSYS.png" alt="InSYS" width="271" height="161" /><br />
   <br /> 
   
 </div>
 <table width="400" border="0" cellspacing="5" cellpadding="0" align="center">
  <tr>
  <td class="hinter">&nbsp;</td>
  </tr>
  <tr><td><div align="center"><h1>LOGIN</h1></div></td></tr>
    <tr>
  
	  <table width="400">
     <tr>
   <form action="login.php" method="post">
   <td>Benutzer: </td> <td><input type="text" name="username" /></td>
  <tr><td>Passwort: </td><td><input type="password" name="passwort" /></td></tr>
  </table>

  </tr>
  <tr>
  <td><input type="submit" value="Anmelden" /></td>
  </tr>
  <tr>
  <td class="hinter">&nbsp;</td>
  </tr>
 </table>
 
 
 </body>
</html>