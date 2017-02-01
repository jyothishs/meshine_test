 <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1><center>Add Employee</center></h1>
<center>

<table>
<form method="POST" action="../service/add_service.php">
<tr>
		<td>name</td>
		<td><input type="text" name="username"></td>
	</tr>

	<tr>
		<td>phone</td>
		<td><input type="text" name="phone"></td>
	</tr>
	<tr>
		<td>email</td>
		<td><input type="text" name="email"></td>
	</tr>
	<tr>
		<td>Gender</td>
		<td><input type="radio" name="gender">male
             <input type="radio" name="gender">female</td>
	</tr>
	<tr>
		<td>Hobbies</td>
		  <td><input type="checkbox" name="hobbie">listening to music<br> 
          <input type="checkbox" name="hobbie">reading<br>
           <input type="checkbox" name="hobbie">browsing<br>
           <input type="checkbox" name="hobbie">playing<br>
         </td>
	</tr>
	<tr>
	  <td>profile pic</td>	
	  <td><input type="file" name="file"></td>
	</tr>
	<tr>
		<td>country</td>
		<td><select name="country">
			<option>india</option>
			<option>usa</option>
			<option>china</option>
		</select></td>
	</tr>
	<tr>
		<td><input type="submit" name="submit" value="save"></td>
	</tr>

</form>
</table>

</center>
</body>
</html>