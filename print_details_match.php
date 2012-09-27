<html>
<center>
<div class="wrapper" style="width:650px">
<head>
<link rel="stylesheet" type="text/css" href="web20.css">
<img src = "images/header.png"> </img></head>
</div>
</center>
</html>
<?php
$con = mysql_connect("localhost", "root", "") or DIE('Could not Connect:' . mysql_error());
mysql_select_db("HEC_Employee_Details", $con) or DIE('Connection to host failed. Please Retry');
$match_value = $_POST['match_value'];
$list3=$_POST['list3'];
$i = 1; 
if($list3 == 1)
{	
	$result=mysql_query("SELECT * FROM emp where dob = '$match_value'");
}
if($list3 == 2)
{
	$result=mysql_query("SELECT * FROM emp where doj = '$match_value'");
}
if($list3 == 3)
{
	$result=mysql_query("SELECT * FROM emp where dop = '$match_value'");
}
if($list3 == 4)
{
	$result=mysql_query("SELECT * FROM emp where bot = '$match_value'");
}
if($list3 == 5)
{
	$result=mysql_query("SELECT * FROM emp where eot = '$match_value'");
}
if($list3 == 6)
{	
	$result=mysql_query("SELECT * FROM emp where grade = '$match_value'");
}
if($list3 == 7)
{
	$result=mysql_query("SELECT * FROM emp where desig = '$match_value'");
}
if($list3 == 8)
{
	$result=mysql_query("SELECT * FROM emp where quali = '$match_value'");
}
if($list3 == 9)
{
	$result=mysql_query("SELECT * FROM emp where dept = '$match_value'");
}
if($list3 == 10)
{
	$result=mysql_query("SELECT * FROM emp where t_trng = '$match_value'");
}
if($list3 == 11)
{
	$result=mysql_query("SELECT * FROM emp where pot = '$match_value'");
}	

if($list3 == 12)
{
	$result=mysql_query("SELECT * FROM emp where name = '$match_value'");
}	
echo "<table border='1'><tr> <td> Sl. No. </td>
<td>Project Code</td> <td>Grade</td> <td>Name</td> <td>Personal Number</td> <td>Designation</td> <td>Qualification</td> <td>Date of Joining</td> <td> Date of Birth </td> <td>Date of Promotion</td> <td>Department</td> <td>Type of Training</td> <td> Place of Training </td> <td>Beginning of Training</td> <td>End of Training </td> </tr>";
$num_rows = mysql_num_rows($result);

echo " Number of Records fetched : ";
echo $num_rows;
echo "<br> </br>";
while($row = mysql_fetch_array($result))
{
	echo "<tr>";
	echo "<td>".$i."</td>";
	echo "<td>".$row["P_Code"]."</td>";
	echo "<td>".$row["Grade"]."</td>";
	echo "<td>".$row["Name"]."</td>";
	echo "<td>".$row['P_Num']."</td>";
	echo "<td>".$row['Desig']."</td>";
	echo "<td>".$row['Quali']."</td>";
	echo "<td>".$row['DOJ']."</td>";
	echo "<td>".$row['DOB']."</td>";
	echo "<td>".$row['DOP']."</td>";
	echo "<td>".$row['Dept']."</td>";
	echo "<td>".$row['T_Trng']."</td>";
	echo "<td>".$row['POT']."</td>";
	echo "<td>".$row['BOT']."</td>";
	echo "<td>".$row['EOT']."</td>";
	echo "</tr>";
	$i++;
}
echo "</table>";
?>