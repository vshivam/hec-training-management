<?php
session_start();
$con = mysql_connect("localhost", "root", "") or DIE('Could not Connect:' . mysql_error());
mysql_select_db("HEC_Employee_Details", $con) or DIE('Connection to host failed. Please Retry');
$p_code=$_POST['p_code'];
$grade=$_POST['grade'];
$name=$_POST['name'];
$p_num=$_POST['p_num'];
$_SESSION['p_num']=$p_num;
$desig=$_POST['desig'];
$quali=$_POST['quali'];
$doj=$_POST['doj'];
$dob=$_POST['dob'];
$dop=$_POST['dop'];
$dept=$_POST['dept'];
$training_value=$_POST['training_value'];
$t_check=(int)strcmp($training_value, 'Y');
$t_check_1=(int)strcmp($training_value, 'N');
$dop_check=(int)strcmp($dop, 'N/A');
if(!$p_code || !$grade || !$name || !$p_num || !$desig || !$quali || !$doj || !$dob || !$dept || !$training_value)
{	
	header('Location:add_emp_details.php');		
}
else
{
	if($dop_check == 0)
	{
		$dop = '0000-00-00';
	}
	
	mysql_query( "INSERT INTO emp(p_code, grade, name, p_num, desig, quali, doj, dob, dop, dept) VALUES ('$p_code', '$grade', '$name', '$p_num', '$desig', '$quali', '$doj', '$dob','$dop', '$dept')");
	
	if( $t_check==0 )
	{
		header('Location:add_training_details.php');
	}
	elseif($t_check_1==0)
	{
		header('Location:success.php');
	}
	else
	echo 'Please Enter Correct Value for Training attended';
}
?>