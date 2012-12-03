<?php

include "../db/m_inbox.php";
			$ID_hapus = htmlspecialchars($_GET["ID_hapus"]);
			$result=mysql_query("delete from inbox where ID='$ID_hapus'");
			echo "<br><img src=\"../view/images/loading.gif\" height=\"30px\"><br><br>Menghapus SMS...";
			echo ".<br>";


?>