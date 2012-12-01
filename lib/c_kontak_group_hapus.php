<?php
			include "../db/m_kontak.php";
			$ID_hapus = htmlspecialchars($_GET["ID_hapus"]);
			echo $ID_hapus;
			mysql_query("delete from kontak_group where group_ID='$ID_hapus'")or die(mysql_error());
			mysql_query("update kontak_membership set group_ID='0' where group_ID='$ID_hapus'")or die(mysql_error());
			echo "<br><img src=\"../view/images/loading.gif\" height=\"30px\"><br><br>Menghapus kontak...";
			echo "<br>";


?>