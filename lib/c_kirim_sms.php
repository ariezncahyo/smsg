<html>
<head>
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
<div class="tabber">

     <div class="tabbertab">
	  <h2>Tujuan Tidak Terdaftar</h2>
	  <?php
	//membuat dan mengirim sms baru (variabel kosong)
	echo "<form action=\"../main/kirim.php\" method=\"POST\">";
	echo "<table><tr><td>Nomor tujuan : </td><td>";
	echo "<input type=\"text\" name=\"SNproses\" value=\"\">";
	echo "</td></tr><tr><td>Pesan : </td><td>";
	echo "<textarea name=\"pesan\" rows=\"4\" cols=\"40\"></textarea>";
	echo "</td></tr><tr><td></td><td>";
	echo "<input type=\"submit\" value=\"Kirim\">";
	echo "</td></tr></table></form>";
	?>
     </div>

     <div class="tabbertab">
	  <h2>Dari Kontak</h2>
	  <form action="../main/kirim_multikontak.php" method="POST">
	  <table>
	  <tr><td>
	  Tujuan  :<br>
	  <select multiple=\"true\" name="multikontak[]" id="sm" size=/"7/">
	  	<?php
	  		include "../db/m_kontak.php";
			$i=1;
			while ($i<=$nrows) {
				$datakontak = mysql_fetch_assoc($result)or die(mysql_error());
				extract($datakontak);
				echo "<option value=\"".$datakontak['nama_kontak']."\">".$datakontak['nama_kontak']."</option>";
				$i++;
			}
		?>
	  </select>
	  </td><td>
	  Pesan :<br>
		<textarea name="pesan" rows="4" cols="40"></textarea>
		<br>
		<input type="submit" value="Kirim"></form>
		</td></tr></table>
		<script type='text/javascript'>

function multiSelect( elemId )
{
 var table = [], box = document.getElementById(elemId), lastSelected = -1, tempIdx, ctrl = false;  
   
 box.onkeyup = box.onkeydown = readCtrlKey; 
 
 box.onclick = function( /*28432953637269707465726C61746976652E636F6D*/ )
 {
  if( !ctrl )
  {  
   if( !inTable( this.selectedIndex ) )
    table.push( this.selectedIndex );  
   else
    removeFromTable( this.selectedIndex ); 
 
   tempIdx = this.selectedIndex;  
  
   for( var i=0, len = this.options.length; i<len ; i++ ) 
    if( i != this.selectedIndex )
     this.options[ i ].selected = inTable( i );   
    
   this.options[ this.selectedIndex ].selected = inTable( this.selectedIndex );     
  
   lastSelected = tempIdx;
  }
 }
 
 function removeFromTable( idx )
 {
  for( var i=0, len=table.length; i<len && table[i]!=idx; i++ )
  ;      
  if(i != len)
   table.splice(i, 1);
 }
 
 function inTable( idx )
 {
  for( var i=0, len=table.length; i<len && table[i]!=idx; i++ )
  ;  
  return i != len;  
 } 
 
 function readCtrlKey( evt )
 {
  var e = evt || window.event;  

  if( typeof( e.ctrlKey ) != 'undefined')
   ctrl = e.ctrlKey;   
 } 
}

multiSelect( "sm" );
multiSelect( "sm2" );

</script>
     </div>

     <div class="tabbertab">
	  <h2>Dari Group</h2>
	  <p>Group SMS</p>
     </div>
</div>


</body>
</html>