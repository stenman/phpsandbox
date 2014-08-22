<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />

	<title>GET example</title>

	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="../css/custom.css">
</head>
<body>
	<form action="exampleget_process.php" method="get">
		<input autofocus id="input_name" type="text" name="name" placeholder="Name"/>
		<input id="input_age" type="text" name="age" placeholder="Age"/>
		<input type="submit">
	</form>

	<div id="output"></div>
</body>
</html>