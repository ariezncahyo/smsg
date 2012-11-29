<?php
			include "../db/m_kontak.php";
			$ID_hapus = htmlspecialchars($_GET["ID_hapus"]);
			$result=mysql_query("delete from kontak where ID='$ID_hapus'")or die(mysql_error());
			echo "<br><img src=\"../view/images/loading.gif\" height=\"30px\"><br><br>Menghapus kontak...";
			echo "<br>";


?>