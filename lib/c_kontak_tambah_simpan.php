<?php


include "../db/m_kontak.php";
$result=mysql_query("SELECT max(ID) as maxID FROM kontak");
$datakontak = mysql_fetch_array($result)or die(mysql_error());

$idmax = $datakontak['maxID'];
$ID_tambah=$idmax+1;
$nama_kontak = $_POST['nama_kontak'];
$nomor_kontak = $_POST['nomor_kontak'];
$group = $_POST['group'];



$cek = "SELECT * FROM kontak WHERE nama_kontak = '$nama_kontak'";
if($result_cek = mysql_query($cek)){
        if(mysql_num_rows($result_cek)){

        echo "Kontak dengan nama \"".$nama_kontak."\" sudah ada! <br> Silakan <a href=\"../main/kontak_tambah.php\">buat lagi</a> dengan menggunakan nama lain atau <a href=\"../main/kontak.php\">edit kontak yang sudah ada</a>";
        exit;
        /*	
        echo "<script language=\"JavaScript\" type=\"text/javascript\">\n  
		var count =5\n
		var redirect=\"../main/kontak.php\"\n
		function countDown(){\n
		 if (count <=1){\n
		  window.location = redirect;\n
		 }else{\n
		  count--;\n  
		  document.getElementById(\"timer\").innerHTML = \"Kontak sudah ada!<br> Silakan gunakan nama lain atau edit kembali kontak yang sudah ada.<br> Kembali ke halaman sebelumnya dalam \"+count+\" detik.\"\n  
		  setTimeout(\"countDown()\", 1000)\n  
		 }\n  
		}\n  
		</script>\n   
		<span id=\"timer\">\n  
		<script>\n  
		 countDown();\n  
		</script>\n  
		</span>\n";
		*/

        }
        else {
        	//mengambil ID group
				$hasil_group=mysql_query("select * from kontak_group where group_name='$group'");
				$data_group=mysql_fetch_assoc($hasil_group);
				$group_ID_tambah=$data_group['group_ID'];

				//insert

                mysql_query("insert into kontak set ID='$ID_tambah', nama_kontak='$nama_kontak', nomor_kontak='$nomor_kontak'");
 				mysql_query("insert into kontak_membership set kontak_ID='$ID_tambah', group_ID='$group_ID_tambah'");
				echo "<br><img src=\"../view/images/loading.gif\" height=\"30px\"> Menambahkan kontak...";
				echo "<br>";
        }
}else{
        echo mysql_error();
}


//*/
?>