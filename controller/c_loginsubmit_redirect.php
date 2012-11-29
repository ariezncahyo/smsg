<html>
<style type="text/css">
body
{
background-image:url('../view/images/debut_light.png');
background-repeat:repeat;
width: 710px ;
margin-left: auto ;
margin-right: auto ;
font-family: "Trebuchet MS", Helvetica, sans-serif;
}
</style>
<body>
<script language="JavaScript" type="text/javascript">  
var count =2
var redirect="../main/inbox.php"  
function countDown(){  
 if (count <=1){  
  window.location = redirect;  
 }else{  
  count--;  
  document.getElementById("timer").innerHTML = "Login berhasil."  
  setTimeout("countDown()", 1000)  
 }  
}  
</script>   
<span id="timer" style="text-align:center;"> 
<script>  
 countDown();  
</script>  
</span>

<?php
include "../view/footer.php";
?>
</body>
</html>