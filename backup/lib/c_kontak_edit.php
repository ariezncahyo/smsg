<?php
	$ID = htmlspecialchars($_GET["ID"]);
		include "../db/m_kontak.php";
		$result=mysql_query("select * from kontak where ID='$ID'");
		$datakontak=mysql_fetch_array($result);
		
	echo "EDIT KONTAK<br>";
	//form edit kontak
	echo "<form action=\"../main/kontak_edit_simpan.php\" method=\"POST\">";
	echo "<table><tr><td>Nama</td><td>";
	echo "<td><input type=\"text\" name=\"nama_kontak\" value=\"".$datakontak['nama_kontak']."\"></td></tr>";
	echo "<tr><td>Nomor HP</td><td>";
	echo "<td><input type=\"text\" name=\"nomor_kontak\" value=\"".$datakontak['nomor_kontak']."\"></td></tr>";
	echo "<tr><td>Group</td><td>";
	
			echo "<td><select multiple=\"true\" name=\"group[]\" size=\"10\"><option selected value=\"-\">-</option>";
			
			$result_group=mysql_query("select * from kontak_group where group_name!='-'");
			$jumlahgroup=mysql_num_rows($result_group);
			
			for ($i=0;$i<$jumlahgroup;$i++)
			{
			$data_group=mysql_fetch_array($result_group)or die(mysql_error());
			echo "<option value=\"".$data_group['group_name'];
			echo "\">";
			extract($data_group);
			echo $data_group['group_name'];
			echo $x;
			echo "</option>";
			}
			echo "</select></td></tr>";
	
	echo "<tr><td> </td><td>";
	echo "<td>
	<input type=\"hidden\" name=\"ID\" value=\"".$ID."\">
	<input type=\"submit\" value=\"Simpan\"></form></td></tr>";			
	echo "</table>";

?>