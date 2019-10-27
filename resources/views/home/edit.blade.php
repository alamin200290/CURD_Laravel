<!DOCTYPE html>
<html>
<head>
	<title>Edit Student</title>
</head>
<body>
	<h2>Edit Student</h2>
	<a href="{{route('home.index')}}">Back</a> |
	<a href="/logout">Logout</a>
	
<form method="post">
	@csrf	
	<table>
		<tr>
			<td>ID : </td>
			<td>{{$std['userId']}}</td>
		</tr>
		<tr>
			<td>Name : </td>
			<td><input type="text" name="name" value="{{$std['name']}}"></td>
		</tr>
		<tr>
			<td>CGPA :</td>
			<td><input type="text" name="cgpa" value="{{$std['cgpa']}}"></td>
		</tr>
		<tr>
			<td>DEPT : </td>
			 <!--your task -->
			<td>
				<select name="dept">
					<option @if($std['dept'])=="CSSE" selected @endif value="CSSE">CSSE</option>
					<option @if($std['dept'])=="SE" selected @endif
					value="SE">SE</option>
					<option @if($std['dept'])=="CSE" selected @endif
					value="CSE">CSE</option>
					<option @if($std['dept'])=="CIS" selected @endif
					value="CIS">CIS</option>
				</select>
			</td>
		</tr>
		<tr>
			<td> </td>
			<td><input type="submit" name="save" value="save"></td>
		</tr>
	</table>
</form>

</body>
</html>