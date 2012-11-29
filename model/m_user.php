<?php
include "koneksi.php";
$cxn=mysql_connect ($host, $user, $password, $dbname);
mysql_select_db($dbname);
if ($cxn) echo "";
	else echo "Galat : gagal terkoneksi ke database smsd";
?>