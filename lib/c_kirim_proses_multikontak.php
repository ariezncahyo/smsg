<?php
include "../db/m_kontak.php";
$pesan=$_POST['pesan'];
$multikontak=$_POST['multikontak'];

        		foreach ($multikontak as $kontak) 
                 {                 		
        		$hasil_kontak=mysql_query("select * from kontak where nama_kontak='$kontak'");
				$data_kontak=mysql_fetch_assoc($hasil_kontak);
				extract($data_kontak);
				echo $nomor_kontak;	
				echo $pesan;
				echo exec("echo \"".$pesan."\" | /usr/local/bin/gammu-smsd-inject TEXT ".$nomor_kontak);

 				}
?>