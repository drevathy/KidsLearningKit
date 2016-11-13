<table width="900" align="center">
<tr>
<td width="500" class="logo"></td>
<td align="right" ><span>
<form name='loginform' action='login.php' method="post">
<?php
if(isset($_COOKIE['kidsusername']))
{
	echo "<span class='aboveLogin'>Welcome ".$_COOKIE["kidsusername"]." !</span><span>(<a href='logout.php' class='register'> Logout </a>)</span>";	
}
else
{
?>
<a href='register.php' class="register"> Register now! </a>
<input type="text" name="username"  class="txtBoxStyle" value="Username" onfocus="if (this.value==this.defaultValue) this.value='';" onblur="if (this.value=='') this.value=this.defaultValue;" type="text"> 
<input type="password" name="userpass"  class="txtBoxStyle" value="Username" onfocus="if (this.value==this.defaultValue) this.value='';" onblur="if (this.value=='') this.value=this.defaultValue;" type="text"> 
<input type="image" src="images/go.png" align="absmiddle"></input>
<?php
}
?>
</form>
</span></div><div>&nbsp;</div></td>
<tr>
</table>
<script>
function fullScreenMode(theURL)
{
    XXX=window.screen.width;
    YYY=window.screen.height;
    //paramString="fullscreen=yes, toolbar=0, location=0, directories=0, status=0, menubar=0, scrollbars=0, resizable=0, copyhistory=no, width=";
    paramString="location=0, directories=0, status=0, top=0, left=0, scrollbars=0, resizable=1, copyhistory=no, width=";
    paramString+=XXX+", height="+YYY;
    interactivescreen=window.open(theURL, "interactive", paramString);
    interactivescreen.focus();
}</script>
