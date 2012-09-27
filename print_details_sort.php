<html>
<center>
<head>
<link rel="stylesheet" type="text/css" href="web20.css">
<img src = "images/header.png"> </img></head>
</br>
</br>
<?php
$con = mysql_connect("localhost", "root", "") or DIE('Could not Connect:' . mysql_error());
mysql_select_db("HEC_Employee_Details", $con) or DIE('Connection to host failed. Please Retry');
$list2=$_POST['list2'];
$i = 1; 
if($list2 == 1)
{	
	$result=mysql_query("SELECT * FROM emp ORDER BY dob");
}
if($list2 == 2)
{
	$result=mysql_query("SELECT * FROM emp ORDER BY doj");
}
if($list2 == 3)
{
	$result=mysql_query("Select * FROM emp ORDER BY dop");
}
if($list2 == 4)
{
	$result=mysql_query("SELECT * FROM emp ORDER BY bot");
}
if($list2 == 5)
{
	$result=mysql_query("SELECT * FROM emp ORDER BY eot");
}
if($list2 == 6)
{	
	$result=mysql_query("SELECT * FROM emp order by Grade");
}
if($list2 == 7)
{
	$result=mysql_query("SELECT * FROM emp order by desig");
}
if($list2 == 8)
{
	$result=mysql_query("Select * FROM emp order by quali");
}
if($list2 == 9)
{
	$result=mysql_query("SELECT * FROM emp order by dept");
}
if($list2 == 10)
{
	$result=mysql_query("SELECT * FROM emp order by t_trng");
}
if($list2 == 11)
{
	$result=mysql_query("SELECT * FROM emp order by pot");
}
$num_rows = mysql_num_rows($result);
echo " Number of Records fetched : ";
echo $num_rows;
echo "<br> </br>";
echo "<table border='1'>
<tr> <td> Sl. No. </td>
<td>Project Code</td> <td>Grade</td> <td>Name</td> <td>Personal Number</td> <td>Designation</td> <td>Qualification</td> <td>Date of Joining</td> <td> Date of Birth </td> <td>Date of Promotion</td> <td>Department</td> <td>Type of Training</td> <td> Place of Training </td> <td>Beginning of Training</td> <td>End of Training </td> </tr>";


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
echo "</div>
</center>
</html>";
mysql_close($con);
?>
