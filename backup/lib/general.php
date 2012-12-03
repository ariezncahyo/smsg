<html>
<head>
</head>
<body>
<style type="text/css">
body
{
background-image:url('../view/images/debut_light.png');
background-repeat:repeat;
width: 1000px ;
margin-left: auto ;
margin-right: auto ;
font-family: "Trebuchet MS", Helvetica, sans-serif;
}
</style>

<SCRIPT LANGUAGE="Javascript">
<!---
function konfirmasi_hapus(message, url){
if(confirm(message)) location.href = url;
}
// --->
</SCRIPT>
<?php
session_start();

if (isset($_SESSION['level']) && isset($_SESSION['username'])){
include "../view/header.php";
include "../lib/lib.php";
}
else {
	echo "anda belum login";
}
?>
<br>
<br>
</body>
</html>