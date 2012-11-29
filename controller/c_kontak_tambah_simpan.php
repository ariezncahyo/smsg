<?php
include "../model/m_kontak.php";
$nama_kontak = $_POST['nama_kontak'];
$nomor_kontak = $_POST['nomor_kontak'];
uniqid($nama_kontak);
$group = $_POST['group'];
$result=mysql_query("insert into kontak set ID='$ID_tambah', nama_kontak='$nama_kontak', nomor_kontak='$nomor_kontak', group_kontak='$group'")or die(mysql_error());
			echo "<br><img src=\"../view/images/loading.gif\" height=\"30px\"><br><br>Menambahkan kontak...";
			echo "<br>";

?>