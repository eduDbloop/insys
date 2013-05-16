<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="CSS/styles.css" rel="stylesheet" type="text/css"/>
<title>InSYS DB</title>
</head>

<script language="javascript">
	function addRow() {
		
		var table = document.getElementById('tabla');
 
        var rowCount = table.rows.length;
        var row = table.insertRow(rowCount);
 
        var cell1 = row.insertCell(0);
        var element1 = document.createElement("input");
        element1.type = "text";
        element1.name="hersteller[]";
        cell1.appendChild(element1);
 
        var cell2 = row.insertCell(1);
        var element2 = document.createElement("input");
        element2.type = "text";
        element2.name="model[]";
        cell2.appendChild(element2);
 
        var cell3 = row.insertCell(2);
        var element3 = document.createElement("input");
        element3.type = "text";
        element3.name = "laenge[]";
        cell3.appendChild(element3);
		
		var cell4 = row.insertCell(3);
        var element4 = document.createElement("input");
        element4.type = "text";
        element4.name = "breite[]";
        cell4.appendChild(element4);
		
		var cell5 = row.insertCell(4);
        var element5 = document.createElement("input");
        element5.type = "text";
        element5.name = "eckradius[]";
        cell5.appendChild(element5);
 		 
	}
	
	function kaputRow() {
		var toKaput = document.getElementById('tabla');
		var rowToKaput = toKaput.rows.length;
		
		if (rowToKaput > 2){
			toKaput.deleteRow(rowToKaput-1);	
		}
	}
	
	function arreglo() {
		var get = document.getElementById('tabla');
		var rowCount = get.rows.length;
		
		alert((rowCount-1)*5);
	}
</script>

<body>
 <form action="update.php" method="post">
  <p class="etiqueta">&nbsp;</p>
  <table width="600" border="1" id="tabla">
    <tr>
      <td align="center" valign="middle" class="etiqueta">Hersteller</td>
      <td align="center" valign="middle" class="etiqueta">Model</td>
      <td align="center" valign="middle" class="etiqueta">Länge</td>
      <td align="center" valign="middle" class="etiqueta">Breite</td>
      <td align="center" valign="middle" class="etiqueta">Eckradius</td>
    </tr>
    <tr>
      <td align="center" valign="middle"><label for="hersteller"></label>
      <input type="text" name="hersteller[]" id="hersteller"></td>
      <td align="center" valign="middle"><label for="model"></label>
      <input type="text" name="model[]" id="model"></td>
      <td align="center" valign="middle"><label for="laenge"></label>
      <input type="text" name="laenge[]" id="laenge"></td>
      <td align="center" valign="middle"><label for="breite"></label>
      <input type="text" name="breite[]" id="breite"></td>
      <td align="center" valign="middle"><label for="eckradius"></label>
      <input type="text" name="eckradius[]" id="eckradius"></td>
    </tr>
  </table>
  <p>
    <input type="button" name="add" id="add" value="Zeile hinzufügen" onClick="addRow()">
    <input type="button" name="add" id="add" value="Letzte Zeile löschen" onClick="kaputRow()">
    <input type="submit" name="fertig" id="fertig" value="Fertig stellen">
  </p>
  </form>
</body>
</html>