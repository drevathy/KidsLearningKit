<?php
	//phpinfo(); die;
	$uname = $_POST['username'];
	$pass  = $_POST['userpass'];
		
	$Password = md5($pass);
	mysql_connect("localhost", "root", "revathy") or die ("could not connect ".mysql_error());
	mysql_select_db("kidslearningkit");	
		
	//echo $uname." ".$pass." ".$Password." ".$email;
	$query = mysql_query("select password from kid_userdetails where user_name='$uname';");
	$result = mysql_fetch_row($query);
	$userPassword = $result[0];
	if($Password==$userPassword)
	{
		setcookie  ("kidsusername" ,$uname,time()+86400);
		header("Location: http://drevathy/kidslearningkit/mypage.php");
	}
	else
	{
		header("Location: http://drevathy/kidslearningkit/homepage.php?invaliduser");
	}
	
/*
setcookie("TestCookie", $value);
setcookie("TestCookie", $value, time()+3600);  /* expire in 1 hour */
/*
setcookie("TestCookie", $value, time()+3600, "/~rasmus/", ".example.com", 1);

setcookie("cookie[three]", "cookiethree");
setcookie("cookie[two]", "cookietwo");
setcookie("cookie[one]", "cookieone");

// after the page reloads, print them out
if (isset($_COOKIE['cookie'])) {
    foreach ($_COOKIE['cookie'] as $name => $value) {
        echo "$name : $value <br />\n";
    }
}
*/
?>