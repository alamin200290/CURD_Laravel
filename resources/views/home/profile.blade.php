<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<h2>Profile Page</h2>
	<a href="{{route('home.index')}}">Back</a>|
	<a href="/logout">Logout</a>	
	<br><br>

	<form method="post" enctype="multipart/form-data">
		{{csrf_field()}}
		<input type="file" name="pic"> 
		<input type="submit" name="submit" value="upload">
	</form>

</body>
</html>