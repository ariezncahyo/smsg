<html>
<style type="text/css">
body
{
background-image:url('view/images/debut_light.png');
background-repeat:repeat;
width: 1000px ;
margin-top: 150px;
margin-left:auto;
margin-right: auto;
font-family: "Trebuchet MS", Helvetica, sans-serif;
}
</style>
<body>
<table width="100%"><tr><td align="center">
<h2><strong>SMSG</strong></h2>
-- Open Source SMS Gateway Management --
<br>
<br>
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
      <td><input type="submit" name="" value="Login"></td>
    </tr>
  </table>
</form>
</td></tr></table>
<?php
include "view/footer.php";
?>
</body>
</html>