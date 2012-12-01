<?php

	include "../db/m_kontak.php";
	/*
	$result=mysql_query("SELECT max(ID) as maxID FROM kontak");
	$datakontak = mysql_fetch_array($result)or die(mysql_error());
	$idmax = $datakontak['maxID'];
//*/

$ID=$_POST['ID'];
$nama_kontak = $_POST['nama_kontak'];
$nomor_kontak = $_POST['nomor_kontak'];
$group = $_POST['group'];

$hasil_group=mysql_query("select * from kontak_group where group_name='$group'");
$data_group=mysql_fetch_assoc($hasil_group);
$group_ID_edit=$data_group['group_ID'];

mysql_query("update kontak set ID='$ID', nama_kontak='$nama_kontak', nomor_kontak='$nomor_kontak' where ID='$ID'")or die(mysql_error());
mysql_query("update kontak_membership set kontak_ID='$ID', group_ID='$group_ID_edit' where kontak_ID='$ID'")or die(mysql_error());
			echo "<br><img src=\"../view/images/loading.gif\" height=\"30px\"><br><br>Mengupdate kontak...";
			echo "<br>";
//*/
?>