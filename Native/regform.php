<?php
	//phpinfo(); die;
	$uname = $_POST['uname'];
	$pass  = $_POST['password'];
	$email = $_POST['email'];
	
	$Password = md5($pass);
	
	require_once('connect.php');
	
	$res = mysql_query("select * from kid_userdetails where user_name='$uname';");
	$numrows = mysql_num_rows($res);
	if($numrows > 0)
	{
		header("Location: http://drevathy/kidslearningkit/register.php?param=1");	
	}	
	$res = mysql_query("select * from kid_userdetails where user_email='$email';");
	$numrows = mysql_num_rows($res);
	if($numrows > 0)
	{
		header("Location: http://drevathy/kidslearningkit/register.php?param=2");	
	}	
	$query = mysql_query("insert into kid_userdetails (user_name,password,user_email,user_joineddate) values ('$uname','$Password','$email',now())");
	if($query)
	{
		header("Location: http://drevathy/kidslearningkit/register.php?param=3");
	}	
?>