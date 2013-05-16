<?php
//**************************************
//     Page load dropdown results     //
//**************************************
function getTierOne()
{
	$result = mysql_query("SELECT DISTINCT hersteller FROM kochfelder") 
	or die(mysql_error());

	  while($tier = mysql_fetch_array( $result )) 
  
		{
		   echo '<option value="'.$tier['hersteller'].'">'.$tier['hersteller'].'</option>';
		}

}

//**************************************
//     First selection results     //
//**************************************
if (isset($_GET['func'])&& $_GET['func'] == 'drop_1' ) {
drop_1($_GET['drop_var']);
}

function drop_1($drop_var)
{  
    include_once('dbconnect.php');
	$result = mysql_query("SELECT * FROM kochfelder WHERE hersteller='$drop_var'") 
	or die(mysql_error());
	
	echo '<select name="tier_two" id="tier_two">
	      <option value=" " disabled="disabled" selected="selected">----Model----</option>';

		   while($drop_2 = mysql_fetch_array( $result )) 
			{
			  echo '<option value="'.$drop_2['model'].'">'.$drop_2['model'].'</option>';
			}
	
	echo '</select> ';
    
}
?>