<?php
session_start();
$con = mysql_connect("localhost", "root", "") or DIE('Could not Connect:' . mysql_error());
mysql_select_db("HEC_Employee_Details", $con) or DIE('Connection to host failed. Please Retry');
$uname=$_POST['username'];
$pwd=$_POST['password'];
$login = mysql_query("SELECT * From user where username = '$_POST[username]' and password = '$_POST[password]' ", $con);
$num_rows = mysql_num_rows($login);
if ($num_rows==1)
{
	header('Location:menu.php');
}
else
{
	header('Location:index.php');
}

?>