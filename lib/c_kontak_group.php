<?php

echo "GROUP<br>";
			echo "<div style=\"float:right; padding-right:20px;\">

			<a href=\"../main/kontak_group_tambah.php\" ><img src=\"../view/images/add.png\" height=\"15px\"> Tambah group </a>
			|
			<a href=\"../main/kontak.php\" ><img src=\"../view/images/kontak.png\" height=\"15px\"> Kelola kontak </a>

			</div>";


			// tabel daftar kontak, select from kontak > $result
			include "../db/m_kontak.php";

			//select from kontak_group, jumlah group
			$hasil_group=mysql_query("select * from kontak_group")or die(mysql_error());
			$jumlahgroup=mysql_num_rows($hasil_group);
			echo "jumlah group ".$jumlahgroup;

				echo "<table cellspacing=\"0\" border=\"1\" bordercolor=\"white\" width=\"1000px\" >";
				echo "<tr bgcolor=\"#69AEE7\" align=\"center\">";
				echo "<td>";
				echo "No";
				echo "</td>";
				echo "<td>";
				echo "Nama Group";
				echo "</td>";
				echo "<td>";
				echo "Anggota Group";
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
				for ($i=0;$i<$jumlahgroup;$i++)
				{

				//perulangan untuk nomor urut di tampilan
				$nomor=$i+1; 

				//mengambil data dari db

				//baris tabel
				echo "<tr bgcolor=\"#DCDCDC\"  align=\"center\">";
				echo "<td>";
				echo $nomor;
				echo "</td>";
				echo "<td>";
				$datagroup = mysql_fetch_assoc($hasil_group)or die(mysql_error());
				extract($datagroup);
				echo $group_name." (".$group_ID.")";
				echo "</td>";
				echo "<td>";
				

				$hasil_member=mysql_query("select kontak.* from kontak, kontak_membership where kontak_membership.group_ID='$group_ID' and kontak_membership.kontak_ID=kontak.ID");
				$jumlahmember=mysql_num_rows($hasil_member);

				$x=1;
				while ($x<=$jumlahmember)
						{
						$member=mysql_fetch_assoc($hasil_member);
						extract($member);
						echo $member['nama_kontak'];
						echo " - ";
						$x++;
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
'../main/kontak_group_hapus.php?ID_hapus=";
				echo $group_ID;
				echo "')\" onclick=\"myFunction()\"><img src=\"../view/images/delete.png\" height=\"15px\"></a>";		
				echo "</td>";
				echo "<tr>";
					}
				echo "</table>";


?>