<?php

include "../db/m_kontak.php";
$result=mysql_query("SELECT max(group_ID) as maxID FROM kontak_group")or die(mysql_error());
$datagroup = mysql_fetch_array($result)or die(mysql_error());

$idmax = $datagroup['maxID'];
$group_ID_tambah=$idmax+1;
$group_name = $_POST['group'];

$cek = "SELECT * FROM kontak_group WHERE group_name = '$group_name'";
if($result_cek = mysql_query($cek)){
        if(mysql_num_rows($result_cek)){

        echo "Group dengan nama \"".$group_name."\" sudah ada! <br> Silakan <a href=\"../main/kontak_group_tambah.php\">buat lagi</a> dengan menggunakan nama lain atau <a href=\"../main/kontak.php\">edit group yang sudah ada</a>";
        exit;
 
        }
        else {
				//insert
                mysql_query("insert into kontak_group set group_ID='$group_ID_tambah', group_name='$group_name'");
				echo "<br><img src=\"../view/images/loading.gif\" height=\"30px\"> Menambahkan group...";
				echo "<br>";
        }
}else{
        echo mysql_error();
}
?>