<?php
$conn=mysql_connect(localhost,$dbuser,$dbpass);
mysql_select_db($dbname);
session_start();
$user_check=$_SESSION['login_user'];
$ses_sql="select * from student where username='$user_check'";
$result=mysql_query($ses_sql);
$row=mysql_fetch_assoc($result);
$login_session=$row['username'];
if(!isset($login_session))
{
mysql_close($conn);
header("location:http://localhost/session.php");
}

?>
