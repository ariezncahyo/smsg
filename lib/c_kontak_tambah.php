<?php
			include "../db/m_kontak.php";
			$result=mysql_query("select max(ID) from kontak");
			$datakontak = mysql_fetch_assoc($result)or die(mysql_error());
			extract($datakontak);
			echo $ID;

			echo "KONTAK BARU<br>";
			//form tambah kontak
			echo "<form action=\"../main/kontak_tambah_simpan.php\" method=\"POST\">";
			echo "<table><tr><td>Nama</td><td>";
			echo "<td><input type=\"text\" name=\"nama_kontak\" value=\"\"></td></tr>";
			echo "<tr><td>Nomor HP</td><td>";
			echo "<td><input type=\"text\" name=\"nomor_kontak\" value=\"\"></td></tr>";
			echo "<tr><td>Group</td><td>";
			echo "<td><select name=\"group\"><option selected>-<option>Kaipang</select></td></tr>";
			echo "<tr><td> </td><td>";
			echo "<td><input type=\"submit\" value=\"Simpan\"></form></td></tr>";			
			echo "</table>";

?>