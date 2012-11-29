<html>
<style type="text/css">
body
{
background-image:url('view/images/debut_light.png');
background-repeat:repeat;
width: 710px ;
margin-left: auto ;
margin-right: auto ;
font-family: "Trebuchet MS", Helvetica, sans-serif;
}
</style>
<body>
<br>
<strong>LOGIN<strong>
<br>
<form method="post" action="lib/c_loginsubmit.php">
  <table border="0">
    <tr>
      <td>Username </td>
      <td><input name="username" type="text"></td>
    </tr>
    <tr>
      <td>Password </td>
      <td><input name="password" type="password"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Submit"></td>
    </tr>
  </table>
</form>
<?php
include "view/footer.php";
?>
</body>
</html>