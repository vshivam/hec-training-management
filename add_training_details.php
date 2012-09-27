<html>
<center>
<div class="wrapper" style="width:650px">
<head><img src = "images/header.png"> </img></head>
</br>
</br>

Dates Must be entered in the following format [YYYY-MM-DD]
<br> </br>
<fieldset width="150px">
<legend> <b>Add Training Details</b></legend>
<form method="POST" action="verify_tdetails.php"> 

<table>
<tr> <td> Enter Type of training attended : </td> <td> <select name="list1"> <option value="1">Internal / In-House</<option> <option value="2"> Local </option> <option value="3"> External / Outstation </option> </select> </td> </tr>
<tr> <td> Enter Date for Beginning of Training :&nbsp</td><td><input type= "text" name="bot" size="20"</td></tr>
<tr> <td> Enter Date for End of Training :</td><td><input type= "text" name="eot" size="20"</td></tr>
<tr> <td> Enter Place of Training : </td> <td><input type="text" name="pot" size="20"> </td></tr>
</table>
<br></br>
<input type="submit" value="Add Details">

</form>
</fieldset>
</div>
</center>
</html>