<?php
/*
googlesitemap3.php - Generates a Google Sitemap from all content items
Copyright (C) 2005  Andreas Juch <andreasjuch@aon.at>

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

//
// Version 3
// Homepage:		http://andreasjuch.mywol.org
// Full License:	http://www.gnu.org/copyleft/gpl.html
//

//Load Joomla/Mambo configuration
require("configuration.php");

//Connect to Database
$mysql = mysql_connect($mosConfig_host, $mosConfig_user, $mosConfig_password);
mysql_select_db($mosConfig_db);

//XML Header
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";

//Urlset
echo "<urlset xmlns=\"http://www.google.com/schemas/sitemap/0.84\">\n";

//Go through all content items and generate the url entries
$_ = $mosConfig_dbprefix;
$sqlQuery = 	"SELECT ".$_."content.id AS contentID, ".$_."menu.id AS menuID, ".$_."content.created, ".$_."content.modified
		FROM ".$_."menu, ".$_."content
		WHERE 	(
			".$_."content.sectionid = ".$_."menu.componentid
			AND ".$_."menu.type LIKE 'content_%'
			AND ".$_."content.state = 1
			)
		OR 	(
			".$_."content.sectionid = 0
			AND ".$_."menu.componentid = ".$_."content.id
			AND ".$_."menu.type = 'content_typed'
			AND ".$_."content.state = 1
			)
		ORDER BY contentID";
$contentResult = mysql_query($sqlQuery);
while ($row = mysql_fetch_object($contentResult)){
	echo "\t<url>\n";
	echo "\t\t<loc>".$mosConfig_live_site."/";
	if($mosConfig_sef==1)
		echo "content/view/".$row->contentID."/".$row->menuID."/";
	else
		echo "index.php?option=com_content&amp;task=view&amp;id=".$row->contentID."&amp;Itemid=".$row->menuID;
	echo "</loc>\n";
	echo "\t\t<lastmod>";
	$dateCreated = substr($row->created, 0, 10);
	$dateModified = substr($row->modified, 0, 10);
	//Get the last date of modification
	if($dateModified != "0000-00-00")
		echo $dateModified;
	else
		echo $dateCreated;
	echo "</lastmod>\n";
	echo "\t</url>\n";
}

//End of Urlset
echo "</urlset>\n";
?>