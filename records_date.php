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

session_start();
$con = mysql_connect("localhost", "root", "") or DIE('Could not Connect:' . mysql_error());
mysql_select_db("HEC_Employee_Details", $con) or DIE('Connection to host failed. Please Retry');
$date_start = $_POST['date_start'];
$date_end = $_POST['date_end'];
$list4 = $_POST['list4'];
$i=1;
$j=1;
$man_days = 0;
$man_days_total = 0;
if($list4 == 1)
{
	$result_2 = mysql_query("SELECT * FROM emp where dob between '$date_start' AND '$date_end' ");
	print_result($result_2);
}

if($list4 == 2)
{
	$result_2 = mysql_query("SELECT * FROM emp where doj between '$date_start' AND '$date_end' ");
	print_result($result_2);
}

if($list4 == 3)
{
	$result_2 = mysql_query("SELECT * FROM emp where dop between '$date_start' AND '$date_end' ");
	print_result($result_2);
}

if($list4 == 4)
{
	$result_2 = mysql_query("SELECT * FROM emp where bot between '$date_start' AND '$date_end' ");
	print_result($result_2);
}

function print_result($result)
{
echo "<table border='1'><tr> <td> Sl. No. </td>
<td>Project Code</td> <td>Grade</td> <td>Name</td> <td>Personal Number</td> <td>Designation</td> <td>Qualification</td> <td>Date of Joining</td> <td> Date of Birth </td> <td>Date of Promotion</td> <td>Department</td> <td>Type of Training</td> <td> Place of Training </td> <td>Beginning of Training</td> <td>End of Training </td> </tr>";

$i = mysql_num_rows($result);
echo " Number of Records fetched : ".$i;
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
	
}

echo "</table>";
}

if($list4 == 5 || $list4 == 6)
{
	echo "<center>";
	echo "<table>";
	$result_1 = mysql_query("SELECT * FROM Emp");
	
	function greaterDate($start_date,$end_date)
	{  
		$start = strtotime($start_date);  
		$end = strtotime($end_date);  
		if ($start-$end > 0)    
		return 1;  
		else   return 0;
	}
	
	while($row_1 = mysql_fetch_array($result_1))
	{
		$bot = $row_1["BOT"];
		$eot = $row_1["EOT"];	
		
		if(greaterDate($bot, $date_start ) == 1)
		{
			if(greaterDate($eot, $date_end) == 1)
			{
				$man_days = (strtotime($date_end) - strtotime($bot)) / (60*60*24);
				if ($man_days < 0 )
				{
					$man_days = 0;
				}
				echo "<tr> <td> Training man days for Trainee : ".$j." = ".$man_days."</td> </tr>";
				echo "</br>";
			}
			if(greaterDate($date_end, $eot) == 1)
			{
				$man_days = (strtotime($eot) - strtotime($bot)) / (60*60*24);
				if ($man_days < 0 )
				{
					$man_days = 0;
				}
				echo "<tr> <td> Training man days for Trainee : ".$j." = ".$man_days."</td> </tr>";
				echo "</br>";
			}
		}
		elseif(greaterDate($date_start, $bot) == 1)
		{
			if(greaterDate($eot, $date_end) == 1)
			{
				$man_days = (strtotime($date_end) - strtotime($date_start)) / (60*60*24);
				if ($man_days < 0 )
				{
					$man_days = 0;
				}
				echo "<tr> <td> Training man days for Trainee : ".$j." = ".$man_days."</td> </tr>";
				echo "</br>";
			}
			if(greaterDate($date_end, $eot) == 1)
			{
				$man_days= (strtotime($eot) - strtotime($date_start)) / (60*60*24);
				if ($man_days < 0 )
				{
					$man_days = 0;
				}
				
				echo "<tr> <td> Training man days for Trainee : ".$j." = ".$man_days."</td> </tr>";
				echo "</br>";
			}
		}
	$j++;
	$man_days_total = $man_days_total+$man_days;
	}
	$training_hours = $man_days_total * 8;
	echo "<tr> <td> Total Training Man Days in the Given Period :  ".$man_days_total."</td> </tr>";
	if($list4 == 6)
	{
		echo "</br>";
		echo "<tr> <td> <b> Total Training Hours in the Given Period : ".$training_hours." </b> </td> </tr>";
		echo "</center>";
	}
}


?>