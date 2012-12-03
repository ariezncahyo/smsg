<?php
session_start();
if (isset($_SESSION['level']) && isset($_SESSION['username']))
{
	include "redirect-in.php";
}
else {
	include "form.php";
}

?>