<?php

echo "KONTAK<br>";
			echo "<div style=\"float:right; padding-right:20px;\">

			<a href=\"../main/kontak_tambah.php\" ><img src=\"../view/images/add.png\" height=\"15px\"> Tambah kontak </a>
			|
			<a href=\"../main/kontak_group.php\" ><img src=\"../view/images/group.png\" height=\"15px\"> Kelola Group </a>

			</div>";


			// tabel daftar kontak
			//mengambil data kontak, membership, dan group dari db
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

				$datakontak = mysql_fetch_assoc($result)or die(mysql_error());
				extract($datakontak);
				//baris tabel
				echo "<tr bgcolor=\"#DCDCDC\"  align=\"center\">";
				echo "<td>";
				echo $nomor;
				echo "</td>";
				echo "<td>";
				echo $datakontak['nama_kontak'];
				echo "</td>";
				echo "<td>";
				echo $datakontak['nomor_kontak'];
				echo "</td>";
				echo "<td>";
				$ID=$datakontak['ID'];
				$result_membership=mysql_query("select kontak_group.* from kontak_membership, kontak_group where kontak_membership.kontak_ID='$ID' and kontak_membership.group_ID=kontak_group.group_ID;");
				$jumlah_group=mysql_num_rows($result_membership);
				for ($x=0;$x<$jumlah_group;$x++)
				{
				$membership=mysql_fetch_assoc($result_membership);
				echo $membership['group_name']." / ";
				}
				echo "</td>";
				echo "<td>";
				echo "<a href=\"../main/kontak_kirim.php?ID=";
				echo $ID;
				echo "\"><img src=\"../view/images/sms.png\" height=\"15px\"></a>";				
				echo "<td>";
				echo "<a href=\"../main/kontak_edit.php?ID=";
				echo $ID;
				echo "\"><img src=\"../view/images/edit.png\" height=\"15px\"></a>";
				echo "<td>";
				//prompt pop up sebelum hapus
				echo "<a href=\"javascript:konfirmasi_hapus('Yakin dihapus?',
'../main/kontak_hapus.php?ID_hapus=";
				echo $datakontak['ID'];
				echo "')\" onclick=\"myFunction()\"><img src=\"../view/images/delete.png\" height=\"15px\"></a>";		
				echo "</td>";
				echo "<tr>";
					}
				echo "</table>";



?>