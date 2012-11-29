<?php

echo "KONTAK<br>";
			echo "<div style=\"float:right; padding-right:20px;\"><a href=\"../main/kontak_tambah.php\" >Tambah kontak <img src=\"../view/images/add.png\" height=\"15px\"></a></div>";


			// tabel daftar kontak
			include "../db/m_kontak.php";
				echo "<table cellspacing=\"0\" border=\"1\" bordercolor=\"white\" width=\"1000px\" >";
				echo "<tr bgcolor=\"#69AEE7\" align=\"center\">";
				echo "<td>";
				echo "No";
				echo "</td>";
				echo "<td>";
				echo "Nama";
				echo "</td>";
				echo "<td>";
				echo "Nomor HP";
				echo "</td>";
				echo "<td>";	
				echo "ID";
				echo "</td>";
				echo "<td>";	
				echo "Group";
				echo "</td>";
				echo "<td width=\"60px\">";
				echo "SMS";
				echo "</td>";
				echo "</td>";
				echo "<td width=\"60px\">";
				echo "Edit";
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
				$datakontak = mysql_fetch_assoc($result)or die(mysql_error());
				extract($datakontak);
				//baris tabel
				echo "<tr bgcolor=\"#DCDCDC\"  align=\"center\">";
				echo "<td>";
				echo "$nomor";
				echo "</td>";
				echo "<td>";
				echo $datakontak['nama_kontak'];
				echo "</td>";
				echo "<td>";
				echo $datakontak['nomor_kontak'];
				echo "</td>";
				echo "<td>";	
				echo $datakontak['ID'];
				echo "</td>";
				echo "<td>";	
				echo $datakontak['group_kontak'];
				echo "</td>";
				echo "<td>";
				echo "<a href=\"../main/kirim_lagi.php?kirimlagi=";
				echo $ID;
				echo "\"><img src=\"../view/images/sms.png\" height=\"15px\"></a>";				
				echo "<td>";
				echo "<a href=\"../kontak/edit_kontak.php?ID=";
				echo $ID;
				echo "\"><img src=\"../view/images/edit.png\" height=\"15px\"></a>";
				echo "<td>";
				//prompt pop up sebelum hapus
				echo "<a href=\"javascript:konfirmasi_hapus('Yakin dihapus?',
'../main/kontak_hapus.php?ID_hapus=";
				echo $ID;
				echo "')\" onclick=\"myFunction()\"><img src=\"../view/images/delete.png\" height=\"15px\"></a>";		
				echo "</td>";
				echo "<tr>";
					}
				echo "</table>";



?>