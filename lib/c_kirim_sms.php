<?php

echo "KIRIM SMS<br>";

			//membuat dan mengirim sms baru (variabel kosong)
			echo "<form action=\"../main/kirim.php\" method=\"POST\">";
			echo "<table><tr><td>Nomor tujuan : </td><td>";
			echo "<input type=\"text\" name=\"SNproses\" value=\"\">";
			echo "</td></tr><tr><td>Pesan : </td><td>";
			echo "<textarea name=\"pesan\" rows=\"4\" cols=\"40\"></textarea>";
			echo "</td></tr><tr><td></td><td>";
			echo "<input type=\"submit\" value=\"Kirim\">";
			echo "</td></tr></table></form>";

?>