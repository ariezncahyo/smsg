<?php
echo "<table border=\"0\"><tr><td>";
echo "<img src=\"view/images/phone.jpg\" height=\"40px\">";
echo "</td><td>";
echo "<strong>SISGATE | Sistem Informasi SMS Gateway</strong><br>Balai Karantina Pertanian Kelas I Mataram";
echo "</td></tr></table>";
echo "<br>";
session_start();
if (isset($_SESSION['level']) && isset($_SESSION['username']))
{
	include "redirect-in.php";
}
else {
	include "form.php";
}

?>