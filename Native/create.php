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
<?php
if(isset($_COOKIE['kidsusername']))
{
?>

	<form action="customize.php" method="post" enctype="multipart/form-data">
	<?php
		if(isset($_GET['param']) && $_GET['param'] == "success")
		{
			echo "<div class='aboveLogin' align='center'>your picture created successfully! <br><a href='mypage.php'>check your page</a></div>";
		}
		
	?>
<div class="tabletext" style="padding-left: 25%">
<div><img src="images/formheader.png"></div>
</div>
<table border="0" bgcolor="white" cellpadding="0" width="350" cellspacing="0" align="center" class="tabletext">
<tr>
	<tr><td>Upload</td><td><input type="file" name="file" id="file" /></td></tr> 
	<tr><td>Question: </td><td><input type="text" name="question" id="question" size="32"></td></tr>
	<tr><td>Answer:  </td><td><input type="text" name="answer" id="answer" size="32"></td></tr>
	<tr><td>Subject:</td><td>
		<select name="subject">
            <option value="1" selected>Animals</option>
            <option value="2">Entertainment</option>
		  <option value="3">Education</option>
		  <option value="4">People</option>
		  <option value="5">Science</option>
            <option value="6">Transport</option>
		  <option value="7">Geography</option>
		  <option value="8">Food</option>
		  <option value="9">Computers</option>
		</select></td></tr>
		<tr><td>Share with public</td><td><input type="radio" name="status" value="1" checked="checked">yes</input><input type="radio" name="status" value="0">no</input></td></tr>
	<tr><td>Tags:  </td><td><input type="text" name="tags" id="tags" size="32"></td></tr>
	<tr><td></td><td align="left"><br><input type="submit" name="submit" value="Submit"/></td></tr>
	</tr>
</table>
<div class="tabletext" style="padding-left: 25%">
<div><img src="images/formfooter.png"></div>
</div>

		
	</form>
<?php
}
else
{
	echo "<center><a href='register.php?param=3&someother=1' class='newgamesLink'>Please login and start creating!</a></center><br><br><br><br><br><br><br><br><br><br><br><br><br><br>	</br>";
}
?>	
<br><br>
<?php
include "footer.php";
?>
</body>
</html>