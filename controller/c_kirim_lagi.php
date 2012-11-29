<?php

			echo "KIRIM SMS<br>";
			$kirimlagi = htmlspecialchars($_GET["kirimlagi"]);
			//membuat dan mengirim sms baru (variabel kosong)
			include "../model/m_outbox.php";
			$result=mysql_query("select * from sentitems where ID='$kirimlagi'");
			$dataoutbox = mysql_fetch_assoc($result)or die(mysql_error());
			extract($dataoutbox);
			echo "<form action=\"../main/kirim.php\" method=\"POST\">";
			echo "<table><tr><td>Nomor tujuan : </td><td>";
			echo "<input type=\"text\" name=\"SNproses\" value=\"".$DestinationNumber."\">";
			echo "</td></tr><tr><td>Pesan : </td><td>";
			echo "<textarea name=\"pesan\" rows=\"4\" cols=\"40\"></textarea>";
			echo "</td></tr><tr><td></td><td>";
			echo "<input type=\"submit\" value=\"Kirim\">";
			echo "</td></tr></table></form>";

			

?>