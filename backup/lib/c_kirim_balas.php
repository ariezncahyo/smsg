<?php
echo "BALAS SMS<br>";
			//mengambil variabel dar halaman sebelumnya (inbox)
			$ID_Sender = htmlspecialchars($_GET["ID_Sender"]);
			include "../db/m_inbox.php";
			$result=mysql_query("select * from inbox where ID='$ID_Sender'");
			$datainbox = mysql_fetch_assoc($result)or die(mysql_error());
			extract($datainbox);
			echo "<form action=\"../main/kirim_balas.php\" method=\"POST\">";
			echo "<table><tr><td>Nomor tujuan</td><td>: ";
			echo $SenderNumber;
			echo "</td></tr><tr><td>Pesan<br>sebelumnya</td><td  width=\"300px\" bgcolor=\"#DCDCDC\">";
			echo $TextDecoded;
			echo "</td></tr><tr><td>Balasan : </td><td>";

			echo "<textarea name=\"pesan_balas\" rows=\"4\" cols=\"40\"></textarea>";
			echo "<input type=\"hidden\" name=\"SNproses\" value=\"".$SenderNumber."\">";
			echo "<input type=\"hidden\" name=\"ID_Sender\" value=\"".$ID."\">";
			echo "</td></tr>";
			echo "<tr><td></td><td>";
			echo "<input type=\"submit\" value=\"Kirim\"></form>";
			echo "</td></tr></table>";

?>