<?php
echo "OUTBOX<br><br>";
			include "../model/m_outbox.php";
			
				echo "<table  cellspacing=\"0\" border=\"1\" bordercolor=\"white\" width=\"1000px\">";
				echo "<tr bgcolor=\"#69AEE7\"  align=\"center\">";
				echo "<td width=\"30px\">";
				echo "No";
				echo "</td>";
				echo "<td width=\"120px\">";
				echo "Dikirim ke";
				echo "</td>";
				echo "<td width=\"180px\">";
				echo "Waktu";
				echo "</td>";
				echo "<td >";	
				echo "Pesan";
				echo "</td>";
				echo "</td>";
				echo "<td width=\"80px\">";
				echo "Kirim baru";
				echo "</td>";
				echo "<td  width=\"60px\">";
				echo "Hapus";
				echo "</td>";
				echo "<tr>";

				//perulangan untuk menampilkan data di tabel (perulangan baris)
				for ($i=0;$i<$nrows;$i++)
				{
				//mengambil data dari db
				$nomor=$i+1;
				$dataoutbox = mysql_fetch_assoc($result)or die(mysql_error());
				extract($dataoutbox);
				echo "<tr bgcolor=\"#DCDCDC\" align=\"center\">";
				echo "<td>";
				echo "$nomor";
				echo "</td>";
				echo "<td>";
				echo $dataoutbox['DestinationNumber'];
				echo "</td>";
				echo "<td>";
				echo $dataoutbox['SendingDateTime'];
				echo "</td>";
				echo "<td align=\"left\">";	
				echo $dataoutbox['TextDecoded'];
				echo "</td>";
				echo "<td>";
				echo "<a href=\"../main/kirim_lagi.php?kirimlagi=";
				echo $ID;
				echo "\"><img src=\"../view/images/sms.png\" height=\"15px\"></a>";
				echo "<td>";
				//prompt pop up sebelum hapus
				echo "<a href=\"javascript:konfirmasi_hapus('Yakin dihapus?',
'../main/outbox_hapus.php?ID_hapus=";
				echo $ID;
				echo "')\" onclick=\"myFunction()\"><img src=\"../view/images/delete.png\" height=\"15px\"></a>";

				echo "</td>";
				echo "<tr>";
					}
				echo "</table>";



?>