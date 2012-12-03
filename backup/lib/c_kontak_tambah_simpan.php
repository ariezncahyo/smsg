<?php



include "../db/m_kontak.php";
$result=mysql_query("SELECT max(ID) as maxID FROM kontak");
$datakontak = mysql_fetch_array($result)or die(mysql_error());
$idmax = $datakontak['maxID'];
$ID_tambah=$idmax+1;
$nama_kontak = $_POST['nama_kontak'];
$nomor_kontak = $_POST['nomor_kontak'];

$groupselected=$_POST['group'];
$jumlah=count($groupselected);


$cek = "SELECT * FROM kontak WHERE nama_kontak = '$nama_kontak'";
if($result_cek = mysql_query($cek)){
        if(mysql_num_rows($result_cek)){

        echo "Kontak dengan nama \"".$nama_kontak."\" sudah ada! <br> Silakan <a href=\"../main/kontak_tambah.php\">buat lagi</a> dengan menggunakan nama lain atau <a href=\"../main/kontak.php\">edit kontak yang sudah ada</a>";
        exit;

        }
        else {
        		//menambahkan kontak
        	    mysql_query("insert into kontak set ID='$ID_tambah', nama_kontak='$nama_kontak', nomor_kontak='$nomor_kontak'");
        		
        		foreach ($groupselected as $groupselect) 
                 {                 		
        		$hasil_group=mysql_query("select * from kontak_group where group_name='$groupselect'");
				$data_group=mysql_fetch_assoc($hasil_group);
				$group_ID_tambah=$data_group['group_ID'];
				//insert into membership
 				mysql_query("insert into kontak_membership set kontak_ID='$ID_tambah', group_ID='$group_ID_tambah'");
 				}
 				
				echo "<br><img src=\"../view/images/loading.gif\" height=\"30px\"> Menambahkan kontak...";
				echo "<br>";
        }
}else{
        echo mysql_error();
}


//*/
?>