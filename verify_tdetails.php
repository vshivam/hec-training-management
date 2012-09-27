<?php
session_start();
$con = mysql_connect("localhost", "root", "") or DIE('Could not Connect:' . mysql_error());
mysql_select_db("HEC_Employee_Details", $con) or DIE('Connection to host failed. Please Retry');
$list_value = $_POST['list1'];
if ($list_value == 1)
{
	$t_training = "Internal";
}
elseif ($list_value == 2)
{
	$t_training = "Local";
	
}
elseif($list_value == 3)
{
	$t_training = "External";
}
$bot = $_POST['bot'];
$eot = $_POST['eot'];
$pot = $_POST['pot'];

mysql_query("Update emp SET t_trng='$t_training', eot='$eot', bot='$bot', pot='$pot'where p_num = '$_SESSION[p_num]'");
header('Location:success.php');

?>

