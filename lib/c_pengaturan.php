<!-- $Id: example.html,v 1.4 2006/03/27 02:44:36 pat Exp $ -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>PENGATURAN</title>

<script type="text/javascript" src="../view/tabber/tabber.js"></script>
<link rel="stylesheet" href="../view/tabber/example.css" TYPE="text/css" MEDIA="screen">
<link rel="stylesheet" href="../view/tabber/example-print.css" TYPE="text/css" MEDIA="print">

<script type="text/javascript">

/* Optional: Temporarily hide the "tabber" class so it does not "flash"
   on the page as plain HTML. After tabber runs, the class is changed
   to "tabberlive" and it will appear. */

document.write('<style type="text/css">.tabber{display:none;}<\/style>');
</script>

</head>
<body>
PENGATURAN
<div class="tabber">

     <div class="tabbertab">
	  <h2>Manajemen User</h2>
	  <p>Halaman manajemen user</p>
     </div>

     <div class="tabbertab">
	  <h2>Autoreply</h2>
	  <p>Pengaturan otomatis balas</p>
     </div>

     <div class="tabbertab">
	  <h2>Service</h2>
	  <p>Service Gammu</p>
     </div>



     <div class="tabbertab">
	  <h2>Log</h2>
	  <p>
<?php
			
			echo "<strong>Gammu SMS Daemon Log</strong><br>";
			echo "<br>";
			$output=array(); 
			exec("tail /etc/gammu-smsd.log", $output);

			//exec("gammu identify", $output);
			foreach($output as $line) {
    		echo $line;
    		echo "<br>";
			}
?>

	  </p>
     </div>

</div>




</body>
</html>