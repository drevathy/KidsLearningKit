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

.latest  { float: center; width: 100%; margin-top: 10px; padding: 0.5em; }

</style>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body class="bgStyle" align="center">
<?php
include "headerhome.php";
include "functions.php";
?>
<table border="0" cellpadding="0" cellspacing="0" align="center">
<tr>
<td><div><table border="0" cellpadding="0" cellspacing="0" align="center">
<tr>
<td><div></div></td>
<td><div class="t"><div class="b"><div class="l"><div class="r"><div class="bl">
<div class="br"><div class="tl">
<div class="tr">
<table border="0" >
<tr>
<td style="background: url(images/upload.gif) 0 0 repeat-x; width: 70px;"><br><br><br><br></td>
<td>
<span style="font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 1.2em; font-weight: bold; color: #88A901;">
UPLOAD...<br></span>
<span style="font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; color: #666666;">
<br>
Upload your pics and make your kid to learn
and play with joy.
<br></br>
Pic makes the learning easier and 
more appealing to the kids than simple text!
</span></td>
</tr>
</table>
</div></td>

<td>
<table border="0" cellpadding="0" cellspacing="0" style="margin-left: 10px;">
<tr>
<td><div class="t"><div class="b"><div class="l"><div class="r"><div class="bl">
<div class="br"><div class="tl">
<div class="tr">
<table border="0" >
<tr>
<td style="background: url(images/teach.gif) 0 0 repeat-x; width: 70px;"><br><br><br><br></td>
<td>
<span style="font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 1.2em; font-weight: bold; color: #88A901;">
TEACH...<br></span>
<span style="font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; color: #666666;">
<br>
Teach your kids with pics, so that they start love to learn.
<br><br>
Prepare your kids to learn with pictures.
</span></td>
</tr>
</table></td>
<td>
<table border="0" cellpadding="0" cellspacing="0" style="margin-left: 10px;">
<tr>
<td><div class="t"><div class="b"><div class="l"><div class="r"><div class="bl">
<div class="br"><div class="tl">
<div class="tr">
<table border="0">
<tr>
<td style="background: url(images/share.gif) 0 0 repeat-x; width: 70px;"><br><br><br><br></td>
<td>
<span style="font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 1.2em; font-weight: bold; color: #88A901;">
SHARE...<br></span>
<span style="font-family: Arial, Tahoma, Helvetica, sans-serif; font-size: 11px; color: #666666;">
<br>
Share your kids learning with other kids
in the world.
<br></br>
Lets share knowledge instead of keeping them with you!
</span></td>
</tr>
</table></td>
</tr></table></div></td>
</tr></table>
</table>

<table width="100%" class="latest">
<tr>
<br>
<div class="iblock">
      <div class="title"><img src="images/latest.png" height="32" width="30" align="absmiddle" style="margin-top:-9px;"> </img>LATEST</div>
      <div style="clear: both;"></div>
      <div class="contestblock">
<?Php
// this program will list out all the sites in the sitelog table
include 'connect.php';
$result = mysql_query("select QUIZ_ID,PIC_QUESTION,PIC_TOSHOW FROM kid_quizquestions order by QUIZ_ID desc limit 6");
while ($row = mysql_fetch_array($result,MYSQL_ASSOC)) 
{
	$question=$row{'PIC_QUESTION'};
	$quizid=$row{'QUIZ_ID'};
	$picture=$row{'PIC_TOSHOW'};
	$question=substr($question,0,18)."...?";
	echo '<td style="background: url(images/recent-games.png); background-repeat: no-repeat; height: 122px; width: 136px; margin-top:-10px;">';
	echo '<div style="margin-left: 12px;">';
	echo '<img src="game/'.$picture.'" width="115" height="90"></div>';
	echo '<div style="margin-top: -2px; text-align: center;"><a href="javascript:void(0)" onclick=fullScreenMode("gamefull.php?gameid='.$quizid.'") class="newgamesLink">'.$question.'</a></div>';
	echo "</td>";
}
?>
</div></tr>		
<td></td>	
<table border="0" cellpadding="3">
<tr valign="top">
<td width="194"><div id="ArticleRightCol">
	<div id="listing">
	<div class="iblock" style="padding-top:16px; margin-top:10px;">
	<div class="title" style="padding-top: -25px; color: #99BD37;"><img src="images/game.png" height="26" width="29" align="absmiddle"> </img>MOST PLAYED</div>
	</div>	
<?Php
// this program will list out all
$result = mysql_query("select PIC_CATID,USER_ID,PIC_QUESTION,PIC_TOSHOW FROM kid_quizquestions order by QUIZ_ID asc limit 3");
while ($row = mysql_fetch_array($result,MYSQL_ASSOC)) 
{
	$username=getUserName($row{'USER_ID'});
	$question=$row{'PIC_QUESTION'};
	$picture=$row{'PIC_TOSHOW'};
	$catid=getSubjectName($row{'PIC_CATID'});
	$question=substr($question,0,16)."...?";
?>
		<div class="nwBody">
		<a href="#"><img src="game/<?Php echo $picture;?>" border="0" class="img"/></a>
		<div class="info">
		<div><a href="#"><?Php echo $question;?></a></div>
		<div>Subject: <?Php echo $catid;?></div>
		By: <?Php echo $username;?>
		</div>
		<div></div>
		<div class="info" style="padding-top:68px;"><a href="#"><img src="images/playhover.png" onmouseover="this.src='images/play.png';" onmouseout="this.src='images/playhover.png';" border="0"></img></a></div>
		</div>
<?Php		
}
?>	
</div></td>
<td></td><td></td>

<td width="153" style="padding-left:50px; padding-top:-40px;"><table width="300" border="0" cellpadding="3" cellspacing="0" class='tabletext'>
<br>
<tbody><tr><td style="background-image:url('images/topgrey.png'); background-repeat:no-repeat;">&nbsp;&nbsp;Feedback?<br><br></td></tr>
<tr><td>Name <input type="text" class="searchbox"></input></td></tr>

<tr><td>Message<br><textarea cols="40" rows="5" class="searchbox"></textarea></td></tr>
<tr><td>&nbsp;<input type="button" value="Send" class="buttons" onclick="alert('Thanks for your feedback!');"></td></tr>

<tr><td style="background-image:url('images/botgrey.png'); background-repeat:no-repeat;">&nbsp;&nbsp;<br><br></td></tr>
<tr><td>	<div class="title" style="padding-top: -25px; color: #99BD37;"><img src="images/Profileicon.png" height="26" width="29" align="absmiddle"> </img>Recent fans</div><hr></td></tr>

<tr><td><img src="profile/girl1.jpg"></img>&nbsp;&nbsp;<img src="profile/girl2.jpg"></img>&nbsp;&nbsp;<img src="profile/girl3.jpg"></img>&nbsp;&nbsp;<img src="profile/boy1.jpg"></img>&nbsp;&nbsp;<img src="profile/boy2.jpg"></img>&nbsp;&nbsp;<img src="profile/girl4.jpg"></img>&nbsp;&nbsp;</td> </tr>
</tbody></table>

</td>
<td></td>
<td></td>

<td width="100" style="padding-left:16px; padding-right:10px;">
	<table width="259" border="0" cellspacing="0" class='tabletext'>
	<tr><td><br></td></tr>
<tr><td style="background-image:url('images/topgreen.png'); background-repeat:no-repeat; line-height:12px;">&nbsp;</td></tr>
	<tr><td bgcolor="#f89300">&nbsp;&nbsp;Who is the powerful cartoon hero?</td></tr>
	<tr><td bgcolor="#ccff99"><input name="answer" value="2" type="radio">
	<a href="javascript:document.form.answer[1].click();">Popoye</a></td></tr>
	<tr><td bgcolor="#99ffff"><input name="answer" value="3" type="radio">
	<a href="javascript:document.form.answer[2].click();">SuperMan</a></td></tr>
	<tr><td bgcolor="#ff99ff"><input name="answer" value="4" type="radio">
	<a href="javascript:document.form.answer[3].click();">Pink Panther</a></td></tr>
	<tr><td bgcolor="#ffcc66" >&nbsp;&nbsp;<input type="button" value="vote" class="buttons" onclick="alert('Thanks for voting!');"></td></tr>
<tr><td style="background-image:url('images/botgreen.png'); background-repeat:no-repeat;">&nbsp;&nbsp;<br><br></td></tr>
<tr><td width="194"><div id="ArticleRightCol">
	<div id="listing">
	<div class="iblock" style="padding-top:16px; margin-top:10px;">
	<div class="title" style="padding-top: -25px; color: #99BD37;"><img src="images/game.png" height="26" width="29" align="absmiddle"> </img>RECENTLY PLAYED</div>
	</div>	
<?Php
// this program will list out all
$result = mysql_query("select PIC_CATID,USER_ID,PIC_QUESTION,PIC_TOSHOW FROM kid_quizquestions order by rand() limit 2");
while ($row = mysql_fetch_array($result,MYSQL_ASSOC)) 
{
	$username=getUserName($row{'USER_ID'});
	$question=$row{'PIC_QUESTION'};
	$picture=$row{'PIC_TOSHOW'};
	$catid=getSubjectName($row{'PIC_CATID'});
	$question=substr($question,0,16)."...?";
?>
		<div class="nwBody">
		<a href="#"><img src="game/<?Php echo $picture;?>" border="0" class="img"/></a>
		<div class="info">
		<div><a href="#"><?Php echo $question;?></a></div>
		<div>Subject: <?Php echo $catid;?></div>
		By: <?Php echo $username;?>
		</div>
		<div></div>
		<div class="info" style="padding-top:68px;"><a href="#"><img src="images/playhover.png" onmouseover="this.src='images/play.png';" onmouseout="this.src='images/playhover.png';" border="0"></img></a></div>
		</div>
<?Php		
}
?>	
</div></td></tr>
	</table>
</td>


	</tr>
</table>
</table>
<?php
include "footer.php";
mysql_close($dbh);
?>
</body>
</html>