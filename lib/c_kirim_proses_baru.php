<?php

//pemroses pengiriman SMS via exec_shell, untuk pengiriman biasa tanpa status respon
			$SenderNumber_proses = $_POST['SNproses'];
			$pesan_balas = $_POST['pesan'];

			//exec_shell gammu-smsd-inject
			echo "<";
		    echo exec("echo \"".$pesan_balas."\" | /usr/local/bin/gammu-smsd-inject TEXT ".$SenderNumber_proses);
			echo ">";
		    //notifikasi
			echo "<br><img src=\"../view/images/loading.gif\" height=\"30px\"><br><br>Mengirim SMS ke".$SenderNumber_proses." ...";
		    echo "<br>";
?>