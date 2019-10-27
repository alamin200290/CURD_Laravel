<!DOCTYPE html>
<html>
<head>
	<title>Delete confirm</title>
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
	</table>
	
	<form method="post">
		@csrf
		<h3>Are you sure?</h3>
		<a href="/stdList">
			<input type="button" value="Cancel">
		</a>
		<input type="hidden" name="sid" value="{{$std[0]}}">
		<input type="submit" name="delete" value="Confirm">
	</form>
</body>
</html>


