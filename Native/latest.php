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
<td valign="bottom" width="113" class="activetab"><a href="latest.php" class="activetablinks">GALLERY</a></td>
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
<table border="0" cellpadding="0" cellspacing="0" align="center">
<tr>
<td><div></div></td><tr>
<?Php
// this program will list all the publicly shared items
include 'connect.php';
$i=1;
$result = mysql_query("select PIC_QUESTION,PIC_TOSHOW,PIC_TAGS FROM kid_quizquestions where PIC_SHAREDSTATUS=1 order by QUIZ_ID desc");
while ($row = mysql_fetch_array($result,MYSQL_ASSOC)) 
{
	$question=$row{'PIC_QUESTION'};
	$picture=$row{'PIC_TOSHOW'};
	$question=substr($question,0,18)."...?";
	$tags=$row{'PIC_TAGS'};
?>
<td><div><div id="ArticleRightCol">
	<div id="listing">
		<div class="head"></div>
		<div class="nwBody">
		<a href="#"><img src="game/<?Php echo $picture; ?>" border="0" class="img"/></a>
		<div class="info">
		<div><a href="#"><?Php echo $question; ?></a></div>
		<?Php echo $tags; ?>
		</div>
		</div> 
		<div class="fot">
		<div class="wrp"><a href="#">Play</a></div>
	</div>  
</div></div></td><td>&nbsp;&nbsp;&nbsp;</td>
<?Php
	if($i!=0 && $i%4==0)
	{
	echo "</tr><td></td><tr>";
	}
	
	$i++;
}
mysql_close($dbh);
?>


</table>
<br><br>
<?php
include "footer.php";
?>
</body>
</html>