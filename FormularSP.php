<?php 
  include('dbconnect.php');
  include('funcSP.php');
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Chained Select Boxes using PHP, MySQL and jQuery</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
	$('#wait_1').hide();
	$('#drop_1').change(function(){
	  $('#wait_1').show();
	  $('#result_1').hide();
      $.get("funcSP.php", {
		func: "drop_1",
		drop_var: $('#drop_1').val()
      }, function(response){
        $('#result_1').fadeOut();
        setTimeout("finishAjax('result_1', '"+escape(response)+"')", 400);
      });
    	return false;
	});
});

function finishAjax(id, response) {
  $('#wait_1').hide();
  $('#'+id).html(unescape(response));
  $('#'+id).fadeIn();
}
</script>
<style type="text/css">
.Text {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 28px;
	font-style: normal;
}
</style></head>

<body>
<p class="Text">
<form action="pruebafpdf_sp.php" method="post">
  
  <p><span class="Text">1. Wählen Sie bitte die gewünschte Kochfeld aus...</span>
    </p>
    <p>
      <select name="drop_1" id="drop_1">
        
        <option value="" selected="selected" disabled="disabled">----Hersteller----</option>
        
        <?php getTierOne(); ?>
        
      </select> 
      
      <span id="wait_1" style="display: none;">
      <img alt="Please Wait" src="ajax-loader.gif"/>
      </span>
      <span id="result_1" style="display: none;"></span> 
      
    </p>
    <p style="font-family:Arial, Helvetica, sans-serif">oder geben Sie die Maße des Kochfelds ein    </p>
  <table style="table-layout:fixed ; font-family: Arial, Helvetica, sans-serif; font-size: 16px;" border="0">
  <tbody><tr>
<td style="width:200px">Länge Kochfeld:</td>
<td><input name="laenge" type="text" size="15" maxlength="30">mm</td>
</tr>

<tr>
<td>Breite Kochfeld:</td>
<td><input name="breite" type="text" size="15" maxlength="30">mm</td>
</tr>

<tr>
<td>Eckradius Kochfeld:</td>
<td><input name="r" type="text" size="15" maxlength="30">mm</td>
</tr>
</tbody></table>
    <p>&nbsp;</p>
    <p class="Text">2. Und geben Sie bitte hier die Position des Kochfelds in der Arbeitsplatte an</p>
    
    <table style="table-layout: fixed; font-family: Arial, Helvetica, sans-serif; font-size: 16px;" border="0">
    <tbody>
      <tr>
        <td style="width: 230px; font-family: Arial, Helvetica, sans-serif; font-size: 16px;">Abstand Kochfeld Vorderkante:</td>
        <td><input name="laenge2" type="text" size="15" maxlength="30">
          mm</td>
      </tr>
      <tr>
        <td>Abstand Kochfeld Seitenkante:</td>
        <td><input name="breite2" type="text" size="15" maxlength="30">
          mm</td>
      </tr>
    </tbody>
  </table>
  <br />
  <input name="send" type="submit" id="send" value="Weiter">
  <input type="reset" name="reset" id="reset" value="Zurücksetzen">
</form>
</p>
<p>
</body>
</html>