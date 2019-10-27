<!DOCTYPE html>
<html>
<head>
	<title>Create Student</title>
</head>
<body>
	<h2>Add Student</h2>
	<a href="/home">Back</a> |
	<a href="/logout">Logout</a>
	
<form method="post">
	@csrf	
	<table>
		<tr>
			<td>Username:</td>
			<td><input type="text" name="uname"></td>
		</tr>
		<tr>
			<td>Password: </td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td>Name : </td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>CGPA :</td>
			<td><input type="text" name="cgpa"></td>
		</tr>
		<tr>
			<td>DEPT : </td>
			<td>
				<select name="dept">
					<option value="CSSE">CSSE</option>
					<option value="SE">SE</option>
					<option value="CSE">CSE</option>
					<option value="CIS">CIS</option>
				</select>
			</td>
		</tr>
		<tr>
			<td> </td>
			<td><input type="submit" name="save" value="save"></td>
		</tr>
	</table>
</form>

@foreach($errors->all() as $err)
	{{$err}} <br>
@endforeach




</body>
</html>