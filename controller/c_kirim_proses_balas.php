<?php

			//mengambil data dari halaman sebelumnya (form POST)
			$SenderNumber_proses = $_POST['SNproses'];
			$pesan_balas = $_POST['pesan_balas'];
			$ID_Sender = $_POST['ID_Sender'];
			
			//update respon
			include "../model/koneksi.php";
			$cxn=mysql_connect ($host, $user, $password, $dbname);
			mysql_select_db($dbname);
			if ($cxn) echo "";
				else echo "Galat : gagal terkoneksi ke database smsd";
			$boolean=1;
			mysql_query("UPDATE  `smsd`.`inbox` SET  `status` =  '1' WHERE  `inbox`.`ID`='$ID_Sender'")or die(mysql_error());
			
			//exec_shell gammu-smsd-inject
			echo "<";
		    echo exec("echo \"".$pesan_balas."\" | /usr/local/bin/gammu-smsd-inject TEXT ".$SenderNumber_proses);
		    echo ">";
		
		    //notifikasi
			echo "<br><img src=\"../view/images/loading.gif\" height=\"30px\"><br><br>Mengirim SMS ke".$SenderNumber_proses." ...";
		    echo "<br>";


?>