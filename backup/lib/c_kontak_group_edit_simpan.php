<?php

	include "../db/m_kontak.php";

$ID=$_POST['ID'];
$group_name = $_POST['group_name'];
//update nama group
mysql_query("update kontak_group set group_ID='$ID', group_name='$group_name' where group_ID='$ID'")or die(mysql_error());

			echo "<br><img src=\"../view/images/loading.gif\" height=\"30px\"><br><br>Mengupdate group...";
			echo "<br>";

?>