<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>gameintro</title>
<script language="javascript">AC_FL_RunContent = 0;</script>
<script src="AC_RunActiveContent.js" language="javascript"></script>
</head>
<link rel="stylesheet" type="text/css" href="styles.css" />
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
<td valign="bottom" width="113" class="activetab" ><a href="games.php" class="activetablinks">GAME ZONE</a></td>
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

<table width="896" border="0"  cellpadding="0" cellspacing="0" align="center">
<tbody>
<tr>
<td valign="top" style="height: 2px; width: 900px;" background="images/greenline.png">
</td>

</tr>
</tbody>
</table>
<table border="0" cellpadding="0" cellspacing="0" align="center" width="897" bgcolor="#ffffff">
<tr>
<td><div></div></td>
<td align="center"><a href="javascript:void(0)" onclick="fullScreenMode('gamefull.php')" title="tools" rel="dropmenu5_c" class="newgamesLink"><span style='cursor:pointer'>FULLSCREEN</span></a><div>
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
<script language="javascript">
	if (AC_FL_RunContent == 0) {
		alert("This page requires AC_RunActiveContent.js.");
	} else {
		AC_FL_RunContent(
			'codebase', 'http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0',
			'width', '800',
			'height', '600',
			'src', 'gameintro',
			'quality', 'high',
			'pluginspage', 'http://www.macromedia.com/go/getflashplayer',
			'align', 'middle',
			'play', 'true',
			'loop', 'true',
			'scale', 'showall',
			'wmode', 'window',
			'devicefont', 'false',
			'id', 'gameintro',
			'bgcolor', '#000000',
			'name', 'gameintro',
			'menu', 'true',
			'allowFullScreen', 'true',
			'allowScriptAccess','sameDomain',
			'movie', 'gameintro',
			'salign', ''
			); //end AC code
	}
</script>

<noscript>
<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="800" height="600" id="gameintro" align="middle">
<param name="allowScriptAccess" value="sameDomain" />
<param name="allowFullScreen" value="false" />
<param name="movie" value="http://drevathy/kidslearningkit/fla/gameintro.swf" />
<param name="quality" value="high" /><param name="bgcolor" value="#ffffff" />	
<embed src="http://drevathy/kidslearningkit/fla/gameintro.swf" quality="high" bgcolor="#ffffff" width="800" height="600" name="gameintro" align="middle" allowScriptAccess="sameDomain" allowFullScreen="true" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
</object>
</noscript></div></td>

</tr></table>
</body>
<?php
include "footer.php";
?>
</html>