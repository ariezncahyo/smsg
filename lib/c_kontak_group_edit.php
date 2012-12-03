<?php
	$ID = htmlspecialchars($_GET["ID"]);
		include "../db/m_kontak.php";
		$result=mysql_query("select * from kontak_group where group_ID='$ID'");
		$datagroup=mysql_fetch_array($result);
		
	echo "EDIT GROUP<br>";
	//form edit kontak
	echo "<form action=\"../main/kontak_group_edit_simpan.php\" method=\"POST\">";
	echo "<table><tr><td>Nama Group</td><td>";
	echo "<td><input type=\"text\" name=\"group_name\" value=\"".$datagroup['group_name']."\"></td></tr>";
	echo "</td></tr>";
	
	echo "<tr><td> </td><td>";
	echo "<td>
	<input type=\"hidden\" name=\"ID\" value=\"".$ID."\">
	<input type=\"submit\" value=\"Simpan\"></form></td></tr>";			
	echo "</table>";

?>