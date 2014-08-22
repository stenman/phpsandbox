<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />

	<title>POST example</title>

	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="../css/custom.css">
</head>
<body>

	<?php
	if(isset($_POST['name'], $_POST['age'])){
		$name = htmlentities($_POST['name'], ENT_QUOTES, 'UTF-8');
		$age = htmlentities($_POST['age'], ENT_QUOTES, 'UTF-8');
		echo "Your name is {$name} and you are {$age} years old.";
	}
	?>

	<form action="examplepost.php" method="post">
		<input autofocus id="input_name" type="text" name="name" placeholder="Name"/>
		<input id="input_age" type="text" name="age" placeholder="Age"/>
		<input type="submit">
	</form>

	<div id="output"></div>
</body>
</html>