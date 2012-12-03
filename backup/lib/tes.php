<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Mouse-Only Multi Selections</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
</head>
<body>
<p>
 <select multiple id='sm' size='6'>
  <option>To make
  <option>Multiple
  <option>Selections
  <option>Just Click
  <option>With The
  <option>Mouse
 </select>
 <select multiple id='sm2' size='6'>
  <option>Everything
  <option>Is
  <option>Possible
  <option>Until
  <option>Proven
  <option>Otherwise
 </select>

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

</body>
</html>