<!DOCTYPE html>
<html>
<head>
	<title>Student Details</title>
</head>
<body>
	
	<a href="{{route('home.index')}}">Back</a> |
	<a href="/logout">Logout</a>
	
	<table>
		<tr>
			<td>UserId : </td>
			<td>{{$std['userId']}}</td>
		</tr>
		<tr>
			<td>Username : </td>
			<td>{{$std['username']}}</td>
		</tr>
		<tr>
			<td>Name : </td>
			<td>{{$std['name']}}</td>
		</tr>
		<tr>
			<td>CGPA :</td>
			<td>{{$std['cgpa']}}</td>
		</tr>
		<tr>
			<td>DEPT : </td>
			<td>{{$std['dept']}}</td>
		</tr>
		<tr>
			<td>Type : </td>
			<td>{{$std['type']}}</td>
		</tr>
	</table>
	
</body>
</html>