<?php
ob_start();
?>
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
<table border="0" cellpadding="0" cellspacing="0" align="center">
<tr>
<td><div></div></td><tr>
<?php
include "header.php";
	require_once('connect.php');
//if ((($_FILES["file"]["type"] == "image/gif")|| ($_FILES["file"]["type"] == "image/jpg")|| ($_FILES["file"]["type"] == "image/pjpeg")))
  //{
  $fileName=""; $loggedInUser=""; $userId=""; $category="9";
  $question = $_POST['question'];
  $answer   = $_POST['answer'];
  $tags     = $_POST['tags'];
    $subject = $_POST['subject'];
  $status = $_POST['status'];
  //$category = $_POST['category'];
  
	
	if($_COOKIE['kidsusername'] != null)
	{
		$loggedInUser =  $_COOKIE['kidsusername'];
		$resultset = mysql_query("select user_id from kid_userdetails where user_name='$loggedInUser';");
		$row = mysql_fetch_row($resultset);
		if($row != null)
		{
			$userId = $row[0];	
		}
	}
    if ($_FILES["file"]["error"] > 0)
   {
   }
   else
   {
	
	  if (file_exists("upload/" . $_FILES["file"]["name"]))
	  {
		header("Location: http://drevathy/kidslearningkit/create.php?param=trydifferent");		
	  }
      else
      {
	   if($userId > 0)
	   {
	       move_uploaded_file($_FILES["file"]["tmp_name"],
	      "game/" . $_FILES["file"]["name"]);
		   $fileName = $_FILES["file"]["name"];
		   //if(file_exists("upload/".$fileName))
		   //{
			//   saveAsJPG("./upload/".$fileName,"./upload/".$fileName,'.jpg', $bgcolor=false,400,200);
			 //  saveAsJPG("./upload/".$fileName,"./upload/thumb_".$fileName,'.jpg', $bgcolor=false,90,115);
			   $result = mysql_query("INSERT INTO kid_quizquestions (pic_catid, pic_question, pic_answer,pic_toshow,user_id,pic_tags,PIC_SHAREDSTATUS,pic_createdtime) VALUES ($subject,'$question','$answer','$fileName',$userId,'$tags','$status',now())");
			if($result)
			{
				header("Location: http://drevathy/kidslearningkit/create.php?param=success");
			}   
		  // }   
				
			//header("Location: http://sandhiya/sandhiya/kidslearningkit-rev/customize.php?param=troublefilecreating");
		}
		else
		{
			header("Location: http://drevathy/kidslearningkit/create.php?param=invaliduser");
		}
      }
    }
?></div></td>
</tr></table>
</body>
</html>
<?php
ob_end_flush();
?>

