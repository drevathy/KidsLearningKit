<?Php
// this program will list out all the sites in the sitelog table
include 'connect.php';
function getUserName($userid)
{
	$result = mysql_query("select USER_NAME from kid_userdetails where USER_ID=$userid");
	$row = mysql_fetch_array($result,MYSQL_ASSOC);
	$username=$row{'USER_NAME'};
	return $username;
}
function getSubjectName($subid)
{
	$result = mysql_query("select PIC_CATNAME from quiz_category where QUIZ_ID=$subid");
	$row = mysql_fetch_array($result,MYSQL_ASSOC);
	$subname=$row{'PIC_CATNAME'};
	return $subname;
}
function getSubjectId($subjectname)
{
	$result = mysql_query("select QUIZ_ID from quiz_category where PIC_CATNAME='$subjectname'");
	$row = mysql_fetch_array($result,MYSQL_ASSOC);
	$subid=$row{'QUIZ_ID'};
	return $subid;
}
function getUserId($username)
{
	$result = mysql_query("select USER_ID from kid_userdetails where USER_NAME='$username'");
	$row = mysql_fetch_array($result,MYSQL_ASSOC);
	$id=$row{'USER_ID'};
	return $id;
}
?>

