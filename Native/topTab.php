<html>
<head>
<style>
.t {background: url(images/dot.png) 0 0 repeat-x; width: 290px;}
.b {background: url(images/dot.png) 0 100% repeat-x}
.l {background: url(images/dot.png) 0 0 repeat-y}
.r {background: url(images/dot.png) 100% 0 repeat-y}
.bl {background: url(images/pic-btmleft-corn.gif) 0 100% no-repeat}
.br {background: url(images/pic-btmrig-corn.gif) 100% 100% no-repeat}
.tl {background: url(images/pic-left-corn.gif) 0 0 no-repeat}
.tr {background: url(images/pic-rig-corn.gif) 100% 0 no-repeat; padding:10px}
.latest  { float: center; width: 100%; margin-top: 10px; padding: 0.5em; background-color: #9ABE05; border: thin solid #9ABE05}
</style>
<link rel="stylesheet" type="text/css" href="styles.css" />
<script src="scriptaculous.js"></script>
</head>
<body class="bgStyle" align="center">
<table width="900" align="center">
<tr>
<td width="500" class="logo"></td>
<td align="right" ><!--<div class="aboveLogin">If you are not a member yet...<br>Join right away! 
<a href='register.php' class="register">Register now!</a></div>-->
<div><span>
<form name='loginform' action='login.php' method="post">
<?php
if(isset($_COOKIE['kidsusername']))
{
	echo "<span class='aboveLogin'>Welcome ".$_COOKIE["kidsusername"]." !</span><span><a href='logout.php' class='register'> Logout </a></span>";	
}
else
{
?>
<a href='register.php' class="register">Register now! </a><input type="text" name="username"  class="txtBoxStyle" value="Username" onfocus="if (this.value==this.defaultValue) this.value='';" onblur="if (this.value=='') this.value=this.defaultValue;" type="text"> 
<input type="password" name="userpass"  class="txtBoxStyle" onfocus="if (this.value==this.defaultValue) this.value='';" onblur="if (this.value=='') this.value=this.defaultValue;" type="text"> 
<input type="image" src="images/go.png" align="absmiddle"></input>
<?php
}
?>
</form>

