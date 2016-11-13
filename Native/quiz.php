<?php
// this program will list out all the sites in the sitelog table
include 'connect.php';
include 'functions.php';
$catid=1;

$username=$_COOKIE["kidsusername"];
$subject=$_REQUEST['category'];
$mode=$_REQUEST['playoptions'];
if(!isset($mode))
{
$mode="all";
}
$catid=getSubjectId($subject);
$userid=getUserId($username);
if($mode=="all")
$query="select PIC_QUESTION,PIC_TOSHOW,PIC_ANSWER FROM kid_quizquestions where PIC_CATID=$catid and PIC_SHAREDSTATUS=1 order by rand()";
if($mode=="yours")
{
$query="select PIC_QUESTION,PIC_TOSHOW,PIC_ANSWER FROM kid_quizquestions where PIC_CATID=$catid and USER_ID=$userid order by rand()";}
if($mode=="others")
{if($userid !=""){$query="select PIC_QUESTION,PIC_TOSHOW,PIC_ANSWER FROM kid_quizquestions where PIC_CATID=$catid and USER_ID!=$userid order by rand()";}
else{$query="select PIC_QUESTION,PIC_TOSHOW,PIC_ANSWER FROM kid_quizquestions where PIC_CATID=$catid order by rand()";}
}
$result = mysql_query($query);
echo "&filelist=";	
while ($row = mysql_fetch_array($result,MYSQL_ASSOC)){
	$question=$row{'PIC_QUESTION'};
	$picture=$row{'PIC_TOSHOW'};
	$answer=$row{'PIC_ANSWER'};
	echo $question.",".$picture.",".$answer."`";}
mysql_close($dbh);
?>
