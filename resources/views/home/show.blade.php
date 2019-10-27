<!DOCTYPE html>
<html>
<head>
	<title>Student List</title>
</head>
<body>

	<h2>Student list </h2>
	<a href="/home">Back</a> |
	<a href="/logout">Logout</a>
	
	<br>
	<br>

	<table border="1">
		<tr align="center">
			<td>ID</td>
			<td>NAME</td>
			<td>CGPA</td>
			<td>Action</td>
		</tr>

		@foreach ($stdlist as $s) 
			<tr>
				<td>{{$s['userId']}}</td>
				<td>{{$s['name']}}</td>
				<td>{{$s['cgpa']}}</td>
				<td>
					<a href="{{route('home.details', $s['userId'])}}">Details</a> |
					<a href="{{route('home.edit', $s['userId'])}}">Edit</a> |
					<a href="{{route('home.delete', $s['userId'])}}">Delete</a> 
				</td>
			</tr>
		@endforeach


	</table>
		

</body>
</html>