<html>
<head>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body class="bgStyle" align="center">
<table width="900" align="center">
<tr>
<td width="500" class="logo"></td>
<td align="right" ><div class="aboveLogin">If you are not a member yet...<br>Join right away! 
<a href='register.php' class="register">Register now!</a></div>
<div><span>
<input type="text" name="name"  class="txtBoxStyle" value="Username" onfocus="if (this.value==this.defaultValue) this.value='';" onblur="if (this.value=='') this.value=this.defaultValue;" type="text"> 
<input type="text" name="password"  class="txtBoxStyle" value="Password" onfocus="if (this.value==this.defaultValue) this.value='';" onblur="if (this.value=='') this.value=this.defaultValue;" type="text"> 
<input type="image" src="images/go.png" align="absmiddle"></input>
</span></div></td>
<tr>
</table>

<table border="0" cellpadding="0" cellspacing="0" align="center">
<tbody>
<tr>
<td valign="bottom" width="113" class="normaltab"><a href="homepage.php" class="normaltablinks">HOME</a></td>
<td valign="bottom" width="11"></td>
<td valign="bottom"  width="113" class="normaltab"><a href="mypage.php" class="normaltablinks">MY PAGE</a></td>
<td valign="bottom" width="11"></td>
<td valign="bottom" width="113" class="normaltab"><a href="latest.php" class="normaltablinks">GALLERY</a></td>
<td valign="bottom" width="11"></td>
<td valign="bottom" width="113" class="activetab" ><a href="create.php" class="activetablinks">CREATE</a></td>	
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
<br></br>

<table border="0" cellpadding="0" width="464" cellspacing="0" align="center" class="tabletext">
	<form action="create.php" method="post" enctype="multipart/form-data">
	<?php
		if(isset($_GET['param']) && $_GET['param'] == "success")
		{
			echo "<div class='aboveLogin' align='center'>your picture created successfully!</div>";
		}
		else
		{
	?>
	<table border="0" cellpadding="0" width="300" cellspacing="0" align="center" class="tabletext">
	<tr>
<td><div><img src="images/formheader.png"></img></div></td>
<tr>
	<tr><td>Upload your file!  <input type="file" name="file" id="file" /></td></tr> 
	<tr><td>Question: <input type="text" name="question" id="question"></td></tr>
	<tr><td>Answer:  <input type="text" name="answer" id="answer"></td></tr>
	<tr><td>Tags:  <input type="text" name="tags" id="tags"></td></tr>
	<tr><td align="center"><input type="submit" name="submit" value="Submit" /></td></tr>
	</tr>
	<tr>

<td><div><img src="images/formfooter.png"></img></div></td>
<tr>
	</table>
	
	<?php
	 }
	?>
	</form>
</tr>


</table>



</body>
</html>