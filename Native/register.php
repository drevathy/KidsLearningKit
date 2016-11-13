<html>
<head>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body class="bgStyle" align="center">
<?php
include "loginheader.php"
?>

<table border="0" cellpadding="0" cellspacing="0" align="center">
<tbody>
<tr>
<td valign="bottom" width="113" class="normaltab"><a href="homepage.php" class="normaltablinks">HOME</a></td>
<td valign="bottom" width="11"></td>
<td valign="bottom"  width="113" class="normaltab"><a href="mypage.php" class="normaltablinks">MY PAGE</a></td>
<td valign="bottom" width="11"></td>
<td valign="bottom" width="113" class="normaltab"><a href="latest.php" class="normaltablinks">GALLERY</a></td>
<td valign="bottom" width="11"></td>
<td valign="bottom" width="113" class="normaltab" ><a href="create.php" class="normaltablinks">CREATE</a></td>	
<td valign="bottom" width="11"></td>
<td valign="bottom" width="113" class="normaltab" ><a href="games.php" class="normaltablinks">GAME ZONE</a></td>
<td valign="bottom" width="12"></td>
<td width="110" align="right"><span class="submenu"> </span><br>
</td>
<form name="searchForm" action="Search.on"></form>
<td width="140" align="right"><span class="submenu"> 
<input name="searchfield" rows="2" cols="20" value="Search" onfocus="if (this.value==this.defaultValue) this.value='';" onblur="if (this.value=='') this.value=this.defaultValue;" class="searchbox" type="text"> </span>
</td>
<td align="right"><input src="images/search.png" type="image" ></td>
</tr>
</tbody>
</table>	

<table width="896" border="0" cellpadding="0" cellspacing="0" align="center">
<tbody>
<tr>
<td valign="top" style="height: 2px; width: 900px;" background="images/greenline.png">
</td>

</tr>
<tr>
<td class="greenintrotext">Pictures are not just to see... we can learn and play with them too!</td>
<td></td>

</tr>
</tbody>
</table>
<table border="0" cellpadding="0" height="500" cellspacing="0" align="center">

<tr>
<td><div></div></td>
<script>
function enablelogin()
{
document.getElementById("login").style.display='block';
document.getElementById("register").style.display='none';
}
function enableregister()
{
document.getElementById("register").style.display='block';
document.getElementById("login").style.display='none';
}

</script>
<td><div><div><img src="images/formheader.png"></img></div>
<form method="post" action="regform.php">
<?php
$mes="";$loginstyle="style=display:none";$regstyle="style=display:block";
if(isset($_GET['param']))
{
	if($_GET['param'] == "3")
	{
		$mes = "<center>Congrats! You can login now!</center>";
		$loginstyle="style=display:block";	
		$regstyle="style=display:none";
	}
	if($_GET['param'] == "2" )
	{
		$mes = "<center>Sorry! Email Already Exists! Try another!</center>";	
		$regstyle="style=display:block";	
	}
	if($_GET['param'] == "1" )
	{
		$mes = "<center>Sorry! Username Taken. Try another!</center>";
		$regstyle="style=display:block";	
	}
}
?>
<div class="aboveLogin"> 
<?php 
if(!(isset($_GET['someother'])))
echo $mes; 
?></div>
<?php echo "<table $regstyle; id='register' align='center' width='250' class='tabletext'>"; ?> 
<tr><td> UserName : </td><td> <input type="text" name="uname" id="uname"> </td></tr>
<tr><td> Password : </td><td> <input type="password" name="password" id="password"> </td></tr>
<tr><td> Email : </td><td> <input type="text" name="email" id="email"> </td></tr>
<tr><td></td><td align="center"><input type="submit" name="submit" id="submit" value=" Register " class="buttons"></td></tr>
<tr><td><a href="javascript:void(0);" onclick="enablelogin();">Login here</a></td></tr>
</table>

</form>
<form method="post" action="login.php">
<?php echo "<table $loginstyle; id='login' align='center' width='250' class='tabletext'>"; ?> 
<tr><td><br></td><td></td></tr>
<tr><td> UserName : </td><td> <input type="text" name="username"> </td></tr>
<tr><td> Password : </td><td> <input type="password" name="userpass"> </td></tr>
<tr><td></td><td  align="center"><input type="submit" name="submit" id="submit" value=" Login " class="buttons"></td></tr>
<tr><td><a href="javascript:void(0);" onclick="enableregister();">Register here</a></td></tr>
</table>
<div><img src="images/formfooter.png"></img></div>
</form>
</div></td>
</tr>

</table>
</body>
</html>