<?php


			echo "PENGATURAN<br>";
			echo "Ini adalah halaman Pengaturan yang berisi manajemen user, service gammu, dan log sistem. [sedang dalam pengembangan]";
			echo "<br>";
			echo "<br>";
			echo "<br>";
			echo "<strong>Gammu-SMSDaemon's Log</strong><br>";
			echo "<br>";
			$output=array(); 
			exec("tail /etc/gammu-smsd.log", $output);

			//exec("gammu identify", $output);
			foreach($output as $line) {
    		echo $line;
    		echo "<br>";
			}


?>