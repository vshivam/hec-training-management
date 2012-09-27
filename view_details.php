<html>
<center>
<div class="wrapper" style="width:650px">
<head><img src = "images/header.png"> </img></head>
<fieldset>
<legend><b>Show all Employee Details Sorted by : &nbsp </b></legend> 
<form method = "POST" action = "print_details_sort.php">
<select name="list2"> 
	<option value ="1"> Date Of Birth </option>
	<option value ="2"> Date of Joining </option>
	<option value ="3"> Date of Promotion </option>
	<option value ="4"> Date of Beginning of Training </option>
	<option value ="5"> Date of End of Training </option>
	<option value ="6"> Grade </option>
	<option value ="7"> Designation </option>
	<option value ="8"> Qualification </option>
	<option value ="9"> Department </option>
	<option value ="10"> Type of Training </option>
	<option value ="11"> Place of Training </option>
</select>
<input type="submit" value="Show Records">
</form>
</fieldset>
</br>

<fieldset>
<legend> <b> Find Exact Records &nbsp </b></legend>
<form method = "POST" action = "print_details_match.php">
Enter Value for : &nbsp <select name="list3"> 
	<option value ="1"> Date Of Birth </option>
	<option value ="2"> Date of Joining </option>
	<option value ="3"> Date of Promotion </option>
	<option value ="4"> Date of Beginning of Training </option>
	<option value ="5"> Date of End of Training </option>
	<option value ="6"> Grade </option>
	<option value ="7"> Designation </option>
	<option value ="8"> Qualification </option>
	<option value ="9"> Department </option>
	<option value ="10"> Type of Training </option>
	<option value ="11"> Place of Training </option>
	<option value ="12"> Name </option>
	
</select>
<input type="text" name="match_value" size="20">
<input type="submit" value="Show Records">
</form>

</fieldset>
</br>
<fieldset> 
<legend> <b> Find Records in given period &nbsp </b></legend>
<form method = "POST" action = "records_date.php">	
	Enter Dates in the following format : [YYYY-MM-DD] <br> </br>
	<select name = "list4">
	<option value ="1"> Date Of Birth </option>
	<option value ="2"> Date of Joining </option>
	<option value ="3"> Date of Promotion </option>
	<option value ="4"> Date of Beginning of Training </option>
	<option value ="5"> Training Man Days </option>
	<option value ="6"> Training Hours </option>
	</select>
From : <input type="text" name = "date_start"> &nbsp &nbsp To: <input type ="text" name ="date_end">
</br>
</br>
<input type="submit" value="Show Records">

</form>
</fieldset>
</div>
</center>
</html>