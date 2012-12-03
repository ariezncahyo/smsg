<?php
echo "KIRIM SMS<br>";

	$ID = htmlspecialchars($_GET["ID"]);
		include "../db/m_kontak.php";
		$result=mysql_query("select * from kontak where ID='$ID'");
		$datakontak=mysql_fetch_array($result);

			echo "<form action=\"../main/kontak_kirim_proses.php\" method=\"POST\">";
			echo "<table><tr><td>Kepada</td><td>: ";
			echo $datakontak['nama_kontak'];
			echo "</td></tr><tr><td>Pesan : </td><td>";

			echo "<textarea name=\"pesan\" rows=\"4\" cols=\"40\"></textarea>";
			echo "<input type=\"hidden\" name=\"nomor_kontak_kirim\" value=\"".$datakontak['nomor_kontak']."\">";
			echo "<input type=\"hidden\" name=\"ID\" value=\"".$datakontak['ID']."\">";
			echo "<input type=\"hidden\" name=\"nama_kontak\" value=\"".$datakontak['nama_kontak']."\">";
			echo "</td></tr>";
			echo "<tr><td></td><td>";
			echo "<input type=\"submit\" value=\"Kirim\"></form>";
			echo "</td></tr></table>";

?>