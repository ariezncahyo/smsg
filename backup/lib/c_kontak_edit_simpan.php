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

$groupselected=$_POST['group'];
$jumlah=count($groupselected);

$hasil_group=mysql_query("select * from kontak_group where group_name='$group'");
$data_group=mysql_fetch_assoc($hasil_group);
$group_ID_edit=$data_group['group_ID'];

//update nama dan nomor kontak
mysql_query("update kontak set ID='$ID', nama_kontak='$nama_kontak', nomor_kontak='$nomor_kontak' where ID='$ID'")or die(mysql_error());
//menghapus semua membership yang sudah ada
mysql_query("delete from kontak_membership where kontak_ID='$ID'");

foreach ($groupselected as $groupselect) 
                 {                 		
        		$hasil_group=mysql_query("select * from kontak_group where group_name='$groupselect'");
				$data_group=mysql_fetch_assoc($hasil_group);
				$group_ID=$data_group['group_ID'];
				//insert into membership
 				mysql_query("insert into kontak_membership set kontak_ID='$ID', group_ID='$group_ID'");
 				}
			echo "<br><img src=\"../view/images/loading.gif\" height=\"30px\"><br><br>Mengupdate kontak...";
			echo "<br>";

?>