<?php

			include "../db/m_kontak.php";
			echo "BUAT KONTAK BARU<br>";
			//form tambah kontak
			echo "<form action=\"../main/kontak_tambah_simpan.php\" method=\"POST\">";
			echo "<table><tr><td>Nama</td><td>";
			echo "<td><input type=\"text\" name=\"nama_kontak\" value=\"\"></td></tr>";
			echo "<tr><td>Nomor HP</td><td>";
			echo "<td><input type=\"text\" name=\"nomor_kontak\" value=\"\"></td></tr>";
			echo "<tr><td>Group</td><td>";
			echo "<td><select name=\"group\"><option selected>-</option>";
			
			$result_group=mysql_query("select * from kontak_group where group_name!='-'");
			$jumlahgroup=mysql_num_rows($result_group);
			
			for ($i=0;$i<$jumlahgroup;$i++)
			{
			echo "<option>";
			$data_group=mysql_fetch_array($result_group)or die(mysql_error());
			extract($data_group);
			echo $data_group['group_name'];
			echo "</option>";
			}
			echo "</select></td></tr>";
			echo "<tr><td> </td><td>";
			echo "<td><input type=\"submit\" value=\"Simpan\"></form></td></tr>";			
			echo "</table>";

?>