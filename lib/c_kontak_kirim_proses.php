<?php

//pemroses pengiriman SMS via exec_shell, untuk pengiriman biasa tanpa status respon
			$nama_kontak = $_POST['nama_kontak'];
			$nomor_kontak_kirim = $_POST['nomor_kontak_kirim'];
			$pesan = $_POST['pesan'];

			//exec_shell gammu-smsd-inject
			echo "<";
		    echo exec("echo \"".$pesan."\" | /usr/local/bin/gammu-smsd-inject TEXT ".$nomor_kontak_kirim);
			echo ">";
		    //notifikasi
			echo "<br><img src=\"../view/images/loading.gif\" height=\"30px\"><br><br>Mengirim SMS ke ".$nama_kontak." ...";
		    echo "<br>";
?>