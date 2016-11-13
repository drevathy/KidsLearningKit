<HTML>
<HEAD>
<meta http-equiv=Content-Type content="text/html;  charset=ISO-8859-1">
<script language="JavaScript">
<!--
    function removeMenu(){
      if (event.button == 2){
        myMovie.TGotoFrame("/menu", 2);
        parent.frames.location.replace('javascript: parent.dummy1');
      }
    }
//-->

function popupwindow()
{
	window.top.opener=self;
	window.top.close();
}
</script>
</head>
<?php
include "connect.php";
$gameid=$_REQUEST['gameid'];

function getGameData($gameid)
{
	$result = mysql_query("select PIC_QUESTION,PIC_TOSHOW,PIC_ANSWER from kid_quizquestions where QUIZ_ID=$gameid");
	$row = mysql_fetch_array($result,MYSQL_ASSOC);
	$question=$row{'PIC_QUESTION'};
	$picture=$row{'PIC_TOSHOW'};
	$answer=$row{'PIC_ANSWER'};
	$loadgame="gameintro.swf?randoption=1&randcat=transport&loadthisquestion=".$question.",".$picture.",".$answer;
	return $loadgame;
}
if(isset($gameid))
{
$thisgame=getGameData($gameid);
}
else
{
$thisgame="gameintro.swf";
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Jambav </title>
</head>
<body bgcolor="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" scroll="no">
<div align="center" onMouseDown="removeMenu()"></div>
<div align="center">
  <table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>

      <td align="center" valign="middle">
<div onMouseDown="removeMenu()">
<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
 codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#v..." name="myMovie"
 WIDTH="800" HEIGHT="600" ALIGN="" id="rightclick">
  <PARAM NAME=movie VALUE="<?Php echo $thisgame;?>">
  <PARAM NAME=quality VALUE=high>
  <PARAM NAME=wmode VALUE=opaque>
  <PARAM NAME=menu VALUE=false>
  <PARAM NAME=bgcolor VALUE=#000000>
  <EMBED src="<?Php echo $thisgame;?>" quality=high wmode=opaque menu=false bgcolor=#000000  WIDTH=800" HEIGHT="600" NAME="myMovie"
ALIGN=""
 TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer"
swliveconnect="true"></EMBED>
     </object>

      </td>
      <td>
    </tr>
  </table>
</div>

</HTML>

