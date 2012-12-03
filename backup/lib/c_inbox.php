<?php
			echo "INBOX<br>";
			echo "<div style=\"float:right; padding-right:20px;\">Keterangan : [ <img src=\"../view/images/warn.png\" height=\"15px\"> = Belum dijawab | <img src=\"../view/images/ok.png\" height=\"15px\"> = Sudah dijawab ]</div>";
			include "../db/m_inbox.php";
				echo "<table cellspacing=\"0\" border=\"1\" bordercolor=\"white\" width=\"1000px\" >";
				echo "<tr bgcolor=\"#69AEE7\" align=\"center\">";
				echo "<td  width=\"30px\">";
				echo "No";
				echo "</td>";
				echo "<td width=\"130px\">";
				echo "Pengirim";
				echo "</td>";
				echo "<td width=\"180px\">";
				echo "Waktu";
				echo "</td>";
				echo "<td >";	
				echo "Pesan";
				echo "</td>";
				echo "<td width=\"70px\">";
				echo "Status";
				echo "</td>";
				echo "</td>";
				echo "<td width=\"60px\">";
				echo "Balas";
				echo "</td>";
				echo "<td width=\"60px\">";
				echo "Hapus";
				echo "</td>";
				echo "<tr>";

				//perulangan untuk menampilkan keseluruhan data di tabel (perulangan baris)
				for ($i=0;$i<$nrows;$i++)
				{

				//perulangan untuk nomor urut di tampilan
				$nomor=$i+1; 

				//mengambil data dari db
				$datainbox = mysql_fetch_assoc($result)or die(mysql_error());
				extract($datainbox);
				$respon=0;	

				//baris tabel
				echo "<tr bgcolor=\"#DCDCDC\"  align=\"center\">";
				echo "<td>";
				echo "$nomor";
				echo "</td>";
				echo "<td>";
				echo $datainbox['SenderNumber'];
				echo "</td>";
				echo "<td>";
				echo $datainbox['ReceivingDateTime'];
				echo "</td>";
				echo "<td  align=\"left\">";	
				echo $datainbox['TextDecoded'];
				echo "</td>";
				echo "<td>";
				//nilai boolean untuk status respon. tabel inbox>status. nilai default 0.
				switch ($status)
					{
						case "0":
							echo "<img src=\"../view/images/warn.png\" height=\"15px\">";
							break;
						case "1":
							echo "<img src=\"../view/images/ok.png\" height=\"15px\">";
							break;

					}
				echo "<td>";
				echo "<a href=\"../main/inbox_balas.php?ID_Sender=";
				echo $ID;
				echo "\"><img src=\"../view/images/reply.png\" height=\"15px\"></a>";
				echo "<td>";
				//prompt pop up sebelum hapus
				echo "<a href=\"javascript:konfirmasi_hapus('Yakin dihapus?',
'../main/inbox_hapus.php?ID_hapus=";
				echo $ID;
				echo "')\" onclick=\"myFunction()\"><img src=\"../view/images/delete.png\" height=\"15px\"></a>";		
				echo "</td>";
				echo "<tr>";
					}
				echo "</table>";
?>