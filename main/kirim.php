<html>
<body>
<?php
include "../lib/general.php";
$page="kirim_proses_baru";
menu($page);
?>

<script language="JavaScript" type="text/javascript">  
var count =10
var redirect="../main/inbox.php"  
function countDown(){  
 if (count <=1){  
  window.location = redirect;  
 }else{  
  count--;  
  document.getElementById("timer").innerHTML = "Mungkin butuh beberapa detik lagi sebelum SMS muncul di Outbox. Halaman ini akan dialihkan dalam "+count+" detik."
  setTimeout("countDown()", 1000)  
 }  
}  
</script>   
<span id="timer">  
<script>  
 countDown();  
</script>
</span>
<?php
include "../view/footer.php";
?>
</body>
</html>