<html>
<body>
<?php
include "../controller/general.php";
$page="inbox";
menu($page);
?>
<?php
include "../view/footer.php";
?>
<!--muat ulang otomatis setiap 10 detik-->
<script language="JavaScript" type="text/javascript">  
var count =10
var redirect="../main/inbox.php"  
function countDown(){  
 if (count <=1){  
  window.location = redirect;  
 }else{  
  count--;  
  setTimeout("countDown()", 1000)  
 }  
}  
</script>   
<span id="timer">  
<script>  
 countDown();  
</script>  
</span>
<br><br>

</body>
</html>