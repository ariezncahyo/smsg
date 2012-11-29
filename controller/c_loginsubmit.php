<?php

$username = $_POST['username'];
$pass = $_POST['password'];
include "../model/koneksi.php";
include "../model/m_user.php";

$query = "select * from user where username= '$username'";
$hasil = mysql_query($query)or die(mysql_error());
if (mysql_fetch_array($hasil) !== false)
{ 
	//echo "username benar";
	$query = "select * from user where username= '$username'";
	$hasil = mysql_query($query)or die(mysql_error());
	$data = mysql_fetch_array($hasil)or die(mysql_error());
	if ($pass==$data['password'])
	{
		//echo "password benar";
		session_start();
		$_SESSION['level'] = $data['level'];
		$_SESSION['username'] = $data['username'];
		include "../controller/c_loginsubmit_redirect.php";

	}
	else {
		echo "Password salah!<br>";
		include "../redirect-out.php";

	
	}
	//*/
}

else {
		echo "Username salah!<br>";
		include "../redirect-out.php";
}

?>